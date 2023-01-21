@extends('layouts.admin')
@section('content')
<div class="col-md-5 mx-auto">
    <div class="card">
        <div class="card-body">
            <div class="py-4">
                <form action="" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Name of Child</label>
                        <input type="text" class="form-control border border-success" id="formGroupExampleInput" placeholder="Name of child">
                      </div>

                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Parent's Name</label>
                        <input type="text" class="form-control border border-success" id="formGroupExampleInput2" placeholder="Parent's Name">
                      </div>

                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Hospital Name</label>
                        <input type="text" class="form-control border border-success" id="formGroupExampleInput2" placeholder="Hospital Name">
                      </div>

                      <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Doctor</label>
                        <input type="text" class="form-control border border-success" id="formGroupExampleInput" placeholder="Doctor's Name">
                      </div>

                      <div class="mb-3">
                        <label class="visually-hidden" for="inlineFormSelectPref"></label>
                      <select class="form-select border border-success" id="inlineFormSelectPref">
                        <option selected>Gender</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>

                      </select>
                      </div>



                      <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Weight</label>
                        <input type="text" class="form-control border border-success" id="formGroupExampleInput" placeholder="Weight">
                      </div>

                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Height</label>
                        <input type="text" class="form-control border border-success" id="formGroupExampleInput2" placeholder="Height">
                      </div>



                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Date and Time of Delivery</label>
                        <input type="datetime-local" class="form-control border border-success" id="formGroupExampleInput2" placeholder="Date and Time of Delivery">
                      </div>

                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Type of Delivery</label>
                        <input type="text" class="form-control border border-success" id="formGroupExampleInput2" placeholder="Type of Delivery">
                      </div>

                      <div class="mb-3">
                        <label class="visually-hidden" for="inlineFormSelectPref"></label>
                      <select class="form-select border border-success" id="inlineFormSelectPref">
                        <option selected>Delivery Status</option>
                        <option value="1">Stillbirth</option>
                        <option value="2">Livebirth</option>

                      </select>
                      </div>

                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Condition at Birth</label>
                        <input type="datetime" class="form-control border border-success" id="formGroupExampleInput2" placeholder="Condition at birth">
                      </div>

                      <div class="text-end mt-3">
                        <button type="submit" class="btn btn-outline-primary">
                            Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
