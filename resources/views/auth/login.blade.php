@extends('layouts.app')

@section('content') 

<!-- Main Content -->
<div class="container p-3 mt-4  text-center bg-white rounded shadow" style=" padding-bottom: 40px; height: auto; width: auto; ">
        <div class="row p-3 justify-content-center">
          <div class=" col-xl-6 col-lg-6 col-md-5 col-sm-12 " style="background: url(assets/images/image7.jpg); background-size: cover; background-repeat: no-repeat;">
            <img src="assets/images/logo.png" alt="background image" height="100" width="100"  class="mt-5 mb-3 image-fluid"/>
            <h1 class="text-light">BABY DAWN</h1>
          </div>
          
          <div class=" col-xl-6 col-lg-6 col-md-5 col-sm-12 mt-" style="height: 470px !important;">
            <div class="mt-5">
              <form action="{{route('login')}}" method="POST">
                @csrf
                <x-errors />
                
                <div class="mb-2">
                    <input style="background-color: #EBEBEB;" type="email" name="email" class="mb-3 p-3 form-control border border-success" id="email" placeholder="Email">
                  </div>
                  
                  <div class="mb-5">
                    <input style="background-color: #EBEBEB;" type="password" name="password" class="mb-3 p-3  form-control border border-success" id="password" placeholder="Password">
                  </div>
                
                <button type="submit" style="background-color: #0E877B;" class="mb-3 shadow p-3 btn form-control border border-success text-light">SIGN IN</button>
                <p>Don't have an account?<span class="mx-2"><a href="register">Register now</a></span></p>
                <center><a href="forgot-password">Forgot Password?</a></center>
              </form>
            </div>
          </div>
        </div>

      </div>

      @endsection