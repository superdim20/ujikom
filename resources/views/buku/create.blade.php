<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />
    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    @include('layouts.include.navbar')

    <!-- content -->
    <div class="content-wrapper">
      <div class="container mt-4"> <!-- Ensure container aligns with navbar -->
        <!-- Content -->
        <div class="row">
          <div class="col-xl">
            <div class="card mb-4">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Buku</h5>
                <div class="float-end">
                        <a href="{{ route('buku.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>             
                 </div>
              <div class="card-body">
                <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <!-- buku -->
                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-nama_buku">Books Name</label>
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-fullname2" class="input-group-text">
                        <i class="bx bx-book"></i>
                      </span>
                      <input type="text" name='nama_buku' class="form-control @error('nama_buku') is-invalid @enderror" id="basic-icon-default-nama_publsher"  placeholder="Books Name"  aria-describedby="basic-icon-default-fullname2" />
                    </div>
                  </div>
                <!-- author -->
                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-author">Author</label>
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-fullname2" class="input-group-text">
                        <i class="bx bx-user"></i>
                      </span>
                      <input type="text" name='author' class="form-control @error('author') is-invalid @enderror" id="basic-icon-default-nama_publsher"  placeholder="Author"  aria-describedby="basic-icon-default-fullname2" />
                    </div>
                  </div> 
                <!-- publisher -->
                <div class="mb-3">
                    <label for="publisher" class="form-label">Publisher</label>
                    <select name="id_publisher" id="publisher" class="form-control">
                        @foreach ($publisher as $data)
                        <option value="{{ $data->id }}">{{ $data->nama_publisher }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- kategori -->
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select name="id_kategori" id="kategori" class="form-control">
                        @foreach ($kategori as $data)
                        <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- stok -->
                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-stok">Stok</label>
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-fullname2" class="input-group-text">
                        <i class="bx bx-edit"></i>
                      </span>
                      <input type="number" name='stok' class="form-control @error('stok') is-invalid @enderror" id="basic-icon-default-nama_publsher"  placeholder="stok"  aria-describedby="basic-icon-default-fullname2" />
                    </div>
                  </div> 
                <!-- image -->
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" accept="image/*" required>
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
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
    @include('layouts.include.footer')
    <!-- / Footer -->

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>



    <!-- Core JS -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
