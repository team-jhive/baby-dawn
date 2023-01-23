<?php

namespace App\Http\Controllers\Doctor;

use App\Models\Doctor\Doctor;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BabyRecordController extends Controller
{
    public function create()
    {
        return view('doctor.doctor.create', [
            'doctors' => doctor::get(['id', 'name'])
        ]);
    }
}


public function store(Request $request)
    {
        $request->validate([
            'hospital_name' => ['required', 'string'],
            'doctor_name' => ['required', 'string'],
            'father_name' => ['required', 'string'],
            'mother_name' => ['required', 'string'],
            'address' => ['required', 'string'],
            'time_of_birth' => ['required', 'string'],
            'date_of_birth' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'weight' => ['required', 'string'],
            'height' => ['required', 'string'],
            'head_size' => ['required', 'string'],
            'blood_group' => ['required', 'string'],
            'genotype' => ['required', 'string'],
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg,gif']
            // 'title' => ['required', 'unique:posts', 'min:5'],
            // 'body' => ['required', 'string', 'min:5'],
            // 'image' => ['required', 'image', 'mimes:png,jpg,jpeg,gif']
            // 'image' => "required|image|mimes:png,jpg,jpeg,gif"

        ]);

        $data = $request->only('hospital_name', 'doctor_name', 'father_name', 'mother_name', 'address', 'time_of_birth', 'date_of_birth', 'gender', 'weight', 'height', 'head_size', 'blood_group', 'genotype', 'image');
        // $slug = Str::slug($request->input('title'));

        Post::create(
            array_merge($data, [
                // 'slug' => $slug,
                'user_id' => auth()->user()->id,
                'image' => $request->file('image')->store('images', 'public')
            ])
        );

        session()->flash('success', 'Baby record created successfully');
        return redirect()->route('posts.index');
    }
