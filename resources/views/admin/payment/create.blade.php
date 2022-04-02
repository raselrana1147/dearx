@extends('layouts.app')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/style/css/dropify.css') }}">
    
@endsection
@section('title',"DearEX | Add Payment")
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
					<h3 class="card-title">Add Payment</h3>
				</div>
				<div class="card-body">
					<form id="submit_form" data-action="{{ route('payment.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label class="p-2"><strong>Operator Name</strong></label>
							<input type="text" name="operator_name" class="form-control" placeholder="Operator Name" required="" />
						</div><br>
						<div class="form-group">
							<label class="p-2"><strong>Image</strong></label>
							<input type="file" name="image" required="" class="dropify">
						</div><br>
						<div class="form-group">
							<button type="submit" class="btn btn-success submit_button">Add 
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
                      toastr.info(data.message);
                      $("#submit_form")[0].reset();
                      $(".submit_button").text("Add").prop('disabled', false)
                  },

                  error:function(response){
                  	   console.log(response)
                      Swal.fire(response.responseJSON.errors.image[0])
                  	 $(".submit_button").text("Add").prop('disabled', false)
                  }

                });
          });

		$('#summernote').summernote();
	})
</script>
@endsection
