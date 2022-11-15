<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Britannia Hotel Home</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <?php require('inc/links.php'); ?>
    <style>
      .availability-form {
        margin-top: -50px;
        z-index: 2;
        position: relative;
      }
      @media screen and (max-width: 575px) {
        .availability-form {
          margin-top: 25px;
          padding: 0 35px;
        }
      }
    </style>
  </head>
  <body class="bg-light">
    <?php require('inc/header.php'); ?>
    <!-- Carousel -->
    <div class="container-fliud px-lg-4 mt-4">
      <div class="swiper swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="images/carousel/home1.jpg" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/home2.jpg" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/home3.jpg" class="w-100 d-block" />
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <!-- check availability form -->
    <div class="container availability-form">
      <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
          <h5 class="mb-4">Check Booking Availability</h5>
          <form>
            <div class="row align-items-end">
              <div class="col-lg-3">
                <label class="form-label" style="font-weight: 500"
                  >Check-in</label
                >
                <input type="date" class="form-control shadow-none">
              </div>
              <div class="col-lg-3">
                <label class="form-label" style="font-weight: 500"
                  >Check-out</label
                >
                <input type="date" class="form-control shadow-none">
              </div>
              <div class="col-lg-3">
                <label class="form-label" style="font-weight: 500">Adult</label>
                <select class="form-select shadow-none">
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-lg-2">
                <label class="form-label" style="font-weight: 500"
                  >Children</label
                >
                <select class="form-select shadow-none">
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-lg-1">
                <button
                  type="submit"
                  class="btn text-white shadow-none custom-bg"
                >
                  Submit
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Our rooms -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
          <div
            class="card border-0 shadow"
            style="max-width: 350px; margin: auto"
          >
            <img src="images/rooms/10.jpg" class="card-img-top" />
            <div class="card-body">
              <h5>Executive Single AC</h5>
              <h6 class="mb-4">2268৳ per night</h6>
              <div class="features mb-4">
                <h6 class="mb-1">features</h6>
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
              <div class="facilities mb-4">
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
              <div class="guest mb-4">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >1 Adult</span
                >
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none"
                  >Book Now</a
                >
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none"
                  >More Details</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <div
            class="card border-0 shadow"
            style="max-width: 350px; margin: auto"
          >
            <img src="images/rooms/11.jpg" class="card-img-top" />
            <div class="card-body">
              <h5>Super Delux AC</h5>
              <h6 class="mb-4">4000৳ per night</h6>
              <div class="features mb-4">
                <h6 class="mb-1">features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >2 Sofas</span
                >
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >Double Bed</span
                >
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >Balcony</span
                >
              </div>
              <div class="facilities mb-4">
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
              <div class="guest mb-4">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >2 Adult</span
                >
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >2 Children</span
                >
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none"
                  >Book Now</a
                >
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none"
                  >More Details</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <div
            class="card border-0 shadow"
            style="max-width: 350px; margin: auto"
          >
            <img src="images/rooms/12.jpg" class="card-img-top" />
            <div class="card-body">
              <h5>Super Delux Family</h5>
              <h6 class="mb-4">5000৳ per night</h6>
              <div class="features mb-4">
                <h6 class="mb-1">features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >2 Sofas</span
                >
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >3 Beds</span
                >
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >Balcony</span
                >
              </div>
              <div class="facilities mb-4">
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
              <div class="guest mb-4">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >6-9 Adult</span
                >
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none"
                  >Book Now</a
                >
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none"
                  >More Details</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
          <a
            href="#"
            class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"
            >More Rooms >>></a
          >
        </div>
      </div>
    </div>
    <!-- Facilities -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>
    <div class="container">
      <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div
          class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3"
        >
          <img src="images/features/wifi.svg" width="80px" />
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div
          class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3"
        >
          <img src="images/features/fire.svg" width="80px" />
          <h5 class="mt-3">Fire Extinguisher</h5>
        </div>
        <div
          class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3"
        >
          <img src="images/features/tv.svg" width="80px" />
          <h5 class="mt-3">TV</h5>
        </div>
        <div
          class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3"
        >
          <img src="images/features/Geyser.svg" width="80px" />
          <h5 class="mt-3">Geyser</h5>
        </div>
        <div
          class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3"
        >
          <img src="images/features/AC.svg" width="80px" />
          <h5 class="mt-3">AC</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
          <a
            href="#"
            class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"
            >More Facilities>>></a
          >
        </div>
      </div>
    </div>
    <!-- Reach us -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
          <iframe
            class="w-100 rounded"
            height="320px"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.7912930102902!2d91.8722785!3d24.905099699999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552700bfdb4f%3A0x369ba0b482046794!2sAmbarkhana%2C%20Sylhet!5e0!3m2!1sen!2sbd!4v1668270379254!5m2!1sen!2sbd"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="bg-white p-4 rounded mb-4">
            <h5>Call us</h5>
            <a
              href="tel: +880821711013"
              class="d-inline-block mb-2 text-decoration-none text-dark"
            >
              <i class="bi bi-telephone-fill"></i> +880821711013
            </a>
            <br />
            <a
              href="tel: +8801784646565"
              class="d-inline-block mb-2 text-decoration-none text-dark"
            >
              <i class="bi bi-telephone-fill"></i> +8801784646565
            </a>
          </div>
          <div class="bg-white p-4 rounded mb-4">
            <h5>Follow us</h5>
            <a
              href="https://www.facebook.com/britanniahotelsylhet"
              class="d-inline-block mb-3"
            >
              <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-facebook me-1"></i> Facebook</span
              >
            </a>
            <br />
            <a
              href="https://www.instagram.com/britanniahotelsyl/"
              class="d-inline-block mb-3"
            >
              <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-instagram me-1"></i> Instagram</span
              >
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php require('inc/footer.php'); ?> 
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        // loop: true,
        //   autoplay: {
        //     delay: 3500,
        //     disableOnInteraction: false,
        //   }
        pagination: {
          el: ".swiper-pagination",
          type: "progressbar",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
  </body>
</html>
