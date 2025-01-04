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
                  <strong class="card-title">Edit Language</strong>
                </div>
                <div class="card-body">
                  <form class="needs-validation" method="POST" action="{{route('update.lang')}}" novalidate>
                        @csrf
                        <input type="hidden" name="id" value="{{$langs->id}}">
                    <div class="form-group mb-3">
                      <label for="address-wpalaceholder">Language</label>
                      <input type="text" value="{{$langs->lang}}" name="lang" data-role="tagsinput" id="address-wpalaceholder" class="form-control"
                        placeholder="Enter your language">

                    </div>

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

