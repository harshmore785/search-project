<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <!-- <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ asset('admin/images/logo-sm.png') }}" alt="" height="22" />
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('admin/images/logo-dark.png') }}" alt="" height="17" />
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset('admin/images/logo-sm.png') }}" alt="" height="22" />
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('admin/images/logo-light.png') }}" alt="" height="17" />
                        </span>
                    </a> -->
                </div>

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- App Search-->
                
            </div>

            <div class="d-flex align-items-center">
                <div class="dropdown d-md-none topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-search fs-22"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username" />
                                    <button class="btn btn-primary" type="submit">
                                        <i class="mdi mdi-magnify"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-toggle="fullscreen">
                        <i class="bx bx-fullscreen fs-22"></i>
                    </button>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" id="change-theme-button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                        <i class="bx bx-moon fs-22"></i>
                    </button>
                </div>


                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <!-- <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="{{ asset('admin/images/users/avatar-1.jpg') }}" alt="Header Avatar" />
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-semibold user-name-text"></span>
                                <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text"></span>
                            </span>
                        </span>
                    </button> -->
                    <!-- <div class="dropdown-menu dropdown-menu-end">
                        <h6 class="dropdown-header">

                        </h6>
                        <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i>
                            <span class="align-middle">Profile</span>
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i>
                            <span class="align-middle" data-key="t-logout">Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</header>



<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width: 100px; height: 100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">
                            Are you sure you want to remove this
                            Notification ?
                        </p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">
                        Yes, Delete It!
                    </button>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


@push('scripts')
    <script>
        $(document).ready(function(){

            $("#change-theme-button").click(function(e){
                e.preventDefault();

                $.ajax({
                    url: "{{ route('change-theme-mode') }}",
                    type: 'GET',
                    data: {
                        '_token': "{{ csrf_token() }}",
                    },
                    success: function(data, textStatus, jqXHR)
                    {
                        console.log("theme color changed");
                    },
                    error: function(error, jqXHR, textStatus, errorThrown) {
                        console.log("something whent wrong while changing theme color");
                    },
                });

            });

        });
    </script>
@endpush