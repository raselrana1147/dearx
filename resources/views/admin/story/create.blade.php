@extends('layouts.app')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    
@endsection
@section('title',"Admin Story")
@section('breadcrum')
<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
    <div class="d-flex align-items-center me-3">
        <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Story
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
					<h3 class="card-title">Add Story</h3>
				</div>
				<div class="card-body">
					<form id="submit_form" data-action="{{ route('story.store') }}" method="POST">
						@csrf
						<div class="form-group">
							<label class="p-2"><strong>Title</strong></label>
							<input type="text" name="title" class="form-control" placeholder="Title" required="" />
						</div><br>
						<div class="form-group">
							<label class="p-2"><strong>Type</strong></label>
							<select class="form-control" name="type">

								<option value="popular">Popular</option>
								<option value="sad">Sad</option>
								<option value="love">Love</option>
								<option value="heart_touch">Heart Touch</option>
								<option value="love_quote">Love Quote</option>
								<option value="sad_quote">Sad Quote</option>
								<option value="bangla_quote">Bangla Quote</option>
								<option value="english_quote">English Quote</option>
								<option value="influential_persons">Most Influential Person</option>
							</select>
						</div><br>
						<div class="form-group">
							<label class="p-2"><strong>Content</strong></label>
							<textarea name="content" id="summernote" class="form-control" required=""></textarea>
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
 <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
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
                      $(".submit_button").text("Add").prop('disabled', false)
                  },

                  error:function(response){
                  	 alert(response.responseJSON.error)
                  	 $(".submit_button").text("Add").prop('disabled', false)
                  }

                });
          });

		$('#summernote').summernote();
	})
</script>
@endsection
