<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Webpixels">
  <title>Sign In</title>
  <!-- Preloader -->
  <style>
    @keyframes hidePreloader {
      0% {
        width: 100%;
        height: 100%;
      }

      100% {
        width: 0;
        height: 0;
      }
    }

    body>div.preloader {
      position: fixed;
      background: #12664d;
      width: 100%;
      height: 100%;
      z-index: 1071;
      opacity: 0;
      transition: opacity .5s ease;
      overflow: hidden;
      pointer-events: none;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    body:not(.loaded)>div.preloader {
      opacity: 1;
    }

    body:not(.loaded) {
      overflow: hidden;
    }

    body.loaded>div.preloader {
      animation: hidePreloader .5s linear .5s forwards;
    }
  </style>
  <script>
    window.addEventListener("load", function() {
      setTimeout(function() {
        document.querySelector('body').classList.add('loaded');
      }, 300);
    });
  </script>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url('assets') ?>/favicon.png"><!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/login') ?>/libs/@fortawesome/fontawesome-free/css/all.min.css">
  <!-- Quick CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/login') ?>/css/quick-website.css" id="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('assets/css') ?>bootstrap.min.css" id="stylesheet">
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <div class="spinner-border text-danger" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <div class="modal fade" tabindex="-1" role="dialog" id="modal-cookies" data-backdrop="false" aria-labelledby="modal-cookies" aria-hidden="true">
    <div class="modal-dialog modal-dialog-aside left-4 right-4 bottom-4">
      <div class="modal-content bg-dark-dark">
        <div class="modal-body">
          <!-- Text -->
          <p class="text-sm text-white mb-3">
            We use cookies so that our themes work for you. By using our website, you agree to our use of cookies.
          </p>
          <!-- Buttons -->
          <a href="pages/utility/terms.html" class="btn btn-sm btn-white" target="_blank">Learn more</a>
          <button type="button" class="btn btn-sm btn-primary mr-2" data-dismiss="modal">OK</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Go Pro -->
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mt-4 mt-lg-0 ml-auto">
          <li class="nav-item ">
            <button type="button" class="btn btn-primary btn-sm btn-icon" data-toggle="modal" data-target="#modal_5">
         <i data-feather="user"></i>&nbsp;&nbsp; Login 
        </button>
          </li>
        </ul>
        <!-- Button -->
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <section class="slice py-7">
    <div class="container">
      <div class="row row-grid align-items-center">
        <div class="col-12 col-md-5 col-lg-6 order-md-2 text-center">
          <!-- Image -->
          <head>
            <style>
            body{
              background-image: url('<?php echo base_url();?>/assets/bg_1.jpg');
              background-attachment: fixed;
              background-repeat: no-repeat;
              background-size: cover;
              }
              </style>
              </head>
        </div>
          <!-- Heading -->
          <h1 class="display-4 text-center text-md-left mb-3">
            Selamat Datang Di Website  <strong class="text-primary">Foresthree</strong>
          </h1>
          <!-- Text -->
          <p class="lead text-center text-md-left text-muted">
            Silahkan Lakukan Login & Janga lupa Absen yaa...
          </p>
          <!-- Buttons -->
          <!-- Modal -->
          <div class="modal modal-default fade" id="modal_5" tabindex="-1" role="dialog" aria-labelledby="modal_5" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title h4" id="modal_title_6">
                    <strong>Login to your account</strong></h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="text-left">
                    <form action="<?php echo base_url('login') ?>" method="post">
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i data-feather="user"></i></span>
                          </div>
                          <input type="text" name="nip" class="form-control" id="input-email" placeholder="Masukkan nip anda" autocomplete="off" onkeyup="this.value = this.value.toUpperCase()" required>
                        </div>
                      </div>
                      <div class="form-group mb-0">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i data-feather="lock"></i></span>
                          </div>
                          <input type="password" name="password" class="form-control" id="input-password" placeholder="Masukkan password anda" autocomplete="off" required>
                        </div>
                      </div>
                      <div class="mt-4">
                        <button type="submit" class="btn btn-block btn-dark">Log in</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
  </section>
  <!-- Core JS  -->
  <script src="<?php echo base_url('assets/login') ?>/libs/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/login') ?>/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('assets/login') ?>/libs/svg-injector/dist/svg-injector.min.js"></script>
  <script src="<?php echo base_url('assets/login') ?>/libs/feather-icons/dist/feather.min.js"></script>
  <!-- Quick JS -->
  <script src="<?php echo base_url('assets/login') ?>/js/quick-website.js"></script>
  <!-- Feather Icons -->
  <script>
    feather.replace({
      'width': '1em',
      'height': '1em'
    })
  </script>
</body>
</html>
