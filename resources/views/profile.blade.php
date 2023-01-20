@extends('layouts.app')

@section('content')

      <!-- Main Content -->
      <div class=" baby-form p-3 mt-4  bg-white rounded shadow ">
        <div class="row">
            <div class="profile-wrap">
                <!-- <img class="mx-2 profile-picture" src="assets/images/image11.jpg" alt="Profile Picture" width="150" height="150"> -->
                <h3 class="align-text-center mt-5 mx-2">Delta State Hospital, Asaba {{ Auth::user()->hospital_name }}</h3>
            </div>
            <div class="mt-3">
                <form>
                  <div class="mb-2 text-end">
                    <a href="#" class="text-end edit">Edit</a>
                  </div>
                 
                  
                  <div class="mb-2">
                      <input style="background-color: #EBEBEB;" type="text" class="mb-3 p-3 shadow form-control" id="name" placeholder="Hospital Name: ">
                    </div>
                    <div class="mb-2">
                      <input style="background-color: #EBEBEB;" type="text" class="mb-3 p-3 shadow form-control" id="doctor" placeholder="Doctor’s Name: Dr. Jeremiah Uche">
                    </div>
                    <div class="mb-2">
                      <input style="background-color: #EBEBEB;" type="text" class="mb-3 p-3 shadow form-control" id="fatherName" placeholder="Father’s Name: Mr. Patrick Dennis">
                    </div>
                    <div class="mb-2">
                      <input style="background-color: #EBEBEB;" type="text" class="mb-3 p-3 shadow form-control" id="motherName" placeholder="Mother’s Name: Mrs. Patrick Cynthia">
                    </div>
                  
                  
                 
                  
                </form>
              </div>
            </div>
          <!-- <div class="shadow col-xl-6 col-lg-6 col-md-5 col-sm-12" style="height: 470px !important;">
       
        </div> -->

      </div>

    

@endsection