<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="">
        <meta charset="utf-8" />
        <title>DearEX | Admin Login</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Craft admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
        <meta name="keywords" content="Craft, bootstrap, Angular 10, Vue, React, Laravel, admin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
        <link rel="canonical" href="Https://preview.keenthemes.com/start" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" href="{{ asset('assets/backend/assets/media/logos/favicon.ico') }}" />
        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <!--end::Fonts-->
        <!--begin::Global Stylesheets Bundle(used by all pages)-->
        <link href="{{ asset('assets/backend/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/backend/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('assets/backend/style/css/toastr.css')}}" rel="stylesheet" type="text/css" />
        <!--end::Global Stylesheets Bundle-->
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_body" class="bg-dark header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
        <!--begin::Main-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Authentication - Sign-in -->
            <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-size1: 100% 50%; background-image: url({{ asset('assets/backend/assets/media/misc/outdoor.png') }})">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                    <!--begin::Logo-->
                    <a href="index.html" class="mb-12">
                        <img alt="Logo" src="{{ asset('assets/backend/image/logo/logo.png')}}" class="h-45px" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Wrapper-->
                    <div class="w-lg-500px bg-white rounded shadow-sm p-10 p-lg-15 mx-auto">
                        <!--begin::Form-->
                        <form data-action="{{ route('admin.login.submit') }}" method="POST" class="form w-100" novalidate="novalidate" id="kt_sign_in_form">
                            @csrf
                         
                            <div class="text-center mb-10">
                          
                                <h1 class="text-dark mb-3">Sign In to Admin</h1>
                            
                                <div class="text-gray-400 fw-bold fs-4">New Here?
                               <div id="message_area" style="display: none"></div>
                                
                            </div>
                          
                            </div>
                            
                            <div class="fv-row mb-10">
                               
                                <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                                
                                <input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off" placeholder="E-mail" />
                               
                            </div>
                           
                            <div class="fv-row mb-10">
                               
                                <div class="d-flex flex-stack mb-2">
                                   
                                    <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                                    <!--end::Label-->
                                    <!--begin::Link-->
                                    <a href="#" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Input-->
                                <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" placeholder="Password" />
                           
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <!--begin::Submit button-->
                                <button type="submit" id="kt_sign_in_submit float-left" class="btn btn-lg btn-primary fw-bolder me-3 my-2 submit_button">
                                    <span class="indicator-label">Sign In</span>
                                   
                                </button>
                                
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="d-flex flex-center flex-column-auto p-10">
                    <!--begin::Links-->
                    <div class="d-flex align-items-center fw-bold fs-6">
                        <a href="https://keenthemes.com/faqs" class="text-muted text-hover-primary px-2">About</a>
                        <a href="mailto:support@keenthemes.com" class="text-muted text-hover-primary px-2">Contact</a>
                        <a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2">Contact Us</a>
                    </div>
                    <!--end::Links-->
                </div>
                <!--end::Footer-->
            </div>
           
        </div>
        <script src="{{ asset('assets/backend/assets/plugins/global/plugins.bundle.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/js/scripts.bundle.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/js/custom/authentication/sign-in/general.js')}}"></script>
        <script src="{{ asset('assets/backend/style/js/toastr.js')}}"></script>
        <script>
           $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           });
       </script>

        <script>
            $(document).ready(function(){
                 $('body').on('submit','#kt_sign_in_form',function(e){
               
                e.preventDefault();
                let formDta = new FormData(this);

                $('.submit_button').text("Processing").prop('disabled',true);
                 $('#message_area').html('<div class="alert alert-success">Processing...</div>').show();

                $.ajax({
                  url: $(this).attr('data-action'),
                  method: "POST",
                  data: formDta,
                  cache: false,
                  contentType: false,
                  processData: false,
                  success:function(response){

                    let data=JSON.parse(response);

                    if(data.status==200){
                        $('#message_area').html('<div class="alert alert-success">Successfully Loged In</div>').show();
                        window.location = data.route
                    }else{
                        //toastr.error(data.message);   
                        $('#message_area')
                        .html('<div class="alert alert-danger">Credential Not Match</div>').show();
                         $('.submit_button').text("Sing In").prop('disabled',false);
                    }
                  },

                 
                });
          })
            })
        </script>
        
        
    </body>
    <!--end::Body-->
</html>