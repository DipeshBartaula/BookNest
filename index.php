<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    href="./assests/css/bootstrap.min.css"
    rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css" />
  <title>Login | BookNest</title>
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
                  Enter your email and password to login
                </p>
                <form action="./dashboard.php">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input
                      type="email"
                      class="form-control"
                      id="exampleInputEmail1"
                      aria-describedby="emailHelp" />
                    <div id="emailHelp" class="form-text">
                      We'll never share your email with anyone else.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input
                      type="password"
                      class="form-control"
                      id="exampleInputPassword1" />
                  </div>
                  <button
                    style="
                        background: linear-gradient(to right, #00dbde, #fc00ff);
                      "
                    type="submit"
                    class="btn btn-primary">
                    Login
                  </button>
                </form>
                <hr />
                <a
                  href="./forgot-password.php"
                  class="card-link link-underline-light">Forgot password?</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script
    src="./assests/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script
    src="./assests/js/259c19a122.js"
    crossorigin="anonymous"></script>
</body>

</html>