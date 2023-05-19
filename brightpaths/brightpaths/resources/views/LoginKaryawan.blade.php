<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laman Login dan registrasi</title>
    <link rel="stylesheet" href="style2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<div></div>
<body>
<div class="background"></div>
    <div class="container">
        <div class="content">
            <h2 class="logo"><i class='bx bx-shield-plus' ></i>Brightpath</h2>
            <div class="text-sci">
              <h2>HII DEAR! <br><span> Wellcome To BrightPath.</span> </h2>

              <p> Trusted Cleaner Anytime, Anywhere. Brightpath Connects You With Our Housekeeper Professionals Near You.
                  <br> Don’t Stress. We’ll Handle The Mess!</p>
                <div class="social-icons">
                    <a href="#"><i class='bx bxl-instagram' ></i></a>
                    <a href="#"><i class='bx bxl-twitter' ></i></a>
                    <a href="#"><i class='bx bxl-facebook' ></i></a>
                    <a href="#"><i class='bx bx-link'></i></a>
                </div>

        </div>


        </div>

        <div class="logreg-box">
            <div class="form-box login">
                <form action="/authK" method="post">
                    @csrf
                    <h2>Log in</h2>
                        <div class="input-box">
                        <span class="icon">
                            <i class='bx bxs-lock-alt' ></i>
                        </span>
                        <input type="username"  name = "email" required>
                        <label>email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon">
                            <i class='bx bxs-lock-alt' ></i>
                        </span>
                        <input type="password"  name = "pass" required>
                        <label>password</label>
                    </div>


                    <div class="remember-forgot">
                        <label><input type="checkbox">remember me</label>
                        <a href="#">forgot password? </a>

                    </div>

                <button type="submit" name = "Submit" value = "Submit"class="btn">Login</button>

                <div class="login-register"><p>don't have an account? <a href="/Signin" class="register-link">Sign in</a> </p></div>


                </form>

            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
