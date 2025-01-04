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
                  <form class="needs-validation" method="POST" action="{{route('update.edu')}}" novalidate>
                        @csrf
                        <input type="hidden" name="id" value="{{$edus->id}}">
                    <div class="form-group mb-3">
                      <label for="address-wpalaceholder">University/School/Institute</label>
                      <input type="text" value="{{$edus->edu_name}}" name="edu_name" id="address-wpalaceholder" class="form-control"
                        placeholder="Enter ..">

                    </div>
                    <div class="form-group mb-3">
                        <label for="address-wpalaceholder">Field/Position</label>
                        <input type="text" value="{{$edus->field}}" name="field" id="address-wpalaceholder" class="form-control"
                          placeholder="Enter ..">
  
                      </div> 
                      

                    <div class="form-row">
                        <div class="col-md-8 mb-3">
                          <label for="exampleInputEmail2">Start Date</label>
                          <input type="text" value="{{$edus->startdate}}" name="start_date" class="form-control drgpicker" id="date-input1" value="04/24/2020" aria-describedby="button-addon2">
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="custom-phone">End Date</label>
                          <input type="text" value="{{$edus->enddate}}" name="end_date" class="form-control drgpicker" id="date-input1" value="04/24/2020" aria-describedby="button-addon2">
                        </div>
                      </div>
                     
                    <div class="form-group mb-3">
                        <label for="address-wpalaceholder">Select Kind Of Education</label>
                          <select class="form-control" name="edu_type" id="example-select">
                            @foreach ($levels as $level )
                              <option value="{{$level->id}}" {{ $level->id == $edus->level_id ? 'selected' : ' '}}>{{$level->level_name}}</option>  
                              @endforeach
                            </select>
                      </div>
                      <div class="form-group mb-3">
                        <label for="example-textarea">Description</label>
                        <textarea  name = "desc" class="form-control" id="example-textarea" rows="4">{{$edus->desc}}</textarea>
                    </div>
 <!-- /.form-row -->
                 
                          <br/>
                    <button class="btn btn-primary" type="submit">Save</button>
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

