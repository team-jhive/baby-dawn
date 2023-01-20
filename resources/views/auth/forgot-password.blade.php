@extends('layouts.app')

@section('content') 

<div class="p-3 mt-5 text-center bg-white shadow container-fluid">
      
        <div class="p-5 m-auto shadow border rounded col-6" style="width: fit-content;">
            <div class="mt-5 justify-content-start">

            @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
                <h1 class="fs-3 text-center">Forgot Password?</h1>
                
                <p class="mt-4 text-start">Don't worry! it occurs. Please enter the email <br> address linked with your account.</p>
                
            </div>

            <div class="mt-5">
                <form action="{{route('password.request')}}" method="POST">
                    @csrf
                    <x-errors />

                  <div class="mb-4">
                      <input style="background-color: #EBEBEB;" type="email" class="p-3 mb-3 border border-info form-control" id="email" name="email" placeholder="Enter Email">
                    </div>
                   
                  
                  <button type="submit" style="background-color: #0E877B;" class="p-3 mb-3 text-white border border-success shadow btn form-control">SEND CODE</button>
                </form>
              </div>

              <div class="mb-5 space"></div>

              <div class="mt-5" style="padding-top: 5em;">
                <p>Remember Password?<span><a href="http://"> Sign in</a></span></p>
              </div>

        </div>

     </div>

      @endsection