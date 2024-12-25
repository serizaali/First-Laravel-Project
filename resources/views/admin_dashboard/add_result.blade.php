@extends('app_layout.app')

@section('content')

              <div class="mb-3 card">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="pb-0 text-center card-title fs-4">Add Student Result</h5>
                  </div>

                  <form action="add_result" method="post" class="row g-3 needs-validation" novalidate>
                    @csrf

                    <div class="col-12">
                      <label for="rollno" class="form-label">Enter Student Roll Number:</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="rollno" class="form-control" >
                        <div class="invalid-feedback">Please Enter Student Roll No.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="cnic" class="form-label">Enter CNIC Number:</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="cnic" class="form-control" >
                        <div class="invalid-feedback">Please Enter CNIC No.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="name" class="form-label">Enter Student Name:</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="name" class="form-control" >
                        <div class="invalid-feedback">Please Enter Student Name</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="obmarks" class="form-label">Enter Obtained Marks:</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="obmarks" class="form-control" id="number">
                        <div class="invalid-feedback">Please Enter Student Obtained Marks</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="tmarks" class="form-label">Enter Total Marks:</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="tmarks" class="form-control" id="number">
                        <div class="invalid-feedback">Please Enter Total Marks.</div>
                      </div>
                    </div>


                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Add Result</button>
                    </div>
                  </form>

                </div>
              </div>

  @endsection
