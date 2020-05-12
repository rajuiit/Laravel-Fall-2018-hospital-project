@extends('backend.deshboard')

@section('title')
	Update Doctor
@endsection

@section('content-heading')
	Doctors Info Update
@endsection

@section('maincontent')

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h2 class="card-title text-left mb-3">Undate Doctor Information</h2>
              <h3>{{ Session::get('massage') }}</h3>
              {!! Form::open(['url'=>'/backend/doctoredit','method'=>'post']) !!}
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control p_input" name="name" value="{{ $doctoredit->name }}">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control p_input" name="email" value="{{ $doctoredit->email }}">
                </div>
                <div class="form-group">
                  <label>Designation</label>
                  <input type="text" class="form-control p_input" name="designation" value="{{ $doctoredit->designation }}">
                </div>
                <div class="form-group">
                  <label>Phone Number</label>
                  <input type="text" class="form-control p_input" name="number" value="{{ $doctoredit->number }}">
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control p_input" name="address" value="{{ $doctoredit->address }}">
                </div>
                <input type="hidden" name="doctoreditid" value="{{ $doctoredit->id }}">
               
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" class="form-control p_input" name="password" value="{{ $doctoredit->password }}">
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

@endsection