@extends('layouts.app')

@section('content')
 
      <!-- Main Content -->
      <div class=" baby-form p-3 mt-4 text-center bg-white rounded shadow justify-content-between">
        <div class="row">

                <form action="{{route('posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                  <div class="image-wrap">
                      <label for="profile"><img class="profile" src="{{asset('storage/'.$post->image)}}" alt="Profile Picture"></label>
                      <input type="file" name="image" id="profile">
                      <p> @error('image') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror </p>
                      <p class="mt-3 fs-6">Update baby's picture</p>
                  </div>
                  
                  

                  <div class="mt-5">
                
                  <div class="mb-2">
                      <input style="background-color: #EBEBEB;" name="hospital_name" type="text" class="mb-3 p-2 border border-success form-control" id="name" placeholder="Hospital Name:" value="{{$post->hospital_name}}">
                      @error('hospital_name') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-2">
                      <input style="background-color: #EBEBEB;" name="doctor_name" type="text" class="mb-3 p-2 border border-success form-control" id="doctor" placeholder="Doctor’s Name:" value="{{$post->doctor_name}}">
                      @error('doctor_name') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-2">
                      <input style="background-color: #EBEBEB;" name="father_name" type="text" class="mb-3 p-2 border border-success form-control" id="fatherName" placeholder="Father’s Name:" value="{{$post->father_name}}">
                      @error('father_name') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-2">
                      <input style="background-color: #EBEBEB;" name="mother_name" type="text" class="mb-3 p-2 border border-success form-control" id="motherName" placeholder="Mother’s Name:" value="{{$post->mother_name}}">
                      @error('mother_name') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-2">
                      <input style="background-color: #EBEBEB;" name="address" type="text" class="mb-3 p-2 border border-success form-control" id="address" placeholder="Address:" value="{{$post->address}}">
                      @error('address') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror
                    </div>
                    
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" name="date_of_birth" type="date" class="mb-3 p-2 border border-success form-control" id="date" placeholder="Date:" value="{{$post->date_of_birth}}">
                        @error('date_of_birth') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" name="time_of_birth" type="time" class="mb-3 p-2 border border-success form-control" id="time" placeholder="Time:" value="{{$post->time_of_birth}}">
                        @error('time_of_birth') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" name="gender" class="mb-3 p-2 border border-success form-control" id="gender" placeholder="Gender:" value="{{$post->gender}}">
                        @error('gender') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" name="weight" class="mb-3 p-2 border border-success form-control" id="weight" placeholder="Weight:" value="{{$post->weight}}">
                        @error('weight') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" name="height" type="text" class="mb-3 p-2 border border-success form-control" id="height" placeholder="Height:" value="{{$post->height}}">
                        @error('height') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" name="head_size" type="text" class="mb-3 p-2 shadow border border-success form-control" id="headSize" placeholder="Head Size:" value="{{$post->head_size}}">
                        @error('head_size') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" name="blood_group" type="text" class="mb-3 p-2 shadow border border-success form-control" id="bloodGroup" placeholder="Blood Group:" value="{{$post->blood_group}}">
                        @error('blood_group') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-5">
                        <input style="background-color: #EBEBEB;" name="genotype" type="text" class="mb-3 p-2 shadow border border-success form-control" id="gynotype" placeholder="Genotype: " value="{{$post->genotype}}">
                        @error('genotype') <span style="font-size: 14px;" class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="button-wrap mt-2">
                        <button type="submit" style="background-color: #0E877B;" class="mb-3   mx-5 shadow btn form-control text-light button">UPDATE</button>
                    </div>
                  
                 
                  
                </form>
              </div>
            </div>
          <!-- <div class="shadow col-xl-6 col-lg-6 col-md-5 col-sm-12" style="height: 470px !important;">
       
        </div> -->

      </div>

    
@endsection
