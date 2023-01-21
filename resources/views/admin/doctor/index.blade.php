@extends('layouts.admin')
@section('title', 'Doctors')
@section('content')
<div class="col-md-10 mx-auto">
    <div class="card">
        <div class="card-body">
            <div class="text-end mb-3">
                <a href="{{route('admin.doctors.create')}}" class="btn btn-outline-primary">
                    <i class="mdi mdi-plus-circle"></i>
                    Doctor
                </a>
            </div>
            <div class="table-response">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($doctors as $doctor)
                                <tr>
                                    <td><img src='{{asset("storage/profile_pictures/$doctor->image")}}' alt=""></td>
                                    <td>{{$doctor->name}}</td>
                                    <td>{{$doctor->email}}</td>
                                    <td>{{$doctor->phone}}</td>
                                    <td>{{$doctor->address}}</td>
                                    <td>
                                        <a href="{{route('admin.doctors.edit', $doctor->id)}}" class="btn btn-outline-primary btn-sm">
                                            <i class="mdi mdi-lead-pencil"></i>
                                        </a>
                                        <a href="" class="btn btn-outline-danger btn-sm">
                                            <i class="mdi mdi-trash-can"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                            <tr>
                                <td colspan="6">
                                    <div class="text-center text-muted my-5">
                                        No hospitals found
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection
