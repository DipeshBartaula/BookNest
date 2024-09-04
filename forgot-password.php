<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    href="./assests/css/bootstrap.min.css"
    rel="stylesheet" />
  <link rel="stylesheet" href="/css/style.css" />
  <title>Forgot-password | BookNest</title>
</head>

<body
  style="
      margin: 0;
      padding: 0;
      height: 100vh;
      background: linear-gradient(to right, #00dbde, #fc00ff);
    ">
  <div
    class="container d-flex align-items-center justify-content-center vh-100">
    <div class="row">
      <div class="col-md-12 login-form">
        <div class="card mb-3" style="max-width: 900px">
          <div class="row g-0">
            <div class="col-md-5">
              <img
                src="./assests/images/login-bg.jpg"
                class="img-fluid rounded-start"
                alt="..." />
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <h1 class="card-title text-uppercase fw-bold">BookNest</h1>
                <p class="card-text">
                  Enter your email to reset password
                </p>
                <form action="./reset-password.php">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input
                      type="email"
                      class="form-control"
                      id="exampleInputEmail1"
                      aria-describedby="emailHelp" />
                    <button
                      type="submit"
                      class="btn btn-primary mt-2">
                      Submit
                    </button>
                </form>
                <hr />
                <a
                  href="./index.php"
                  class="card-link link-underline-light">Cancel</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script
    src="./assests/js/bootstrap.bundle.min.js"></script>
  <script
    src="./assests/js/259c19a122.js"></script>
</body>

</html>