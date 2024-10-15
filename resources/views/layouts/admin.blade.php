
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Posts</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/back/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/back/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->

  <link href="{{asset('assets/back/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/back/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/back/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/back/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('assets/back/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('assets/back/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/back/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/back/css/style.css')}}" rel="stylesheet">
  {{-- <link href="{{asset('assets/css/main.css')}}" rel="stylesheet"> --}}

</head>

<body>

    
    @include('admin.include.header')

    @include('admin.include.sidbar')

@yield('content')

  @include('admin.include.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/back/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/back/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/back/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('assets/back/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('assets/back/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('assets/back/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('assets/back/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('assets/back/vendor/php-email-form/validate.js')}}"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Template Main JS File -->
  <script src="{{asset('assets/back/js/main.js')}}"></script>

</body>

</html>
