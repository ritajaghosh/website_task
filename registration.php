<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign Up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body, html {
      height: 100%;
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
    }

    .container-fluid {
      height: 100vh;
    }

    .bg-image {
      background: linear-gradient(
          rgba(220, 0, 140, 0.5),
          rgba(76, 0, 130, 0.5)
        ),
        url('assets/ritaja10');
      background-size: cover;
      background-position: center;
      border-radius: 0 0.5rem 0.5rem 0;
    }

    .form-container {
      background-color: #fff;
      padding: 3rem;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      border-radius: 0.5rem 0 0 0.5rem;
    }

    .btn-gradient {
      background: linear-gradient(135deg, #ff6ec4, #7873f5);
      color: #fff;
      border: none;
    }

    .btn-gradient:hover {
      opacity: 0.9;
    }

    .form-check-label a {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      .bg-image {
        display: none;
      }

      .form-container {
        border-radius: 0.5rem;
      }
    }
  </style>
</head>
<body>

  <div class="container-fluid d-flex justify-content-center align-items-center">
    <div class="row shadow-lg rounded-4 overflow-hidden w-100" style="max-width: 1000px;">

      <!-- Left Side: Background Image -->
      <div class="col-md-6 bg-image d-none d-md-block"></div>

      <!-- Right Side: Sign Up Form -->
      <div class="col-md-6 form-container">
        <h3 class="mb-4 fw-bold">Sign Up</h3>
        <form>
          <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" placeholder="Name..." required>
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="Email address..." required>
          </div>
          <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" placeholder="Username..." required>
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="**********" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Repeat Password</label>
            <input type="password" class="form-control" placeholder="**********" required>
          </div>
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" required>
            <label class="form-check-label">
              I agree to the <a href="#">Terms of User</a>
            </label>
          </div>
          <div class="d-grid mb-2">
            <button type="submit" class="btn btn-gradient">Sign Up</button>
          </div>
          <div class="text-end">
            <a href="#">Sign in →</a>
          </div>
        </form>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

