@extends('layouts.admin')
{{-- @section('title', 'Create Doctor') --}}
@section('content')

<div class="col-md-5 mx-auto py-5 ">
    <div class="card shadow">
        <div class="card-body text-center">
            <div class="py-5 d-inline-block ">
              <a href="{{ route('admin.records.search') }}" class="btn p-4 btn-outline-primary mx-2">Search</a>
              <a href="{{ route('admin.records.create') }}" class="btn p-4 btn-outline-primary mx-2">Register</a>
            </div>
        </div>
    </div>
</div>

@endsection
