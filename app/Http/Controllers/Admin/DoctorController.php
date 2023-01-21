<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Hospital;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Mail\SendDoctorCredentialMailable;

class DoctorController extends Controller
{

    private $photo;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.doctor.index', [
            'doctors' => User::where('type', 'doctor')->latest()->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.doctor.create', [
            'hospitals' => Hospital::get(['id', 'name'])
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $valid = $request->validate([
            'name' => ['required'],
            'hospital' => ['required', 'exists:users,id'],
            'address' => ['required'],
            'phone' => ['required', Rule::unique('users')],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')],
            'profile_picture' => ['nullable', 'image', 'mimes:jpg,jpeg,png']
        ]);

        DB::beginTransaction();
        try {
            $password = Str::random(10);
            $data = array_merge($request->except('_token', 'hospital'), ['password' => bcrypt($password)]);
            if ($request->hasFile('profile_picture')) {
                $data['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
            }
            $user = User::create($data);
            $hospital = Hospital::findOrFail($request->input('hospital'));
            $user->hospitals()->attach($hospital);
            Mail::to($user)->send(new SendDoctorCredentialMailable($user, $password));
            DB::commit();
            return redirect()->route('admin.doctors.index')->with('success', 'Doctor Account created successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            report($th);
            return redirect()->back()->withInput($valid)->with('error', 'Failed to create Doctor Account');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(User $doctor)
    {
        return view('admin.doctor.edit', [
            'hospitals' => Hospital::get(['id', 'name']),
            'doctor' => $doctor
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $doctor)
    {
        $valid = $request->validate([
            'name' => ['required'],
            'hospital' => ['required', 'exists:users,id'],
            'address' => ['required'],
            'phone' => ['required', Rule::unique('users')->ignore($doctor)],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($doctor)],
            'profile_picture' => ['nullable', 'image', 'mimes:jpg,jpeg,png']
        ]);

        DB::beginTransaction();
        try {
            $data = array_merge($request->except('_token', 'hospital'));
            if ($request->hasFile('profile_picture')) {
                $this->photo = $data['image'] = basename($request->file('profile_picture')->store('profile_pictures', 'public'));
            }
            $doctor->update($data);
            $hospital = Hospital::findOrFail($request->input('hospital'));
            $doctor->hospitals()->attach($hospital);
            DB::commit();
            return redirect()->route('admin.doctors.index')->with('success', 'Doctor account updated successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            report($th);
            $this->deletePhoto();
            return redirect()->back()->withInput($valid)->with('error', 'Failed to update Doctor Account');
        }
    }

    private function deletePhoto()
    {
        if ($this->photo) {
            Storage::delete(storage_path("app/public/profile_pictures/$this->photo"));
            $this->photo = null;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
