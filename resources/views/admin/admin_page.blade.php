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
              <strong class="card-title">Register Admin</strong>
           
           </div>
           <div class="card-body">
                <form class="needs-validation" method="POST" action="{{route('save.admin')}}" novalidate>
                
                  <div class="form-group" >
                    @csrf
                    <label for="inputPassword" class="sr-only">Name</label>
                    <input type="text" value="{{old('name')}}" id="name" class="form-control form-control-lg" placeholder="Pname" required="">
                    @error('name')
                    <span class="fs-6 text-danger"> {{$message}}</span>
                  @enderror
                  </div>
                  <div class="form-row">
                  <div class="col-md-8 mb-3">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" value="{{old('email')}}" id="inputEmail" class="form-control form-control-lg" placeholder="Email address" required="" autofocus="">
                     @error('email')
                       <span class="fs-6 text-danger"> {{$message}}</span>
                     @enderror
                  </div>
                  <div class="col-md-8 mb-3">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="password" id="inputPassword" class="form-control form-control-lg" placeholder="Password" required="">
                    @error('password')
                    <span class="fs-6 text-danger"> {{$message}}</span>
                  @enderror
                  </div>
                  </div>
                  <div class="col-md-8 mb-3">
                    <label for="inputPassword" class="sr-only">Confirm Password</label>
                    <input type="password" name="confirm" id="inputPassword" class="form-control form-control-lg" placeholder="Password" required="">
                  </div>
                 
                  <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
                  <p class="mt-5 mb-3 text-muted">© 2020</p>
                </form>
              </div>
            </div>
          </div> <!-- end section -->
        </div> <!-- /.col-12 col-lg-10 col-xl-10 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->
  </div>
  </main>
@endsection

