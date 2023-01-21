@extends('layouts.admin')
@section('title', 'Hospitals')
@section('content')
<div class="col-md-10 mx-auto">
    <div class="card">
        <div class="card-body">
            <div class="text-end mb-3">
                <a href="{{route('admin.hospitals.create')}}" class="btn btn-outline-primary">
                    <i class="mdi mdi-plus-circle"></i>
                    Hospital
                </a>
            </div>
            <div class="table-response">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($hospitals as $hospital)
                                <tr>
                                    <td>{{$hospital->name}}</td>
                                    <td>{{$hospital->phone}}</td>
                                    <td>{{$hospital->email}}</td>
                                    <td>{{$hospital->address}}</td>
                                    <td>
                                        <a href="{{route('admin.hospitals.edit', $hospital->id)}}" class="btn btn-outline-primary btn-sm">
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
