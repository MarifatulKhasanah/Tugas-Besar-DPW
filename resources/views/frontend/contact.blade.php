@extends('layouts.frontend')
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container px-2 px-lg-0">
        <a class="navbar-brand" href="#"><img src="{{asset('frontend/assets/logo.png')}}" width="160px" height="35px" alt=""></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{route('homepage')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold active" href="/contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<header class="bg-dark py-5">
      <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
          <h1 class="display-4 fw-bolder">Kontak Kami</h1>
        </div>
      </div>
    </header>
    <!-- Section-->
    <section class="py-5">
      <div class="container px-4 px-lg-5 mt-5">
        <div class="row justify-content-center">
          <div class="col-lg-10 m-auto">
            <div class="contact-form">
              <form id="contactForm" action="{{ route('message') }}" method="post" enctype="multipart/form-date">
                @csrf
                <div class="row">
                  <div class="col-lg-6 col-md-6 mb-2">
                    <div class="name-input form-group">
                      <input
                        id="nama"
                        name="nama_lengkap"
                        type="text"
                        class="form-control"
                        placeholder="Isikan nama lengkap"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 mb-2">
                    <div class="email-input form-group">
                      <input
                        id="email"
                        name="email"
                        type="email"
                        class="form-control"
                        placeholder="Isikan alamat email"
                        required
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 col-md-6 mb-2">
                    <div class="subject-input form-group">
                      <input
                        id="subjek_email"
                        name="subjek_email"
                        type="text"
                        class="form-control"
                        placeholder="Isikan subject email"
                        required
                      />
                    </div>
                  </div>
                </div>
                <div class="message-input form-group mb-3">
                  <textarea
                    id="pesan"
                    name="pesan"
                    cols="30"
                    rows="10"
                    placeholder="Isikan pesan anda"
                    class="form-control"
                    required
                  ></textarea>
                </div>
                <div class="input-submit form-group">
                  <button
                    id="btn-send"
                    type="submit"
                    style="height: 50px; width: 400px; margin: 0 auto"
                    class="d-block btn btn-primary"
                  >
                    Send Message
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="maparea">
      <div class="mapouter">
        <div class="gmap_canvas">
          <iframe
            width="100%"
            height="498"
            id="gmap_canvas"
            src="https://maps.google.com/maps?q=jeringo&t=&z=13&ie=UTF8&iwloc=&output=embed"
            frameborder="0"
            scrolling="no"
            marginheight="0"
            marginwidth="0"
          ></iframe
          ><a href="https://fmovies-online.net">fmovies</a><br /><style>
            .mapouter {
              position: relative;
              text-align: right;
              height: 498px;
              width: 100%;
            }</style
          ><a href="https://www.embedgooglemap.net"></a
          ><style>
            .gmap_canvas {
              overflow: hidden;
              background: none !important;
              height: 498px;
              width: 100%;
            }
          </style>
        </div>
      </div>
    </div>
    <script>
      document.getElementById("btn-send").addEventListener("click", function (event) {
        const nama = document.getElementById('nama').value;
        const email = document.getElementById('email').value;
        const subjek_email = document.getElementById('subjek_email').value;
        const pesan = document.getElementById('pesan').value;
        
    
        if(!nama || !email || !subjek_email || !pesan) {
            event.preventDefault();
            Swal.fire({
                title: "Error!",
                text: "Gagal Menambahkan Data",
                icon: "error"
            });
        } else {
            event.preventDefault();
            Swal.fire({
                title: "Success!",
                text: "Data Berhasil Ditambahkan",
                icon: "success"
            }).then(() => {
                window.location.href = "{{ route('contact') }}";
                document.getElementById('contactForm').submit();
            });
        }
      })
    </script>
@endsection