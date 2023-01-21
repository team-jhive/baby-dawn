@extends('layouts.admin')
@section('title', 'Create Doctor')
@section('content')
<div class="col-md-5 mx-auto">
    <div class="card">
        <div class="card-body">
            <div class="py-4">
                <form action="{{route('admin.doctors.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <x-form.input label="Name" id="name" name="name" placeholder="Enter Hospital Name" />
                    <x-form.input label="Email Address" id="email" name="email" placeholder="Enter Hospital Email Address" />
                    <x-form.input label="Phone Number" id="phone" name="phone" placeholder="Enter Hospital Phone Number" />
                    <x-form.input label="Address" id="address" name="address" placeholder="Enter Hospital Address" />

                    <div class="form-group">
                        <label for="hospital">Hospital</label>
                        <select name="hospital" id="hospital" class="form-select @error('hospital') is-invalid @enderror" style="font-size: 14px">
                            <option value="">Select Hospital</option>
                            @foreach ($hospitals as $hospital)
                                <option value="{{$hospital->id}}" @selected(old('hospital') == $hospital->id)>{{$hospital->name}}</option>
                            @endforeach
                        </select>
                        <x-form.error key="hospital" />
                    </div>

                    <div class="form-group">
                        <label for="profile_picture" class="d-block">Profile Picture</label>
                        <input type="file" name="profile_picture" id="profile_picture" class="@error('profile_picture') is-invalid @enderror">
                        <x-form.error key="profile_picture" />
                    </div>


                    <div class="text-end mt-3">
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
