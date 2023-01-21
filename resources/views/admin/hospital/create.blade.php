@extends('layouts.admin')
@section('title', 'Hospitals')
@section('content')
<div class="col-md-6 mx-auto">
    <div class="card">
        <div class="card-body">
            <div class="py-4">
                <form action="{{route('admin.hospitals.store')}}" method="POST">
                    @csrf
                    <x-form.input label="Name" id="name" name="name" placeholder="Enter Hospital Name" />
                    <x-form.input label="Email Address" id="email" name="email" placeholder="Enter Hospital Email Address" />
                    <x-form.input label="Phone Number" id="phone" name="phone" placeholder="Enter Hospital Phone Number" />
                    <x-form.input label="Address" id="address" name="address" placeholder="Enter Hospital Address" />

                    <div class="text-end">
                        <button type="submit" class="btn btn-outline-primary">
                            Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
