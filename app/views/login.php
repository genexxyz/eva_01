<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/maroon_theme.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body class="container bg-light" style=" font-family: Poppins; background-image: url('../public/resources/login_bg.png');  background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    <div class="container-fluid my-5">
        <div class="container d-flex justify-content-center align-items-center">
            <img src="../public\resources\logo.ico" style="height: 150px;" alt="">
            <h1 class="text-primary">Bulacan Polytechnic College</h1>
        </div>
    </div>
    <!-- Display error message if any -->
    <?php if (isset($_SESSION["errors"])) : ?>
        <?php $this->showAlert($_SESSION["errors"], 'danger'); ?>
        <?php unset($_SESSION["errors"]); // Clear the error message from session 
        ?>
    <?php endif; ?>
    <div class="container-fluid d-flex justify-content-center mb-5">
        <div class="row d-flex justify-content-center border border-primary" style="width: 70%; height: 450px;">
            <div class="col-lg-6 col-sm-12 bg-primary d-flex align-items-center">
                <div class="d-flex">
                    <i class="bi bi-bookmark-check h1 text-white"></i>
                    <div class="row">
                        <p class="text-white fs-4 fw-bold mt-2">Faculty Evaluation System</p>
                        <p class="text-white">1st Semester A.Y. 2023-2024</p>
                    </div>
                </div>
            </div>
            <div class="container col-lg-6 col-sm-12 bg-white">
                <div class="row">
                    <p class="mt-lg-5 mt-md-2 mb-lg-5 mb-sm-3 fs-5 w-100 text-center">Login</p>
                    <form class="" method="post" action=" ">
                        <div class="form-floating d-flex alight-content-center">
                            <i class="bi bi-person h1 text-primary" style="width:13%;"></i>
                            <input type="text" name="login_id" id="id" class="form-control mb-2" placeholder="e.g. MA1234567" />
                            <label class="form-label mx-5 mx-md-5" for="id">ID</label>
                        </div>
                        <div class="form-floating d-flex alight-content-center">
                            <i class="bi bi-lock h1 text-primary" style="width:13%;"></i>
                            <input type="password" name="login_pass" id="pass" class="form-control" placeholder="Password" />
                            <label class="form-label mx-5" for="pass">Password</label>
                        </div>
                        <button name="login_submit" class="col-12 btn btn-primary mt-4" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>