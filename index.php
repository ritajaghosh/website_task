
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cascadia+Code:ital,wght@0,200..700;1,200..700&display=swap" rel="stylesheet">
       
        <title>Website Task</title>
        
    </head>

<body id="index">

    <div class="main-div">


        <div class="container">
            <form class="p-3" id="login-form"> 
                 <div class="form-field mb-3">
                    <label for="user-id" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="user-id" aria-describedby="emailHelp" name="email">
                </div>

                <div class="form-field mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-field mb-3">
                   
                    <button type="submit" id="submit">Login</button>
                </div>


                <div class="form-field extra" >
                    <span><a href="./forgotpassword/forgotpassword.php">Forgot password?</a></span>
                    <span><a href="./Register/registration.php">New User?Welcome</a></span>

                </div>

               <!-- <div class="extra form-field mb-3">
                    <span>Forgot Password</span>
                    <span>New User</span>
                </div>

                <button type="submit" class="btn btn-primary">Log in</button> -->
            </form>
        </div>

        <!-- <div class="container col-3">
            
        </div> -->

    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
       $('#login-form').on('submit',function (event) {
            event.preventDefault();
        email=$('#user-id').val();
        password=$('#password').val();
        // alert("Hi");
        $.ajax({
            type: "post",
            url: "checkusers.php",
            data: {
                useremail:email,
                userpassword:password

            },
            success: function(response)
            {
                alert(response);
                
                response=JSON.parse(response);
                if(response.status===true){
                    alert("hi");
                    location.href="entry.php";
                }else{
                    alert("does not exist");
                }

            }
        });    
       });
    </script>
        
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>