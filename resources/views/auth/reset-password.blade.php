@extends('layouts.app')

@section('content') 

<div class="p-3 mt-5 text-center bg-white shadow container-fluid">
      
        <div class="p-5 m-auto shadow border rounded col-6" style="width: fit-content;">
            <div class="mt-5 justify-content-start">

           
                <h1 class="fs-3 text-center">Reset Password</h1>
                
                <p class="mt-4 text-start">Enter your new password here.</p>
                
            </div>

            <div class="mt-5">
                <form action="{{route('password.update')}}" method="POST">
                    @csrf
                    <x-errors />

                    <input type="hidden" name="token" value="{{ $request->route('token') }}" >

                  <div class="mb-4">
                      <input style="background-color: #EBEBEB;" type="email" class="p-3 mb-3 border border-info form-control" id="email" name="email" value="{{ $request->email}}" readonly>
                    </div>

                    <div class="mb-2">
                    <input style="background-color: #EBEBEB;" type="password" class="mb-3 p-3 border border-success form-control" id="password" name="password" placeholder="Password">
                  </div>

                  <div class="mb-4">
                    <input style="background-color: #EBEBEB;" type="password" class="mb-3 p-3 border border-success form-control" id="cpassword" name="password_confirmation" placeholder="Confirm Password">
                  </div>
                   
                  
                  <button type="submit" style="background-color: #0E877B;" name="reset" class="p-3 mb-3 text-white border border-success shadow btn form-control">Update</button>
                </form>
              </div>

              <div class="mb-5 space"></div>

              <div class="mt-5" style="padding-top: 5em;">
                <p>Remember Password?<span><a href="http://"> Sign in</a></span></p>
              </div>

        </div>

     </div>

      @endsection