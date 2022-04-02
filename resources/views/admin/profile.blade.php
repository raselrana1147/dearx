@extends('layouts.app')
@section('title',"Admin Profile")
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/style/css/dropify.css') }}">
    
@endsection
@section('breadcrum')
<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
    <div class="d-flex align-items-center me-3">
        <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Profile
        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span></h1>
    </div>
</div>
@endsection
@section('message')
    @include('admin.inc.message')
@endsection
@section('content')
 
<div class="row">
		
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Profile Information</h3>
				</div>
				<div class="card-body">
					<form id="submit_form_profile" data-action="{{ route('admin.update_profile') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label class="p-2"><strong>Name</strong></label>
							<input type="text" name="name" class="form-control" required="" value="{{Auth::user()->name}}" />
						</div><br>

						<div class="form-group">
							<label class="p-2"><strong>Phone</strong></label>
							<input type="text" name="phone" class="form-control" required="" value="{{Auth::user()->phone}}" />
						</div><br>
						<div class="form-group">
							<label class="p-2"><strong>Image</strong></label>
							<input type="file" name="avatar" class="dropify" data-default-file="{{(Auth::user()->avatar !=null) ? asset('assets/backend/profile/'.Auth::user()->avatar) : asset('assets/backend/default.png')}}">
						</div><br>
						<div class="form-group">
							<button type="submit" class="btn btn-success profile_button">Update Profile 
							</button>
						</div>
					</form>
				</div>
			</div>

		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Change Password</h3>
				</div>
				<div class="card-body">
					<form id="submit_form_change" data-action="{{ route('admin.change_password') }}" method="POST">
						@csrf
						<div class="form-group">
							<label class="p-2"><strong>Old Password</strong></label>
							<input type="password" name="old_password" class="form-control" required="" />
						</div><br>

						<div class="form-group">
							<label class="p-2"><strong>New Password</strong></label>
							<input type="password" name="new_password" class="form-control" required="" />
						</div><br>

						<div class="form-group">
							<label class="p-2"><strong>Confirm Password</strong></label>
							<input type="password" name="password_confirmation" class="form-control" required="" />
						</div><br>
						
						<div class="form-group">
							<button type="submit" class="btn btn-success submit_button">Change Password 
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('js')
 <script src="{{ asset('assets/backend/style/js/dropify.js') }}"></script>
 <script src="{{ asset('assets/backend/style/js/dropify.more.js') }}"></script>
<script>
	$(document).ready(function(){

		  $('body').on('submit','#submit_form_change',function(e){

                e.preventDefault();
                let formDta = new FormData(this);
    			$(".submit_button").html("Processing...<span class='spinner-border spinner-border-sm align-middle ms-2'></span>").prop('disabled', true)
    			
                $.ajax({
                  url: $(this).attr('data-action'),
                  method: "POST",
                  data: formDta,
                  cache: false,
                  contentType: false,
                  processData: false,
                  success:function(response){
                     let data=JSON.parse(response);
                      toastr.info(data.message);
                      $("#submit_form_change")[0].reset();
                      $(".submit_button").text("Change Password").prop('disabled', false)
                  },

                  error:function(response){
                  	   console.log(response)
                      Swal.fire(response.responseJSON.errors.image[0])
                  	 $(".submit_button").text("Change Password").prop('disabled', false)
                  }

                });
          });

          $('body').on('submit','#submit_form_profile',function(e){

                e.preventDefault();
                let formDta = new FormData(this);
    			$(".profile_button").html("Processing...<span class='spinner-border spinner-border-sm align-middle ms-2'></span>").prop('disabled', true)
    			
                $.ajax({
                  url: $(this).attr('data-action'),
                  method: "POST",
                  data: formDta,
                  cache: false,
                  contentType: false,
                  processData: false,
                  success:function(response){
                     let data=JSON.parse(response);
                      toastr.info(data.message);
                      $("#submit_form_profile")[0].reset();
                      $(".profile_button").text("Update Profile").prop('disabled', false)
                  },

                  error:function(response){
                  	   console.log(response)
                      Swal.fire(response.responseJSON.errors.image[0])
                  	 $(".profile_button").text("Update Profile").prop('disabled', false)
                  }

                });
          });
	})
</script>
@endsection
