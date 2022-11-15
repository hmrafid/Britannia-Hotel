<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Britannia Hotel - Rooms</title>
    <?php require('inc/links.php'); ?>
  </head>
  <body class="bg-light">
    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
      <h2 class="fw-bold h-font text-center">Our Rooms</h2>
      <div class="h-line bg-dark"></div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 mb-4">
          <nav class="navbar navbar-light bg-white rounded shadow">
            <div class="container-fluid flex-lg-column align-items-stretch">
              <h4 class="mt-2">Filters</h4>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                <div class="border bg-light p-3 rounded mb-3">
                    <h5 class="mb-3" style="font: size 18px;">Check Availability</h5>
                    <label class="form-label">Check-in</label>
                    <input type="date" class="form-control shadow-none mb-3">
                    <label class="form-label">Check-out</label>
                    <input type="date" class="form-control shadow-none">
                </div>
                <div class="border bg-light p-3 rounded mb-3">
                  <h5 class="mb-3" style="font: size 18px;">Guests</h5>
                    <div>
                      <label class="form-label me-3">Adults</label>
                      <input type="number" class="form-control shadow-none">
                    </div>
                    <div>
                      <label class="form-label">Children</label>
                      <input type="number" class="form-control shadow-none">
                    </div>
              </div>
                
              </div>
            </div>
          </nav>
        </div>
        <div class="col-lg-9">
          <div class="card mb-4 border-0 shadow">
            <div class="row g-0 p-3 align-items-center">
              <div class="col-md-5 mb-lg-0">
                <img src="images/rooms/10.jpg" class="img-fluid rounded">
              </div>
              <div class="col-md-5 px-lg-3">
                <h5 class="mb-3">Executive Single AC</h5>
                <div class="features mb-3">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >2 Sofas</span
                  >
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >1 Bathroom</span
                  >
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >1 Balcony</span
                  >
                </div>
              </div>
              <div class="col-md-2 text-center ">
                <h6 class="mb-4">2268৳ per night</h6>
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2"
                  >Book Now</a
                >
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none"
                  >More Details</a
                >
              </div>
              <div class="facilities mb-3">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >Wifi</span
                >
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >TV</span
                >
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >AC</span
                >
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >Geyser</span
                >
              </div>
              <div class="guest">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >1 Adult</span
                >
              </div>
            </div>
          </div>
          <div class="card mb-4 border-0 shadow">
            <div class="row g-0 p-3 align-items-center">
              <div class="col-md-5 mb-lg-0">
                <img src="images/rooms/11.jpg" class="img-fluid rounded">
              </div>
              <div class="col-md-5 px-lg-3">
                <h5 class="mb-3">Super Delux AC</h5>
                <div class="features mb-3">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >2 beds</span
                  >
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >1 Bathroom</span
                  >
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >1 Balcony</span
                  >
                </div>
              </div>
              <div class="col-md-2 text-center ">
                <h6 class="mb-4">4000৳ per night</h6>
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2"
                  >Book Now</a
                >
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none"
                  >More Details</a
                >
              </div>
              <div class="facilities mb-3">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >Wifi</span
                >
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >TV</span
                >
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >AC</span
                >
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >Geyser</span
                >
              </div>
              <div class="guest">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >2 Adult 2 Children</span
                >
              </div>
            </div>
          </div>
          <div class="card mb-4 border-0 shadow">
            <div class="row g-0 p-3 align-items-center">
              <div class="col-md-5 mb-lg-0">
                <img src="images/rooms/12.jpg" class="img-fluid rounded">
              </div>
              <div class="col-md-5 px-lg-3">
                <h5 class="mb-3">Family Delux AC</h5>
                <div class="features mb-3">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >3 beds</span
                  >
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >1 Bathroom</span
                  >
                  <span class="badge rounded-pill bg-light text-dark text-wrap"
                    >1 Balcony</span
                  >
                </div>
              </div>
              <div class="col-md-2 text-center ">
                <h6 class="mb-4">5200৳ per night</h6>
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2"
                  >Book Now</a
                >
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none"
                  >More Details</a
                >
              </div>
              <div class="facilities mb-3">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >Wifi</span
                >
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >TV</span
                >
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >AC</span
                >
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >Geyser</span
                >
              </div>
              <div class="guest">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >6-9 Adult</span
                >
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <?php require('inc/footer.php'); ?>
  </body>
</html>
