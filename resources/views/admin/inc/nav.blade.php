<div id="kt_header" style="" class="header align-items-stretch">
                        <!--begin::Container-->
                        <div class="container-fluid d-flex align-items-stretch justify-content-between">
                            <!--begin::Aside mobile toggle-->
                       
                            <!--end::Aside mobile toggle-->
                            <!--begin::Mobile logo-->
                           
                            <!--end::Mobile logo-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                                <!--begin::Navbar-->
                                <div class="d-flex align-items-stretch" id="kt_header_nav">
                                    <!--begin::Menu wrapper-->
                                    
                                    <!--end::Menu wrapper-->
                                </div>
                                <!--end::Navbar-->
                                <!--begin::Topbar-->
                                <div class="d-flex align-items-stretch flex-shrink-0">
                                    <!--begin::Toolbar wrapper-->
                                    <div class="d-flex align-items-stretch flex-shrink-0">
                                     
                                      
                                        <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                                            <!--begin::Menu-->
                                            <div class="cursor-pointer symbol symbol-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
                                                <img src="{{(Auth::user()->avatar !=null) ? asset('assets/backend/profile/'.Auth::user()->avatar) : asset('assets/backend/default.png')}}" alt="metronic" />
                                            </div>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content d-flex align-items-center px-3">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-50px me-5">
                                                            <img alt="Logo" src="{{(Auth::user()->avatar !=null) ? asset('assets/backend/profile/'.Auth::user()->avatar) : asset('assets/backend/default.png')}}" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Username-->
                                                        <div class="d-flex flex-column">
                                                            <div class="fw-bolder d-flex align-items-center fs-5">{{Auth::user()->name}}
                                                            <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span></div>
                                                            <a href="#" class="fw-bold text-muted text-hover-primary fs-7"></a>
                                                        </div>
                                                        <!--end::Username-->
                                                    </div>
                                                </div>
                                            
                                                <div class="separator my-2"></div>
                                      
                                                <div class="menu-item px-5">
                                                    <a href="{{ route('admin.profile') }}" class="menu-link px-5">My Profile</a>
                                                </div>
                                               
                                                <div class="separator my-2"></div>
                                              
                                                <div class="menu-item px-5">
                                                    <a href="javascript:;" class="menu-link px-5" onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">Sign Out</a>
                                                </div>

                                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none">
                                                                    @csrf
                                                </form>
                                                <!--end::Menu item-->
                                            </div>
                                            
                                        </div>
                                    
                                    </div>
                                    <!--end::Toolbar wrapper-->
                                </div>
                                <!--end::Topbar-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Container-->
                    </div>