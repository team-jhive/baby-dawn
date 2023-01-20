@extends('layouts.app')

@section('content')

      <!-- Main Content -->
      <div class=" baby-form p-3 mt-4 text-center bg-white rounded shadow justify-content-between">
        <div class="row">
            <div class="image-wrap">
                <img class="profile" src="assets/image9.png" alt="Profile Picture">
            </div>
            @forelse ($posts as $post)
            <div class="mt-5">

                <form>
                  <div class="mb-2 text-end">
                    <p class="text-end edit">DSHA 0001</p>
                  </div>
                 
                  
                  <div class="mb-2">
                      <input style="background-color: #EBEBEB;" type="text" class="mb-3 p-2  form-control" id="name" placeholder="Hospital Name: Delta State Hospital, Asaba">
                    </div>
                    <div class="mb-2">
                      <input style="background-color: #EBEBEB;" type="text" class="mb-3 p-2  form-control" id="doctor" placeholder="Doctor’s Name: Dr. Jeremiah Uche">
                    </div>
                    <div class="mb-2">
                      <input style="background-color: #EBEBEB;" type="text" class="mb-3 p-2  form-control" id="fatherName" placeholder="Father’s Name: Mr. Patrick Dennis">
                    </div>
                    <div class="mb-2">
                      <input style="background-color: #EBEBEB;" type="text" class="mb-3 p-2  form-control" id="motherName" placeholder="Mother’s Name: Mrs. Patrick Cynthia">
                    </div>
                    <div class="mb-2">
                      <input style="background-color: #EBEBEB;" type="text" class="mb-3 p-2  form-control" id="address" placeholder="Address: iHUB, DBS Junction, Asaba, Delta State">
                    </div>
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" type="text" class="mb-3 p-2  form-control" id="idNumber" placeholder="ID Number: DSHA 0001">
                    </div>
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" type="text" class="mb-3 p-2  form-control" id="date" placeholder="Date: 16TH Dec. 2022">
                    </div>
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" type="text" class="mb-3 p-2  form-control" id="time" placeholder="Time: 05:30pm">
                    </div>
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" type="text" class="mb-3 p-2  form-control" id="gender" placeholder="Gender: Female">
                    </div>
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" type="text" class="mb-3 p-2  form-control" id="weight" placeholder="Weight: 35kg">
                    </div>
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" type="text" class="mb-3 p-2  form-control" id="height" placeholder="Height: 45cm">
                    </div>
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" type="text" class="mb-3 p-2  form-control" id="headSize" placeholder="Head Size: 10cm">
                    </div>
                    <div class="mb-2">
                        <input style="background-color: #EBEBEB;" type="text" class="mb-3 p-2  form-control" id="bloodGroup" placeholder="Blood Group: O+">
                    </div>
                    <div class="mb-5">
                        <input style="background-color: #EBEBEB;" type="text" class="mb-3 p-2  form-control" id="gynotype" placeholder="Genotype: AA">
                    </div>
                    <div class="button-wrap mt-2 justify-content-center">
                        
                        <button type="submit" style="background-color: #dd3849" id="print" class="mb-3 p-3 mx-3 shadow btn form-control text-light">PRINT</button>
                    </div>
                  
                 
                  
                </form>
              </div>
            </div>
            @endforelse  
          <!-- <div class="shadow col-xl-6 col-lg-6 col-md-5 col-sm-12" style="height: 470px !important;">
       
        </div> -->

      </div>

      


@endsection