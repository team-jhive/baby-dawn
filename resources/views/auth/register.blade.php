@extends('layouts.app')

@section('content')

<!-- Main Content -->
      <div class="container p-3 mt-4 text-center bg-white rounded shadow justify-content-between" style=" padding-bottom: 40px; height: auto; width: fit-content;">
        <div class="row">
          <div class=" col-xl-6 col-lg-6 col-md-5 col-sm-12 mx-2" style="background: url(assets/images/image7.jpg); background-size: cover; background-repeat: no-repeat; height: 811px; width: 543px;">
            <img src="assets/images/logo.png" alt="background image" width="100" height="100" class=" mb-3" style="margin-top: 15em;"/>
            <h1 class="text-light">BABY DAWN</h1>
          </div>
          
          <div class=" col-xl-6 col-lg-6 col-md-5 col-sm-12 mx-2" style="height: 811px; width: 543px;">
            <div class="">
              <h3 class="text-start mb-4">Sign up</h3>

              <form action="{{route('register')}}" method="post">

              @csrf
                <x-errors />

                <div class="mb-2">
                  <input style="background-color: #EBEBEB;" type="text" value="{{old('name')}}" name="name" class="mb-3 p-3 border border-success form-control" id="name" aria-describedby="emailHelp" placeholder="Hospital Name">
                </div>
                
                <div class="mb-2">
                    <input style="background-color: #EBEBEB;" name="email" value="{{old('email')}}" type="email" class="mb-3 p-3 border border-success form-control" id="email" placeholder="Hospital Email">
                  </div>
                  <div class="mb-2">
                    <input style="background-color: #EBEBEB;" name="phone" value="{{old('phone')}}" type="text" class="mb-3 p-3 border border-success form-control" id="contact" placeholder="Contact">
                  </div>
                  <div class="mb-2">
                    <input style="background-color: #EBEBEB;" type="text" name="admin_name" value="{{old('admin_name')}}" class="mb-3 p-3 border border-success form-control" id="officer" placeholder="Admin Officer Name">
                  </div>
                  <div class="mb-2">
                    <input style="background-color: #EBEBEB;" type="password" class="mb-3 p-3 border border-success form-control" id="password" name="password" placeholder="Password">
                  </div>
                  <div class="mb-4">
                    <input style="background-color: #EBEBEB;" type="password" class="mb-3 p-3 border border-success form-control" id="cpassword" name="password_confirmation" placeholder="Confirm Password">
                  </div>
                
                <button type="submit" style="background-color: #0E877B;" class="mb-3 p-3 border border-success btn form-control text-white">SIGN UP</button>
                <p>If you're already registered, <span><a href="signin.html">Sign in</a></span></p>
              </form>
            </div>
          </div>
        </div>

      </div>


<!-- Main Content
<div class="container p-3 mt-4 text-center bg-white rounded shadow justify-content-between" style=" padding-bottom: 40px; height: auto; width: auto;">
        <div class="row ">
          <div class="shadow col-xl-6 col-lg-6 col-md-5 col-sm-12" style="background: url(/assets/images/image7.jpg); background-size: cover; background-repeat: no-repeat;">
            <img src="assets/images/logo.png" alt="background image" width="100" height="100" class="mt-5 mb-3"/>
            <h1 class="text-light">BABY DAWN</h1>
          </div>
          
          <div class="shadow col-xl-6 col-lg-6 col-md-5 col-sm-12" style="height: 470px !important;">
            <div class="mt-5">
              <form action="{{route('register')}}" method="post">
                @csrf
                <x-errors />
                <div class="mb-2">
                  <input value="{{old('name')}}" name="name" style="background-color: #EBEBEB;" type="text" class="mb-3 shadow form-control" id="name" aria-describedby="emailHelp" placeholder="Hospital Name">
                </div>
                
                <div class="mb-2">
                    <input style="background-color: #EBEBEB;" name="email" value="{{old('email')}}" type="email" class="mb-3 shadow form-control" id="email" placeholder="Hospital Email">
                  </div>
                  <div class="mb-2">
                    <input style="background-color: #EBEBEB;" name="phone" value="{{old('phone')}}" type="text" class="mb-3 shadow form-control" id="contact" placeholder="Contact">
                  </div>
                  <div class="mb-2">
                    <input style="background-color: #EBEBEB;" type="text" name="admin_name" value="{{old('admin_name')}}" class="mb-3 shadow form-control" id="officer" placeholder="Admin Officer Name">
                  </div>
                  <div class="mb-2">
                    <input style="background-color: #EBEBEB;" name="password" type="password" class="mb-3 shadow form-control" id="password" placeholder="Password">
                  </div>
                  <div class="mb-4">
                    <input style="background-color: #EBEBEB;" name="password_confirmation" type="password" class="mb-3 shadow form-control" id="cpassword" placeholder="Confirm Password">
                  </div>
                
                <button type="submit" style="background-color: #0E877B;" class="mb-3 shadow btn form-control">Sign up</button>
                <p>If you're already registered <span><a href="login">Login</a></span></p>
              </form>
            </div>
          </div>
        </div>

      </div> -->

      @endsection