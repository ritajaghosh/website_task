<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">

</head>

<body class="body">

  <div class="container-fluid d-flex justify-content-center align-items-center ">
    <div class="row shadow-lg rounded-4  w-100 h-100 ">
      <div class="col-md-6 form-container">
        <h3 class="mb-4 fw-bold">Sign Up</h3>
        <form id="registrationform">
          <div class="mb-3 form-field">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" placeholder="Name..." id="name">
          </div>
          <div class=" form-field mb-3">
            <label class="form-label">Date of Birth</label>
            <input type="date" class="form-control" placeholder="**********" id="dob">
          </div>
          <div class="mb-3 form-field ">
            <label class="form-label">What is your childhood name?</label>
            <input type="text" class="form-control" placeholder="**********" id="cname">
          </div>
          <div class="mb-3 form-field ">
            <label class="form-label">What is your school name?</label>
            <input type="text" class="form-control" placeholder="**********" id="schname">
          </div>
          <div class="mb-3 form-field ">
            <label class="form-label">Email</label>
            <input type="email" class="form-controlname/" placeholder="Email address..." id="email">
          </div>
          <div class="mb-3 form-field ">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" placeholder="Username..." id="username">
          </div>
          <div class="mb-3 form-field ">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="**********" id="password">
          </div>
          <div class="mb-3 form-field ">
            <label class="form-label">Repeat Password</label>
            <input type="password" class="form-control" placeholder="**********" id="rpassword">
          </div>
          <div class="mb-3 form-field ">
            <label class="form-label"></label>
            <input type="password" class="form-control" placeholder="**********" id="conpassword">
          </div>
          <div class="form-check mb-3 form-field ">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">
              I agree to the <a href="#">Terms of User</a>
            </label>
          </div>
          <div class="d-grid mb-2">
            <button type="submit" class="btn btn-gradient">Sign Up</button>
          </div>
          <div class="text-end">

          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <script>
    $('#registrationform').on('submit', function (event) {
      event.preventDefault();

      let name = $("#name").val();
      let dob = $("#dob").val();
      let cname = $("#cname").val();
      let schname = $("#schname").val();
      let email = $("#email").val();
      let username = $("#username").val();
      let password = $("#password").val();
      let rpassword = $("#rpassword").val();
      console.log(name, dob, cname, schname, email, username, password, rpassword);
      if (password == rpassword) {
        $.ajax({
          type: "post",
          url: "register.php",
          data: {
            name: name,
            dob: dob,
            cname: cname,
            schname: schname,
            email: email,
            username: username,
            password: password,
            
          },
          success: function (response) {
           alert("Welcome");
          },
          error: function (xhr, status, error) {
            console.error(error);

          }

        });
      }else{
        alert("password does not match");
      }
    });


  </script>
</body>

</html>