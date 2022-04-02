@extends('layouts.app')
@section('title',"DearEX | User Withdraw")
@section('breadcrum')
<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
    <div class="d-flex align-items-center me-3">
        <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Withdraw
        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span></h1>
    </div> 
</div>
@endsection
@section('message')
    @include('admin.inc.message')
@endsection
@section('content')
      <div class="py-10">
      <div class="my-5">
        <table id="item_table" class="table table-striped gy-5 gs-7 border rounded" >
          <thead>
            <tr class="fw-bolder fs-6 text-gray-800 px-7">
              <th>Serial</th>
              <th>User</th>
              <th>Payment</th>
              <th>Amount</th>
              <th>Account Number</th>
              <th>Type</th>
              <th>Action</th>
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
             ajax: '{{ route('load_withdraw') }}',
             columns: [
                 { data: 'id',name:'id' },
                 { data: 'user',name:'user'},
                 { data: 'payment',name:'payment'},
                 { data: 'amount',name:'amount'},
                 { data: 'account_number',name:'account_number'},
                 { data: 'type',name:'type'},
                 { data: 'action',name:'action' },
             ],

              language : {
                   processing: 'Processing'
               },
              
         });
    </script>


  <script>

    $(document).ready(function(){

         $('body').on('change','.change_withdraw_status',function(e){
            e.preventDefault();
               let id=$(this).attr('item_id');
               let status=$(this).val();
            $.ajax({
               url:$(this).attr('data-action'),
               method:'post',
               data:{id:id,status:status},
               success:function(response){
                  var data=JSON.parse(response);
                  toastr.success(data.message);
               }
            });
      });
          
      });


  </script>

@endsection
