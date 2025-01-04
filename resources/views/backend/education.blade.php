@extends('backend.dashboard')
@section('main')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">

          <div class="row">

            <div class="col-md-8">
              <div class="card shadow mb-4">
                <div class="card-header">
                  <strong class="card-title">Education Details</strong>
                </div>
                <div class="card-body">
                  <form class="needs-validation" method="POST" action="{{route('save.edu')}}" novalidate>
                        @csrf
                    <div class="form-group mb-3">
                      <label for="address-wpalaceholder">University/School/Institute</label>
                      <input type="text" name="edu_name" id="address-wpalaceholder" class="form-control"
                        placeholder="Enter ..">

                    </div>
                    <div class="form-group mb-3">
                        <label for="address-wpalaceholder">Field/Position</label>
                        <input type="text" name="field" id="address-wpalaceholder" class="form-control"
                          placeholder="Enter ..">
  
                      </div> 
                      

                    <div class="form-row">
                        <div class="col-md-8 mb-3">
                          <label for="exampleInputEmail2">Start Date</label>
                          <input type="text" name="start_date" class="form-control drgpicker" id="date-input1" value="04/24/2020" aria-describedby="button-addon2">
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="custom-phone">End Date</label>
                          <input type="text" name="end_date" class="form-control drgpicker" id="date-input1" value="04/24/2020" aria-describedby="button-addon2">
                        </div>
                      </div>
                     
                    <div class="form-group mb-3">
                        <label for="address-wpalaceholder">Select Kind Of Education</label>
                          <select class="form-control" name="edu_type" id="example-select">
                              @foreach ($levels as $level)
                              <option value="{{$level->id}}">{{$level->level_name}}</option>  
                              @endforeach
                            </select>
                      </div>
                      <div class="form-group mb-3">
                        <label for="example-textarea">Description</label>
                        <textarea  name = "desc" class="form-control" id="example-textarea" rows="4"></textarea>
                    </div>
 <!-- /.form-row -->
                 
                          <br/>
                    <button class="btn btn-primary" type="submit">Save</button>

                    <div class="d-flex justify-content-end">
              <a class="btn btn-danger" href="{{route('user.languge')}}">next</a>
                    </div>
                  </form>
                </div> <!-- /.card-body -->
              </div> <!-- /.card -->
            </div> <!-- /.col -->
          </div> <!-- end section -->
        </div> <!-- /.col-12 col-lg-10 col-xl-10 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->

  </main>
@endsection

