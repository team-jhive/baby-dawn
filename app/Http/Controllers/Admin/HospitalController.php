<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.hospital.index', [
            'hospitals' => Hospital::latest()->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hospital.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => ['required', Rule::unique('hospitals')],
            'email' => ['required', 'email', Rule::unique('hospitals')],
            'phone' => ['required', Rule::unique('hospitals')],
            'address' => ['required'],
        ]);

        DB::beginTransaction();
        try {
            Hospital::create($valid);
            DB::commit();
            return redirect()->route('admin.hospitals.index')->with('success', 'Hospital created successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            report($th);
            return redirect()->back()->withInput($valid)->with('error', 'Failed to create Hospital');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function show(Hospital $hospital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function edit(Hospital $hospital)
    {
        return view('admin.hospital.edit', compact('hospital'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hospital $hospital)
    {
        $valid = $request->validate([
            'name' => ['required', Rule::unique('hospitals')->ignore($hospital)],
            'email' => ['required', 'email', Rule::unique('hospitals')->ignore($hospital)],
            'phone' => ['required', Rule::unique('hospitals')->ignore($hospital)],
            'address' => ['required'],
        ]);

        DB::beginTransaction();
        try {
            $hospital->update($valid);
            DB::commit();
            return redirect()->route('admin.hospitals.index')->with('success', 'Hospital data updated successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            report($th);
            return redirect()->back()->withInput($valid)->with('error', 'Failed to update Hospital record');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hospital $hospital)
    {
        //
    }
}
