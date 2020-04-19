<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .footer, .navbar {
            background-color: whitesmoke;
        }
    </style>
</head>
<body>
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/">
            <img src="../img/Xlogo.png" width="30" height="30" class="d-inline-block align-top" alt="logo">
            Education
        </a>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="lesson1.php">Lesson 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lesson2.php">Lesson 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lesson3.php">Lesson 3</a>
                </li>
            </ul>
            <span class="navbar-text">
                Tasks for nixEducation
            </span>
        </div>
    </nav>
</header>
<main class="p-3">
    <?php

        $array = [];
        for ($n = 1; $n <= 10; $n++) {
            for ($i = 1; $i <= 10; $i++) {
                $str .= $n . "x" . $i . "=" . $i * $n . "<br>";
            }
            $str .= "|||";
            if ($n == 5) {
                $str .= "$$$";
            }
        }

        $tr = explode("$$$", $str);

        $columns1_5 = explode("|||", $tr[0]);
        array_pop($columns1_5);
        $columns6_10 = explode("|||", $tr[1]);
        array_pop($columns6_10);

    ?>

    <table border="1" width="20%" cellpadding="5">
        <tr>
            <?php foreach($columns1_5 as $value): ?> <? echo "<td>" . $value . "</td>"; ?> <? endforeach; ?>
        </tr>
        <tr>
            <?php foreach($columns6_10 as $value): ?> <? echo "<td>" . $value . "</td>"; ?> <? endforeach; ?>
        </tr>
    </table>
</main>
<footer class="footer mt-auto py-3 fixed-bottom">
    <div class="container">
        <span class="text-muted">all rights reserved@.</span>
    </div>
</footer>
</body>
</html>