@extends('layouts.app')

@section('content')
 
      <!-- Main Content -->
      <div class=" baby-form p-3 mt-4 text-center bg-white rounded shadow justify-content-between">
        <div class="row">

                <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="image-wrap">
                      <label for="profile"><img class="profile" src="../assets/image10.jpg" alt="Profile Picture"></label>
                      <input type="file" name="image" id="profile">
                      <p> @error('image') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror </p>
                      <p class="mt-3 fs-6">Insert baby's picture</p>
                  </div>
                  
                  

                  <div class="mt-5">
                
                  <div class="mb-2">
                      <input style="background-color: #EBEBEB;" name="hospital_name" value="{{old('name')}}" type="text" class="mb-3 p-2 border border-success form-control" id="name" placeholder="Hospital Name:">
                      @error('hospital_name') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-2">
                      <input style="background-color: #EBEBEB;" name="doctor_name" value="{{old('doctor_name')}}" type="text" class="mb-3 p-2 border border-success form-control" id="doctor" placeholder="Doctor’s Name:">
                      @error('doctor_name') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-2">
                      <input style="background-color: #EBEBEB;" name="father_name" value="{{old('father_name')}}" type="text" class="mb-3 p-2 border border-success form-control" id="fatherName" placeholder="Father’s Name:">
                      @error('father_name') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-2">
                      <input style="background-color: #EBEBEB;" name="mother_name" value="{{old('mother_name')}}" type="text" class="mb-3 p-2 border border-success form-control" id="motherName" placeholder="Mother’s Name:">
                      @error('mother_name') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-2">
                      <input style="background-color: #EBEBEB;" name="address" value="{{old('address')}}" type="text" class="mb-3 p-2 border border-success form-control" id="address" placeholder="Address:">
                      @error('address') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror
                    </div>
                    
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" name="date_of_birth" value="{{old('time_of_birth')}}" type="date" class="mb-3 p-2 border border-success form-control" id="date" placeholder="Date:">
                        @error('date_of_birth') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" name="time_of_birth" value="{{old('time_of_birth')}}" type="time" class="mb-3 p-2 border border-success form-control" id="time" placeholder="Time:">
                        @error('time_of_birth') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" name="gender" value="{{old('gender')}}" type="text" class="mb-3 p-2 border border-success form-control" id="gender" placeholder="Gender:">
                        @error('gender') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" name="weight" value="{{old('weight')}}" type="text" class="mb-3 p-2 border border-success form-control" id="weight" placeholder="Weight:">
                        @error('weight') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" name="height" value="{{old('height')}}" type="text" class="mb-3 p-2 border border-success form-control" id="height" placeholder="Height:">
                        @error('height') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" name="head_size" value="{{old('head_size')}}" type="text" class="mb-3 p-2 shadow border border-success form-control" id="headSize" placeholder="Head Size:">
                        @error('head_size') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" name="blood_group" value="{{old('blood_group')}}" type="text" class="mb-3 p-2 shadow border border-success form-control" id="bloodGroup" placeholder="Blood Group:">
                        @error('blood_group') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-5">
                        <input style="background-color: #EBEBEB;" name="genotype" value="{{old('genotype')}}" type="text" class="mb-3 p-2 shadow border border-success form-control" id="gynotype" placeholder="Genotype: ">
                        @error('genotype') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="button-wrap mt-2">
                        <button type="submit" style="background-color: #0E877B;" class="mb-3   mx-5 shadow btn form-control text-light button">SAVE</button>
                        <a type="submit" href="/posts" style="background-color: #0E877B" class="mb-3  mx-5 shadow btn form-control text-light button">VIEW RECORD</a>
                    </div>
                  
                 
                  
                </form>
              </div>
            </div>
          <!-- <div class="shadow col-xl-6 col-lg-6 col-md-5 col-sm-12" style="height: 470px !important;">
       
        </div> -->

      </div>

    
@endsection
