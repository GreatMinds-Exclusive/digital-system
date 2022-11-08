<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Error Page | Digital Clearance System</title>
    <meta name="description" content="Digital Clearance System of the Nigeria Immigration Service">

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

    <!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>/public/assets/images/logo/favicon.ico">

  </head>
<body>
	<div class="d-flex justify-content-center align-items-center p-4 position-absolute top-0 w-100">
      <img src="<?= base_url(); ?>/public/assets/images/logo/nis-logo-2.png" width="110" height="38" alt="...">
    </div>

    <div class="container">
      <div class="row g-0 min-vh-100 align-items-center">
        <div class="col-md-6 mx-auto py-6 text-center">

          <h1 class="display-4 fw-bold text-primary">Oops! <br/>That Page is not here;</h1>
          <p class="lead mb-5">
			<?php if (! empty($message) && $message !== '(null)') : ?>
				<?= esc($message) ?>
			<?php else : ?>
				Sorry! Cannot seem to find the page you were looking for.
			<?php endif ?>
		</p>
            <a href="<?= base_url(); ?>" class="btn btn-primary">Back to dashboard</a>
	</div>
        </div>
    </div>
</body>
</html>
