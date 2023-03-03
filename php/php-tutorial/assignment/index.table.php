<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="shortcut icon" href="https://htmlstream.com/preview/front-v4.3.1/assets/svg/logos/logo.svg" type="image/x-icon">
</head>

<body>
    <table>
        <?php
        $tableFor = 3;
        for ($i = 1; $i <= 10; $i++) {
        ?>
            <tr>
                <td>
                    <?php
                    echo $tableFor . " x " . $i . " = " . ($tableFor * $i);
                    ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>