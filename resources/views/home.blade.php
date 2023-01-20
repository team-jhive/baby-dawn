@extends('layouts.app')

@section('content')

<!-- Main Content -->
<div class="p-3 mt-5 text-center bg-white shadow container-fluid">
        <div class="container p-5 shadow" style="height: 600px; background-image: url(assets/images/image6.jpg); background-size: cover; width: auto;">
            <div class="" style="margin-top: 20em;">
                
                <a href="/posts" style="background-color: #0E877B; width: 300px;  font-size: 12px;" class="mb-3 text-white rounded shadow btn form-control box-link">VIEW RECORDS</a>
              
            </div>

            <div class="mt-3">
                
                <a href="{{route('posts.create')}}" style="background-color: #0E877B; width: 300px;  font-size: 12px;" class="mb-3 text-white rounded shadow btn form-control box-link">NEW BORN RECORD ENTRY</a>
              
            </div>
            

              
        </div>

     </div>

     @endsection