@extends('layouts.app')
@section('title',"Admin Advertisement")
@section('breadcrum')
<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
    <div class="d-flex align-items-center me-3">
        <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Advertisement
        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span></h1>
    </div> 
</div>
@endsection
@section('message')
    @include('admin.inc.message')
@endsection
@section('content')
<a href="{{ route('advertisement.create') }}" class="btn btn-success btn-sm" style="float: right;">Add</a>
		<div class="py-10">
			<div class="my-5">
				<table id="item_table" class="table table-striped gy-5 gs-7 border rounded">
					<thead>
						<tr class="fw-bolder fs-6 text-gray-800 px-7">
							<th width="1%">Serial</th>
							<th width="9%">Title</th>
							<th width="75%">Content</th>
							<th width="15%">Action</th>
						</tr>
					</thead>
				
				</table>
			</div>
		</div>
@endsection
@section('js')

   <script>
         var table = $("#item_table").DataTable({
             processing: true,
             responsive: true,
             serverSide: true,
             ordering: false,
             pagingType: "full_numbers",
             ajax: '{{ route('load_advertisment') }}',
             columns: [
                 { data: 'id',name:'id' },
                 { data: 'title',name:'title'},
                 { data: 'content',name:'content'},
                 { data: 'action',name:'action' },
             ],

              language : {
                   processing: 'Processing'
               },
              
         });
    </script>


     <script>

    $(document).ready(function(){

          $('body').on('click','.delete_item',function(){
            let item_id=$(this).attr('item_id');
            swal({
              title: "Do you want to delete?",
              icon: "info",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                   $.ajax({
                      url:$(this).attr('data-action'),
                      method:'post',
                      data:{item_id:item_id},
                      success:function(response){
                        var data=JSON.parse(response);
                         toastr.info(data.message);
                        $('#item_table').DataTable().ajax.reload();
                         
                      }

                   }); 
            
              } 
            });
          })

          
      });


  </script>

@endsection
