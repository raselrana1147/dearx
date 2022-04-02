@extends('layouts.app')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/style/css/dropify.css') }}">
    
@endsection
@section('title',"DearEX | Update Payment")
@section('breadcrum')
<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
    <div class="d-flex align-items-center me-3">
        <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Payment
        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span></h1>
    </div> 
</div>
@endsection
@section('message')
    @include('admin.inc.message')
@endsection
@section('content')
<a href="javascript:history.back();" class="btn btn-success btn-sm" style="float: right;">Back</a>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Update Payment</h3>
				</div>
				<div class="card-body">
					<form id="submit_form" data-action="{{ route('payment.update') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<input type="hidden" name="id" value="{{$data->id}}">
						<div class="form-group">
							<label class="p-2"><strong>Operator Name</strong></label>
							<input type="text" name="operator_name" class="form-control" value="{{$data->operator_name}}" required="" />
						</div><br>
						<div class="form-group">
							<label class="p-2"><strong>Image</strong></label>
							<input type="file" name="image" class="dropify" data-default-file="{{($data->image !==null) ? asset('assets/backend/payment/'.$data->image) : asset('assets/backend/default.png') }}">
						</div><br>
						<div class="form-group">
							<button type="submit" class="btn btn-success submit_button">Update 
							</button>
						</div>
					</form>
				</div>
			</div>

		</div>
		<div class="col-md-2"></div>
	</div>
@endsection
@section('js')
  <script src="{{ asset('assets/backend/style/js/dropify.js') }}"></script>
 <script src="{{ asset('assets/backend/style/js/dropify.more.js') }}"></script>
<script>
	$(document).ready(function(){

		$('body').on('submit','#submit_form',function(e){
               
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
                      toastr.success(data.message);
                      $("#submit_form")[0].reset();
                      $(".submit_button").text("Update").prop('disabled', false)
                  },

                  error:function(response){
                  	 alert(response.responseJSON.error)
                  	 $(".submit_button").text("Add").prop('disabled', false)
                  }

                });
          });
	})
</script>
@endsection
