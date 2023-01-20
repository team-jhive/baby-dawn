@extends('layouts.app')

@section('content')

      <!-- Main Content -->
      <div class=" baby-form p-3 mt-4 text-center bg-white rounded shadow justify-content-between">
        <div class="row">

                <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                  <div class="image-wrap">
                      <label for="profile"><img class="profile" src="assets/image10.jpg" alt="Profile Picture"></label>
                      <input type="file" name="image" id="profile">
                      <p class="mt-3 fs-6">Insert baby's picture</p>
                  </div>
                  
                  

                  <div class="mt-5">
                
                  <div class="mb-2">
                      <input style="background-color: #EBEBEB;" name="name" value="{{old('name')}}" type="text" class="mb-3 p-2 border border-success form-control" id="name" placeholder="Hospital Name:">
                      @error('title') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-2">
                      <input style="background-color: #EBEBEB;" name="doctor_name" value="{{old('doctor_name')}}" type="text" class="mb-3 p-2 border border-success form-control" id="doctor" placeholder="Doctor’s Name:">
                    </div>
                    <div class="mb-2">
                      <input style="background-color: #EBEBEB;" name="father_name" value="{{old('father_name')}}" type="text" class="mb-3 p-2 border border-success form-control" id="fatherName" placeholder="Father’s Name:">
                    </div>
                    <div class="mb-2">
                      <input style="background-color: #EBEBEB;" name="mother_name" value="{{old('mother_name')}}" type="text" class="mb-3 p-2 border border-success form-control" id="motherName" placeholder="Mother’s Name:">
                    </div>
                    <div class="mb-2">
                      <input style="background-color: #EBEBEB;" name="address" value="{{old('address')}}" type="text" class="mb-3 p-2 border border-success form-control" id="address" placeholder="Address:">
                    </div>
                    
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" name="date_of_birth" value="{{old('time_of_birth')}}" type="date" class="mb-3 p-2 border border-success form-control" id="date" placeholder="Date:">
                    </div>
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" name="time_of_birth" value="{{old('time_of_birth')}}" type="time" class="mb-3 p-2 border border-success form-control" id="time" placeholder="Time:">
                    </div>
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" name="gender" value="{{old('gender')}}" type="text" class="mb-3 p-2 border border-success form-control" id="gender" placeholder="Gender:">
                    </div>
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" name="weight" value="{{old('weight')}}" type="text" class="mb-3 p-2 border border-success form-control" id="weight" placeholder="Weight:">
                    </div>
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" name="height" value="{{old('height')}}" type="text" class="mb-3 p-2 border border-success form-control" id="height" placeholder="Height:">
                    </div>
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" name="head_size" value="{{old('head_size')}}" type="text" class="mb-3 p-2 shadow form-control" id="headSize" placeholder="Head Size:">
                    </div>
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" name="blood_group" value="{{old('blood_group')}}" type="text" class="mb-3 p-2 shadow form-control" id="bloodGroup" placeholder="Blood Group:">
                    </div>
                    <div class="mb-5">
                        <input style="background-color: #EBEBEB;" name="genotype" value="{{old('genotype')}}" type="text" class="mb-3 p-2 shadow form-control" id="gynotype" placeholder="Genotype: ">
                    </div>
                    <div class="button-wrap mt-2">
                        <button type="submit" style="background-color: #0E877B;" class="mb-3   mx-5 shadow btn form-control text-light button">SAVE</button>
                        <a type="submit" style="background-color: #0E877B" class="mb-3  mx-5 shadow btn form-control text-light button">VIEW RECORD</a>
                    </div>
                  
                 
                  
                </form>
              </div>
            </div>
          <!-- <div class="shadow col-xl-6 col-lg-6 col-md-5 col-sm-12" style="height: 470px !important;">
       
        </div> -->

      </div>

    
@endsection
