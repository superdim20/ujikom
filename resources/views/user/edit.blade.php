<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="{{asset('assets/')}}" data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Edit</title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon/favicon.ico')}}" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/boxicons.css')}}" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
    <!-- Helpers -->
    <script src="{{asset('assets/vendor/js/helpers.js')}}"></script>
    <script src="{{asset('assets/js/config.js')}}"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    @include('layouts.include.navbar') <!-- Make sure the correct path to navbar is provided -->

    <!-- content -->
    <div class="content-wrapper">
      <div class="container mt-4"> <!-- Ensure container aligns with navbar -->
        <!-- Content -->
        <div class="row">
          <div class="col-xl">
            <div class="card mb-4">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">User</h5>
                <div class="float-end">
                  <a href="{{ route('user.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                </div>
              </div>
              <div class="card-body">
              <form action="{{ route('user.update', $user->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                  <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-nama_user">User Name</label>
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-fullname2" class="input-group-text">
                        <i class="bx bx-user"></i>
                      </span>
                      <input type="text" name="name" class="form-control @error('nama_user') is-invalid @enderror" id="basic-icon-default-nama_user" placeholder="User Name" aria-describedby="basic-icon-default-fullname2" 
                      value="{{ $user->name }}"/>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-email">Email</label>
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-fullname2" class="input-group-text">
                        <i class="fab fa-google"></i>
                      </span>
                      <input type="text" name="email" class="form-control @error('nama_user') is-invalid @enderror" id="basic-icon-default-nama_user" placeholder="User email" aria-describedby="basic-icon-default-fullemail2" 
                      value="{{ $user->email }}"/>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-email">Ia Admin</label>
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-fullname2" class="input-group-text">
                        <i class="bx bx-mail"></i>
                      </span>
                      <select id="input19" name="isAdmin" class="form-select">
                        <option value="0" {{ $user->isAdmin == 0 ? 'selected' : '' }}>No</option>
                        <option value="1" {{ $user->isAdmin ? 'selected' : '' }}>Yes</option>
                    </select>
                    </div>
                  </div>


                  <button type="submit" class="btn btn-primary">Send</button>
                </form>
              </div>
            </div>
          </div>
        </div>    
        <!-- / Content -->
      </div>
      <!-- / Content wrapper -->
    </div>
    <!-- / Layout page -->

    <!-- Footer -->
    @include('layouts.include.footer') <!-- Make sure the correct path to footer is provided -->
    <!-- / Footer -->

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>


    <!-- Core JS -->
    <script src="{{asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('assets/vendor/js/menu.js')}}"></script>

    <!-- Vendors JS -->
    <script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js')}}"></script>
  </body>
</html>
