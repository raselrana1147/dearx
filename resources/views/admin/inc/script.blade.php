        <script src="{{ asset('assets/backend/assets/plugins/global/plugins.bundle.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/js/scripts.bundle.js')}}"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Page Custom Javascript(used by this page)-->
        <script src="{{ asset('assets/backend/assets/js/custom/widgets.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/js/custom/modals/create-app.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/js/custom/modals/upgrade-plan.js')}}"></script>
        <script src="{{ asset('assets/backend/style/js/sweet-alert.js')}}"></script>

        <script src="{{ asset('assets/backend/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
         <script src="{{ asset('assets/backend/assets/js/custom/documentation/general/datatables/advanced.js')}}"></script>
         {{-- <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script> --}}

         <script>
           $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           });
       </script>


          <script>// toster
              @if(Session::has('message'))
                var type="{{Session::get('alert-type','info')}}"
                switch(type){
                    case 'info':
                         toastr.info("{{ Session::get('message') }}");
                         break;
                    case 'success':
                        toastr.success("{{ Session::get('message') }}");
                        break;
                    case 'warning':
                        toastr.warning("{{ Session::get('message') }}");
                        break;
                    case 'error':
                        toastr.error("{{ Session::get('message') }}");
                       break;
                }
              @endif
        </script>

      
        @yield('js')