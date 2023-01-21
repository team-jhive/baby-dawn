@extends('layouts.admin')
{{-- @section('title', 'Create Doctor') --}}
@section('content')

<div class="col-md-8 mx-auto py-5 ">
    <div class="card shadow">
        <div class="card-body text-center">
            <div class="py-5 d-inline-block ">
                <form class="row row-cols-lg-auto g-3 align-items-center">
                    <div class="col-12">
                      <label class="visually-hidden" for="inlineFormInputGroupUsername">Name</label>
                      <div class="">

                        <input type="text" class="form-control border border-success" id="inlineFormInputGroupUsername" placeholder="Username">
                      </div>
                    </div>

                    <div class="col-12">
                        <label class="visually-hidden" for="inlineFormInputGroupUsername">Date of birth</label>
                        <div class="">

                          <input type="date" class="form-control border border-success" id="inlineFormInputGroupUsername" placeholder="Username">
                        </div>
                      </div>

                    <div class="col-12">
                      <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                      <select class="form-select" id="inlineFormSelectPref">
                        <option selected>Select Hospital</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>



                    <div class="col-12">
                      <button type="submit" class="btn btn-outline-primary">Search</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>

@endsection
