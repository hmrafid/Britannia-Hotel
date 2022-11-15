<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Britannia Hotel - Facilities</title>
    <?php require('inc/links.php'); ?>
    <style>
      .pop:hover {
        border-top-color: var(--orange) !important;
        transform: scale(1.03);
        transition: all 0.3s;
      }
    </style>
  </head>
  <body class="bg-light">
    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
      <h2 class="fw-bold h-font text-center">Our Facilities</h2>
      <div class="h-line bg-dark"></div>
      <p class="text-center mt-3">
        We provide the best service with best price where you can feel homely
      </p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-5 px-4">
          <div class="bg-white rounded shadow p-4 border-top border-4 pop">
            <div class="d-flex align-items-center mb-2">
              <img src="images/features/wifi.svg" width="40px" />
              <h5 class="m-0 ms-3">Wifi</h5>
            </div>
            <p>
              Out of data? Np tension! We provide a decent network speed through
              which you can upload tons of photos and videos of your Sylhet tour
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 px-4">
          <div class="bg-white rounded shadow p-4 border-top border-4 pop">
            <div class="d-flex align-items-center mb-2">
              <img src="images/features/AC.svg" width="40px" />
              <h5 class="m-0 ms-3">AC</h5>
            </div>
            <p>
              Every room is fully air conditioned so you don't need to be
              concerned about hot and humid weather
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 px-4">
          <div class="bg-white rounded shadow p-4 border-top border-4 pop">
            <div class="d-flex align-items-center mb-2">
              <img src="images/features/fire.svg" width="40px" />
              <h5 class="m-0 ms-3">Fire Extinguisher</h5>
            </div>
            <p>
              Worried about a high-story building's fire security system? We've
              got you covered.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 px-4">
          <div class="bg-white rounded shadow p-4 border-top border-4 pop">
            <div class="d-flex align-items-center mb-2">
              <img src="images/features/Geyser.svg" width="40px" />
              <h5 class="m-0 ms-3">Hot Water</h5>
            </div>
            <p>Every room of ours comes up with a geyser system</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 px-4">
          <div class="bg-white rounded shadow p-4 border-top border-4 pop">
            <div class="d-flex align-items-center mb-2">
              <img src="images/features/tv.svg" width="40px" />
              <h5 class="m-0 ms-3">TV</h5>
            </div>
            <p>
              Don't miss any shows you regularly watch because we got you
              covered with TV which comes up with Akash DTH subscriptions
            </p>
          </div>
        </div>
      </div>
    </div>
    <?php require('inc/footer.php'); ?>
  </body>
</html>
