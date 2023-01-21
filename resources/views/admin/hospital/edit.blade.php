@extends('layouts.admin')
@section('title', 'Hospitals')
@section('content')
<div class="col-md-6 mx-auto">
    <div class="card">
        <div class="card-body">
            <div class="py-4 p-3">
                <form action="{{route('admin.hospitals.update', $hospital->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <x-form.input label="Name" id="name" name="name" placeholder="Enter Hospital Name" :value="$hospital->name" />
                    <x-form.input label="Email Address" id="email" name="email" placeholder="Enter Hospital Email Address" :value="$hospital->email" />
                    <x-form.input label="Phone Number" id="phone" name="phone" placeholder="Enter Hospital Phone Number" :value="$hospital->phone" />
                    <x-form.input label="Address" id="address" name="address" placeholder="Enter Hospital Address" :value="$hospital->address" />

                    <div class="text-end">
                        <button type="submit" class="btn btn-outline-primary">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
