<?php

namespace App\Http\Controllers\Admin;

use App\Models\Baby;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BabyRecordController extends Controller
{
    public function index()
    {
        return view('admin.baby-records.index');
    }

    public function search(Request $request)
    {
        return view('admin.baby-records.search');
    }


    public function create()
    {

        return view('admin.baby-records.create',[
            'hospitals' => Hospital::all(),
            'doctors' => User::where('type', 'doctor')->get()
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
            'father_name' => ['required' , 'string'],
            'mother_name' => ['required' , 'string'],
            'hospital_id' => ['required' , 'string'],
            'doctor_id' => ['required' , 'string'],
            'address' => ['required' , 'string'],
            'gender' => ['required' , 'string'],
            'weight' => ['required' , 'string'],
            'height' => ['required', 'string'],
            'date_of_birth' => ['required' , 'string'],
            'time_of_delivery' => ['required' , 'string'],
            'type_of_delivery' => ['required' , 'string'],
            'is_alive' => ['required' , 'string'],
            'condition' => ['required' , 'string'],

        ]);

        DB::beginTransaction();
        try {
            Baby::create($request->except('_token'));
            // dd('it was here');
            DB::commit();
            return redirect()->route('admin.index')->with('success', 'Record created successfully.');
        } catch (\Throwable $th) {
            // dd('it ran here');
            DB::rollBack();
            report($th);
            return redirect()->back()->withInput($valid)->with('error', 'Failed to create Record.');
        }
        // $data = $request->only('name', 'father_name', 'mother_name', 'hospital_name', 'doctor', 'address', 'gender', 'weight', 'height', 'date_of_birth', 'time_of_birth', 'type_of_delivery', 'is_alive', 'condition');

        // Admin::create(
        //     array_merge($data, [
        //         // 'slug' => $slug,
        //         'hospital_id' => auth()->user()->id,
        //     ])
        // );

        // session()->flash('success', 'Baby record created successfully');
        // return redirect()->route('admin.index');
    }
}
