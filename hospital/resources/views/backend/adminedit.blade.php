@extends('backend.deshboard')

@section('title')
	Edit Admin
@endsection

@section('content-heading')
	Edit Admin Info
@endsection

@section('maincontent')

<head>

<body class="sidebar-dark">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h2 class="card-title text-left mb-3">Edit Info</h2>
             

              {!! Form::open(['url'=>'/backend/adminedit','method'=>'post']) !!}

                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control p_input" name="name" value="{{ $adminedit->name }}">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control p_input" name="email" value="{{ $adminedit->email }}">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" class="form-control p_input" name="password" value="{{ $adminedit->password }}">
                </div>
                <input type="hidden" name="admineditid" value="{{ $adminedit->id }}">
                <div class="form-group d-flex align-items-center justify-content-between">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Update</button>
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
  <!-- endinject -->
</body>

@endsection