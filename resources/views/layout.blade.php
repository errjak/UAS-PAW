<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{$title}}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    {{-- online bootstrpt --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- =======================================================
  * Template Name: Vesperr - v4.7.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{URL::to('/')}}">Simple Siakad</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <span class="navbar-text">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{URL::to('/')}}">Data Mahasiswa</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ url('create') }}">Input Data</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ url('aboutme') }}">About Me</a>
                </li>
            </ul>
            </span>
            </div>
        </div>
        </nav>
    </header>
    <!-- End Header -->
    <br/>
    <br/>
    <!-- Footer -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="">
                @yield('content')
            </div>
        </div>
    </section>
    <!-- End Hero -->
    <br/>
    <br/>
<!-- Footer -->
    <footer class="text-white text-center text-lg-start bg-primary">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row mt-4">
        <!--Grid column-->
        <div class="col-lg-8 col-md-20 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">About company</h5>
  
          <div class="copyright">
                        &copy; Copyright <strong>Universitas Trunojoyo Madura</strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
                        Jl. Raya Telang, Kecamatan Kamal, Kabupaten Bangkalan 69162 Indonesia
                    </div>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Preferences</h5>
  
          <table class="table text-center text-white">
            <tbody class="font-weight-normal">
              <tr>
                <td>Terms of Service</td>
                <td>Privacy Policy</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright:
      <p class="text-white">Universitas Trunojoyo Madura</p>
    </div>
    <!-- Copyright -->
  </footer>
    <!-- End Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>