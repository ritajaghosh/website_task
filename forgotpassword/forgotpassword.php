<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body class="body">

  <div class="container-fluid d-flex justify-content-center align-items-center">
    <div class="row shadow-lg rounded-4 overflow-hidden w-100">

      <!-- Left Side: Background Image --
      <div class="col-md-6 bg-image d-none d-md-block"></div>

      <!-- Right Side: Sign Up Form -->
      <div class="col-md-6 form-container">
        <h3 class="mb-4 fw-bold">Set New Password</h3>
        <form id="fpassword">
          <div class="mb-3 form-field">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" placeholder="Name..." id="fname" required>
          </div>
          <div class=" form-field mb-3">
            <label class="form-label">Date of Birth</label>
            <input type="date" class="form-control" placeholder="**********" id="db" required>
          </div>
          <div class="mb-3 form-field ">
            <label class="form-label">What is your childhood name?</label>
            <input type="name" class="form-control" placeholder="**********" id="childhood" required>
          </div>
          <div class="mb-3 form-field ">
            <label class="form-label">What is your school name?</label>
            <input type="nanme" class="form-control" placeholder="**********" id="school" required>
          </div>
          <div class="mb-3 form-field ">
            <label class="form-label">Email</label>
            <input type="email" class="form-controlname/" placeholder="Email address..." id="mailid" required>
          </div>

          <div class="mb-3 form-field ">
            <label class="form-label">Set new password</label>
            <input type="password" class="form-control" placeholder="**********" id="pass" required>
          </div>
          <div class="mb-3 form-field ">
            <label class="form-label">Confirm new password</label>
            <input type="password" class="form-control" placeholder="**********" id="confirm" required>
          </div>

          <div class="form-check mb-3 form-field ">
            <input class="form-check-input" type="checkbox" required>
            <label class="form-check-label">
              I agree to the <a href="#">Terms of User</a>
            </label>
          </div>
          <div class="d-grid mb-2">
            <button type="submit" class="btn btn-gradient">Confirm</button>
          </div>
          <div class="text-end">

          </div>
        </form>
      </div>


    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    $('#fpassword').on('submit', function (event) {
      event.preventDefault();
      
      let name = $("#fname").val();
      let dob = $("#db").val();
      let childhood = $("#childhood").val();
      let school = $("#school").val();
      let email = $("#mailid").val();
      let pass = $("#pass").val();
      let confirm = $("#confirm").val();
      console.log(name, dob, childhood, school, email, pass, confirm);;
      $.ajax({
        type: "post",
        url: "changepassword.php",
        data: {
          name: name,
          dob: dob,
          childhood: childhood,
          school: school,
          mailid: mailid,
          pass: pass,
          confirm: confirm,

        },
        success: function (response) {
          alert(response);

        },
        error: function (xhr, status, error) {
          console.error(error);

        }

      });
    });

  </script>
</body>

</html>