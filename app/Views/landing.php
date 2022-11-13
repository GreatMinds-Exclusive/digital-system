<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="UTF-8">
    <title>NIS Digital Clearance System</title>
	<meta name="description" content="Nigeria Immigration Service Digital Clearance System">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>/public/assets/images/logo/favicon.ico" />
    <meta name="viewport" content="width=device-width, maximum-scale=5, initial-scale=1">

    <!-- up to 10% speed up for external res -->
    <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <!-- preloading icon font is helping to speed up a little bit -->
    <link rel="preload" href="<?= base_url(); ?>/public/assets/fonts/flaticon/Flaticon.woff2" as="font" type="font/woff2" crossorigin>

    <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/core.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/vendor_bundle.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap">


  </head>
  <body>


    <div class="row g-0 bg-white min-vh-100 align-items-center">
      <div class="col-lg-6 text-center text-lg-start overflow-hidden z-index-2">
        <div class="px-3 py-6">

          <!-- back button -->
          <a href="" class="link-muted position-absolute top-0 start-0 p-2 d-inline-grid gap-auto-2">
            <svg class="rtl-flip" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
              <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
            </svg>
            <span>back to home</span>
          </a>

          <div class="row">
            <div class="col-sm-8 col-md-6 col-lg-9 col-xl-12 mx-auto max-w-350">
                <div class="d-md-block align-content-sm-center">
                    <img height="53" src="public/assets/images/logo/nis.png" alt="NIS">
                </div>
          <h2 class="h4 mb-2 text-gray-600 doc-section-title doc-anchor">
              Digital Clearance System
            </h2>


            <!-- Tab Pills -->
            <ul class="nav nav-bg nav-invert rounded-pill" id="nav-tab-1">
              <li class="nav-item">
                <a class="nav-link active" href="#nav-tab-1-preview" id="nav-tab-1-preview-link" aria-controls="nav-tab-1-preview" data-bs-toggle="pill">
                  Sign up
                 </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#nav-tab-1-html" id="nav-tab-1-html-link" aria-controls="nav-tab-1-html" data-bs-toggle="pill">
                 Sign in
                 </a>
              </li>
            </ul>
            <!-- /Tab Pill -->

          <div class="tab-content" id="nav-tab-1-content">
            <div class="tab-pane pt-5 fade show active" id="nav-tab-1-preview" aria-labelledby="nav-tab-1-preview-link" role="tabpanel">
              <!--<div class="col-sm-8 col-md-6 col-lg-9 col-xl-12 mx-auto max-w-450"> -->
              
              <form novalidate class="bs-validate" method="POST" action="#">

                <div class="row g-3 mb-3">
                  <div class="col-xl-6">
                    <div class="form-floating">
                      <input required placeholder="First Name" id="account_first_name" name="account_first_name" type="text" class="form-control">
                      <label for="account_first_name">First Name</label>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="form-floating">
                      <input required placeholder="Last Name" id="account_last_name" name="account_last_name" type="text" class="form-control">
                      <label for="account_last_name">Last Name</label>
                    </div>
                  </div>

                </div>

                  <div class="form-floating mb-3">
                    <input required placeholder="Email" id="account_email" name="account_email" type="email" class="form-control">
                    <label for="account_email">Email</label>
                  </div>

                  <div class="input-group-over">
                    <div class="form-floating mb-3">
                      <input required placeholder="Password" id="account_password" type="password" class="form-control">
                      <label for="account_password">Password</label>
                    </div>

                    <a href="#" class="btn smaller btn-password-type-toggle" data-target="#account_password">
                      <span class="group-icon">
                        <i class="fi fi-eye m-0"></i>
                        <i class="fi fi-close m-0"></i>
                      </span>
                    </a>
                  </div>
                  <!-- submit button -->
                <div class="d-grid mb-3">
                  <button type="submit" class="btn btn-danger">
                    <span>Sign up</span>
                    <svg class="rtl-flip" width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                    </svg>
                  </button>
                </div>

              </form>

            </div>
       

          <!-- sigin in -->
    
          <div class="tab-pane pt-5 fade" id="nav-tab-1-html" aria-labelledby="nav-tab-1-html-link" role="tabpanel">

              <form novalidate class="bs-validate" method="POST" action="#">

                <!-- email address -->
                <div class="form-floating mb-3">
                  <input required type="email" class="form-control" id="account_email" placeholder="Email address">
                  <label for="account_email">Email address</label>
                </div>

                <!-- password -->
                <div class="form-floating mb-3">
                  <input required type="password" class="form-control" id="account_passwd" placeholder="Password" autocomplete="new-password">
                  <label for="account_passwd">Password</label>
                  
                  <!-- forgot
                  <a href="auth-passreset-cover.html" class="btn bg-transparent shadow-none link-muted position-absolute top-0 end-0 m-1">
                    Forgot
                  </a>-->
                </div>
                <!-- submit button -->
                <div class="d-grid mb-3">
                  <a class="btn btn-success" href="splash" >
                    <span>Sign in</span>
                    <svg class="rtl-flip" width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                    </svg>
                    </a> 
                    <!-- <input type="hidden" name="submit" value="" /> -->
                </div>

                </form>
              </div>
            </div>
            </div>
          </div>
        </div>
        </div>
      <div class="d-none d-lg-block min-vh-100 col-lg-6 bg-cover py-8 overlay-dark overlay-opacity-25" style="background-image:url(<?= base_url(); ?>/public/assets/images/cover/tech.jpg)">
        <svg class="d-none d-lg-block position-absolute h-100 top-0 text-white ms-n5" style="width:6rem" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
          <polygon points="50,0 100,0 50,100 0,100"></polygon>
        </svg>
      </div>
    </div>
    


    <!-- Core javascripts -->
    <script src="<?= base_url(); ?>/public/assets/js/core.min.js"></script>
    <script src="<?= base_url(); ?>/public/assets/js/vendor_bundle.min.js"></script>
    <script src="<?= base_url(); ?>/public/assets/js/theme.docs.js"></script>

    <div id="page_js_files">

    <script>/* assets/js/theme.docs.js */
    docAnchor(); docNavSelected();
    </script>

  </body>
</html>