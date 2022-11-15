<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Britannia Hotel - Contact</title>
    <?php require('inc/links.php'); ?>
  </head>
  <body class="bg-light">
    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
      <h2 class="fw-bold h-font text-center">Contact Us</h2>
      <div class="h-line bg-dark"></div>
      <p class="text-center mt-3">
        We provide the best service with best price where you can feel homely
      </p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 mb-5 px-4">
          <div class="bg-white rounded shadow p-4">
            <iframe
              class="w-100 rounded mb-4"
              height="320px"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.7912930102902!2d91.8722785!3d24.905099699999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552700bfdb4f%3A0x369ba0b482046794!2sAmbarkhana%2C%20Sylhet!5e0!3m2!1sen!2sbd!4v1668270379254!5m2!1sen!2sbd"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
            <h5>Address</h5>
            <a
              href="https://goo.gl/maps/2ir8UPUc3QfG6zCa8"
              target="_blank"
              class="d-inline-block text-decoration-none text-dark mb-2"
            >
              <i class="bi bi-geo-alt-fill"></i>B-95 Waves Point, Hazrat
              Shahjalal Rd, Amberkhana, Sylhet 3100
            </a>
            <h5 class="mt-4">Call us</h5>
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
            <h5 class="mt-4">Follow us</h5>
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
        <div class="col-lg-6 col-md-6 px-4">
          <div class="bg-white rounded shadow p-4">
            <form>
              <h5>Send a message</h5>
              <div class="mt-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control shadow-none" />
              </div>
              <div class="mt-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control shadow-none" />
              </div>
              <div class="mt-3">
                <label class="form-label">Subject</label>
                <input type="text" class="form-control shadow-none" />
              </div>
              <div class="mt-3">
                <label class="form-label">Message</label>
                <textarea
                  class="form-control shadow-none"
                  rows="5"
                  style="resize: none"
                ></textarea>
              </div>
              <button type="button" class="btn text-white custom-bg mt-3">
                Send
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php require('inc/footer.php'); ?>
  </body>
</html>
