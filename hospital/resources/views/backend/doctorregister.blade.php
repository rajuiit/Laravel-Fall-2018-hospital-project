@extends('backend.deshboard')

@section('title')
	Doctor Register
@endsection

@section('content-heading')
	Doctor Register
@endsection

@section('maincontent')

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h2 class="card-title text-left mb-3">Register</h2>
              <h3>{{ Session::get('massage') }}</h3>
              {!! Form::open(['url'=>'/backend/doctorregister','method'=>'post']) !!}
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control p_input" name="name">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control p_input" name="email">
                </div>
                <div class="form-group">
                  <label>Designation</label>
                  <input type="text" class="form-control p_input" name="designation">
                </div>
                <div class="form-group">
                  <label>Phone Number</label>
                  <input type="text" class="form-control p_input" name="number">
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control p_input" name="address">
                </div>
                <div class="form-group">
               	  <label>Gender</label>
                  <select name="gender" class="form-control">
                  <option >-Select Gender-</option>
                  <option value="female">Female</option>
                  <option value="male">Male</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control p_input" name="password">
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                  
                  <a href="#" class="forgot-pass">Forgot password</a>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>
                </div>
               
              {!! Form::close() !!}
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('backend') }}/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="{{ asset('backend') }}/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="{{ asset('backend') }}/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="{{ asset('backend') }}/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{ asset('backend') }}/js/off-canvas.js"></script>
  <script src="{{ asset('backend') }}/js/hoverable-collapse.js"></script>
  <script src="{{ asset('backend') }}/js/misc.js"></script>
  <script src="{{ asset('backend') }}/js/settings.js"></script>


@endsection