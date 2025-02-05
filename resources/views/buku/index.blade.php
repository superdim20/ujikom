<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="../assets/js/config.js"></script>

    <!-- CSS to control dropdown behavior -->
    <style>
      /* Prevent scroll issue when dropdown is triggered */
      .dropdown-menu {
        max-height: 300px; /* Maximum height for the dropdown */
        overflow-y: auto;  /* Enable scroll only inside the dropdown if needed */
        position: absolute; /* Position dropdown properly */
        z-index: 9999; /* Make sure it appears above other elements */
      }
    </style>
  </head>

  <body>
    <!-- Layout wrapper -->
    @include('layouts.include.navbar')
    @include('sweetalert::alert')
    <!-- content -->
    <div class="content-wrapper">
      <div class="container mt-3">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0"><b>BUKU</b></h5>
            <a href="{{ route('buku.create') }}" class="btn btn-primary btn-sm">Tambah buku</a>
          </div>
          <div class="table-responsive">
            <table class="table table-dark table-hover mb-0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Buku</th>
                  <th>Author</th>
                  <th>Nama Publisher</th>
                  <th>Nama Kategori</th>
                  <th>Stok</th>
                  <th>Image</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                @php $no = 1; @endphp
                @forelse ($buku as $data)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->nama_buku }}</td>   
                    <td>{{$data->author}}</td>
                    <td>{{$data->publisher->nama_publisher}}</td>
                    <td>{{$data->kategori->nama_kategori}}</td>
                    <td>{{$data->stok}}</td>
                    <td>
                        <img src="{{ asset('/storage/bukus/' . $data->image) }}" class="rounded"
                            style="width: 150px">
                    </td> 
                    <td>
                      <div class="btn-group dropend">
                        <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-bs-toggle="dropdown">
                          &#x22EE;
                        </button>
                        <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('buku.edit', $data->id) }}" class="dropdown-item text-warning">
                            <i class="bx bx-edit-alt me-2"></i> Edit
                            </a>
                        </li>
                        <li>
                            <!-- Form delete dengan tombol submit tersembunyi -->
                            <form action="{{ route('buku.destroy', $data->id) }}" method="POST" id="delete-form-{{ $data->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="dropdown-item text-danger" onclick="confirmDelete({{ $data->id }})">
                                <i class="bx bx-trash me-2"></i> Delete
                            </button>
                            </form>
                        </li>
                        </ul>

                      </div>
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="4" class="text-center">Data belum tersedia.</td>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    @include('layouts.include.footer')
    <!-- / Footer -->

    <div class="content-backdrop fade"></div>
  </div>

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

  <!-- Delete Confirmation -->
  <script>
    function confirmDelete(id) {
      if (confirm('Are you sure you want to delete this publisher?')) {
        document.getElementById('delete-form-' + id).submit();
      }
    }
  </script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
