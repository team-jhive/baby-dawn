@extends('layouts.admin')
@section('title', 'Baby Records')
@section('content')
<div class="col-md-5 mx-auto">
    <div class="card">
        <div class="card-body">
            <div class="py-4">
                <form action="{{route('admin.records.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Name of Child</label>
                        <input value="{{ old('name') }}" name="name" type="text" class="form-control border border-success" id="formGroupExampleInput" placeholder="Name of child">
                        <p> @error('name') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror </p>
                      </div>

                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Father"s Name</label>
                        <input value="{{ old('father_name') }}" name="father_name" type="text" class="form-control border border-success" id="formGroupExampleInput2" placeholder="Parent's Name">
                        <p> @error('father_name') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror </p>
                      </div>

                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Mother"s Name</label>
                        <input value="{{ old('mother_name') }}" name="mother_name" type="text" class="form-control border border-success" id="formGroupExampleInput2" placeholder="Parent's Name">
                      </div>

                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Hospital</label>
                        <select name="hospital_id" id="hospital_id" class="form-select">
                            <option value="">Select Hospital</option>
                            @foreach ($hospitals as $hospital)
                                <option value="{{ $hospital->id }}">{{ $hospital->name }}</option>
                            @endforeach
                        </select>
                        <p> @error('hospital_name') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror </p>
                      </div>

                      <div class="mb-3">
                        <label for="doctor_id" class="form-label">Doctor</label>
                        <select name="doctor_id" id="doctor_id" class="form-select">
                            <option value="">Select Doctor</option>
                            @foreach ($doctors as $doctor)
                                <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                            @endforeach
                        </select>
                        <p> @error('doctor_id') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror </p>
                      </div>


                      <div class="mb-3">
                        <label class="visually-hidden" for="inlineFormSelectPref"></label>
                      <select value="{{ old('gender') }}" name="gender" class="form-select border border-success" id="inlineFormSelectPref">
                        <option selected>Gender</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>

                      </select>
                      <p> @error('gender') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror </p>
                      </div>

                      <div class="col-12 mb-3">
                        <label for="inputAddress2" class="form-label">Address </label>
                        <input value="{{ old('address') }}" name="address" type="text" class="form-control border border-success" id="inputAddress2" placeholder="Apartment, studio, or floor">
                        <p> @error('address') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror </p>
                      </div>



                      <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Weight</label>
                        <input value="{{ old('weight') }}" name="weight" type="text" class="form-control border border-success" id="formGroupExampleInput" placeholder="Weight">
                        <p> @error('weight') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror </p>
                      </div>

                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Height</label>
                        <input value="{{ old('height') }}" name="height" type="text" class="form-control border border-success" id="formGroupExampleInput2" placeholder="Height">
                        <p> @error('height') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror </p>
                      </div>

                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Date</label>
                        <input value="{{ old('date_of_birth') }}" name="date_of_birth" type="date" class="form-control border border-success" id="formGroupExampleInput2" placeholder="Date and Time of Delivery">
                        <p> @error('date_of_birth') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror </p>
                      </div>

                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label"> Time of Delivery</label>
                        <input value="{{ old('time_of_delivery') }}" name="time_of_delivery" type="time" class="form-control border border-success" id="formGroupExampleInput2" placeholder="Date and Time of Delivery">
                        <p> @error('time_of_delivery') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror </p>
                      </div>

                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Type of Delivery</label>
                        <input value="{{ old('type_of_delivery') }}" name="type_of_delivery" type="text" class="form-control border border-success" id="formGroupExampleInput2" placeholder="Type of Delivery">
                        <p> @error('time_of_delivery') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror </p>
                      </div>

                      <div class="mb-3">
                        <label class="visually-hidden" for="inlineFormSelectPref"></label>
                      <select value="{{ old('is_alive') }}" name="is_alive" class="form-select border border-success" id="inlineFormSelectPref">
                        <option selected>Delivery Status</option>
                        <option value="1">Stillbirth</option>
                        <option value="2">Livebirth</option>

                      </select>
                      <p> @error('is_alive') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror </p>
                      </div>

                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Condition at Birth</label>
                        <input value="{{ old('condition') }}" name="condition" type="datetime" class="form-control border border-success" id="formGroupExampleInput2" placeholder="Condition at birth">
                        <p> @error('condition') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror </p>
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
