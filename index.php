<?php

    include 'connection/config.php';

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reservation</title>
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <style>
        @font-face {
            font-family: "roboto";
            src: url("assets/Roboto-Regular.ttf");
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: "roboto", sans-serif;
        }

        body {
            background: #f5f5f5;
        }

        .ncfl {
            width: 150px;
            height: auto;
        }

        .login_form {
            width: 400px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        }

        .ncfl {
            font-size: 14pt;
            /* color: #2b8a3e; */
        }

        .ncf {
            font-size: 11pt;
        }

        .nt {
            font-size: 11pt;
        }

        .nte {
            color: #c92a2a;
            font-size: 12pt;
        }

    </style>
    <body>
        <div class="login_form p-5 rounded">
            <div class="logo text-center mb-5">
                <img src="assets/ncfl_logo.png" alt="" class="ncfl img-fluid">
            </div>

            <div class="form">
                <div class="pa mb-3">
                    <h1 class="ncfl text-success">FOR NCFL</h1>
                    <p class="ncf">Login with your Portal Account.</p>
                </div>

                <form action="">
                    <div class="empId input-group mb-3">
                        <span class="input-group-text" id="user"><i class="fa-solid fa-user"></i></span>
                        <input type="text" name="emp_id" id="emp_id" aria-describedby="user" class="form-control" placeholder="Employee ID" required>
                    </div>

                    <div class="pass input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                    </div>

                    <div class="button mb-5">
                        <button type="submit" class="btn btn-success w-100">Login</button>
                    </div>

                    <div class="note">
                        <h3 class="nt"><b class="nte">Note</b>: <b>Please give your user password to IS personnel only.</b></h3>
                    </div>


                </form>
            </div>
        </div>
    </body>
</html>