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
                  <strong class="card-title">Image</strong>
                </div>
                <div class="card-body">
                  <form class="needs-validation" enctype="multipart/form-data"  method="POST" action="{{route('save.image')}}" novalidate>
                        @csrf
                    <div class="form-group mb-3">
                        <label for="example-fileinput">Cv Images</label>
                        <input type="file" name="img" id="example-fileinput" class="form-control-file">
                    </div>

                          <br/>
                    <button class="btn btn-primary" type="submit">Save</button>
                    <div class="d-flex justify-content-end">
                      <a class="btn btn-danger" href="{{route('cv')}}">next</a>
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

