<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = auth()->user()->posts()->paginate(1);
        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'hospital_name' => ['string'],
            'doctor_name' => ['string'],
            'father_name' => ['string'],
            'mother_name' => ['string'],
            'address' => ['string'],
            'time_of_birth' => ['string'],
            'date_of_birth' => ['string'],
            'gender' => ['string'],
            'weight' => ['string'],
            'height' => ['string'],
            'head_size' => ['string'],
            'blood_group' => ['string'],
            'genotype' => ['string'],
            'image' => ['image', 'mimes:png,jpg,jpeg,gif']
            // 'image' => "required|image|mimes:png,jpg,jpeg,gif"

        ]);

        $post = Post::findOrFail($id);

        $data = $request->only('hospital_name', 'doctor_name', 'father_name', 'mother_name', 'address', 'time_of_birth', 'date_of_birth', 'gender', 'weight', 'height', 'head_size', 'blood_group', 'genotype', 'image');

        if ($request->hasFile('image')) {
            $data = array_merge($data, [
                'image' => $request->file('image')->store('images', 'public')
            ]);
            if(file_exists($file = storage_path('app/public' . $post->image))){
                unlink($file);
            }
        }




        $post->update($data);

        session()->flash('success', 'Baby record updated successfully');

        return redirect()->route('posts.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index');

    }
}
