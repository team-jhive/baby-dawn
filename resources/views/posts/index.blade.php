@extends('layouts.app')

@section('content')


<!-- Main Content -->
<div class="p-3 mt-5 text-center bg-white shadow container-fluid">
        <h2> All Records </h2>
        <x-alerts />
        <br>
        <table class="table">
            <!-- <caption>List of users</caption> -->
            <thead>
                <tr>
                
                <th scope="col">Hospital Name</th>
                <th scope="col">Doctor’s Name</th>
                <th scope="col">Father’s Name</th>
                <th scope="col">Mother’s Name</th>
                <th scope="col">Address</th>
                <th scope="col">Date </th>
                <th scope="col">Time</th>
                <th scope="col">Gender</th>
                <th scope="col">Weight</th>
                <th scope="col">Height</th>
                <th scope="col">Image</th>
                <th scope="col">Head Size</th>
                <th scope="col">Blood Group</th>
                <th scope="col">Genotype</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($posts as $post)
                <tr>
                
                <td>{{$post->hospital_name}}</td>
                <td>{{$post->doctor_name}}</td>
                <td>{{$post->father_name}}</td>
                <th>{{$post->mother_name}}</th>
                <td>{{$post->address}}</td>
                <td>{{$post->date_of_birth}}</td>
                <td>{{$post->time_of_birth}}</td>
                <th>{{$post->gender}}</th>
                <td>{{$post->weight}}</td>
                <td>{{$post->height}}</td>
                <td><img src="{{asset('storage/'.$post->image)}}" alt="" height="60" width="60"></td>
                <td>{{$post->head_size}}</td>
                <th scope="row">{{$post->blood_group}}</th>
                <td>{{$post->genotype}}</td>
                <td>
                <a href="{{route('posts.edit', $post->id)}}" class="btn btn-outline-info btn-sm">
                    <i class="fa fa-eye"></i>
                </a>
                <a href="{{route('posts.edit', $post->id)}}" class="btn btn-outline-info btn-sm">
                    <i class="fa fa-edit"></i>
                </a>
                <form action="{{route('posts.destroy', $post->id)}}" class="d-inline" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger btn-sm">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
                </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center text-muted"> No posts found </td>
                </tr>
                @endforelse  
            </tbody>
        </table>
        {{$posts->onEachSide(1)->links()}}           

              
        </div>

     </div>


@endsection