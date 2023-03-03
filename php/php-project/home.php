<?php require("./partials/navbar.html") ?>

<head>
    <style>
        .container-1 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 30px 20px;
            display: flex;
            justify-content: space-between;
            gap: 30px;
        }

        button {
            color: #ffffff;
            background-color: #ffad4a;
            padding: 16px 32px;
            font-size: 16px;
            font-weight: 600;
            border: 1px solid #ffad4a;
            border-radius: 16px;
            margin-bottom: 20px;

        }

        button:hover {
            color: #ffad4a;
            background-color: transparent;
            border: 1px solid #ffad4a;
        }
        .c1{
            max-width: 50%;
        }
    </style>
</head>

<div class="container-1">
    <div class="c1">
        <h1>Please Register to continue!!</h1>
        <a href="/register.formpage.php"><button type="submit">Go to Registration Page</button></a>
    </div>

    <div class="c1">

        <h2>If already registered, please head to login page!!</h2>
        <a href="/loginpage.php"><button type="submit">Go to LogIn Page</button></a>
    </div>

</div>