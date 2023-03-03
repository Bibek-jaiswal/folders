<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-php</title>
    <style>
        *{
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }
        .container{
            max-width: 1140px;
            margin: 0 auto;
            padding: 0px 30px;
        }
        nav{
            background-color: gray;
            padding: 30px;
        }
        nav ul{
            display: flex;
            gap: 40px;
            align-items: center;
        }
        li, a{
            text-decoration: none;
            list-style: none;
            color: #ffffff;
            font-size: 24px;
            line-height: 36px;
            font-weight: 600;
            
        }
        a.active{
            background-color:#DFDFDF ;
            color: #7E7272;
        }
        a:hover{
            color: #000000;
        }
       table{
        width: 100%;
        text-align: center;
        border: 1px solid #000000;
        border-collapse: collapse;

        }
        th,td{
            border: 1px solid #000000;
        }
       
    </style>
</head>
<body>
    <header>
       
    <nav>
    <div class="container">
        <ul class="list">
            <li>  <a href="/">  Home</a></li>
            <li>  <a href="/index.about.php">  About</a></li>
            <li>  <a href="/index.contact.php">  Contact</a></li>
            <li>  <a href="/index.miscellaneous.php"> Miscellaneous</a> </li>
        </ul>
    </div>

    </nav>
    </header>
    <div class="container">

    <h2>Hello There! It's the Home page.</h2>

        </div>
</body>
</html>