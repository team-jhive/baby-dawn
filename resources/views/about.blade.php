@extends('layouts.app')

@section('content')


 <!-- Main Content -->
 <div class="container-lg bg-light mt-5">
      <div class="row g-3 p-4">
        <div class="col-xl-8">
          <h2 class="text-success">About</h2>
          <p class="text-wrap pAbout">
            Baby-Dawn is an innovative application that provides a simple solution to a commom problem. it is a platform where new born babies' details can be easily recorded, saved  and accessed as needed. it ensures the safe keep of records, saves time and help workers to be more productive.
          </p>
        </div>
        <div class="col-xl-4">
          <img src="assets/images/image6.jpg" alt="" class="image-fluid shadow" width="300" height="200">
        </div>
      </div>

      <div class="row g-3 p-4">
        <div class="col-xl-4">
          <img src="assets/images/baby2.jpg" alt="" class="image-fluid shadow" width="300" height="350">
        </div>
        <div class="col-xl-8">
          <h2 class="text-success">
            Team J-HIVE
          </h2>
          <p class="text-wrap pAbout">
            J-HIVE is a one of a kind tech agency that solves complex user problems.
            It is the <br> collaboration of brilliant developers from various tech sectors to develop
            <br>cutting-edge solutions to user challenges.
          </p>
          <ul class="list">
            <li>We use facts, not views, in our works.</li>
            <li>We establish a connection between your company's goals and the requirements of your customers.</li>
            <li>We create experiences that are user-centered, tested with actual users, and quaranteed to work.</li>
            <li>We produce websites and apps that accomplish business goals.</li>
          </ul>

        </div>
      </div>
      
    </div>


@endsection