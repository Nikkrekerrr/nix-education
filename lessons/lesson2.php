
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
        .main-text {
            margin-top: 19%;
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

    //-----

    for ($n = "1"; $n <= "10"; $n++) {
        // место для условий

            // $n = 1
        if ($n == 1) {
            for ($i = "1"; $i <= "10"; $i++) {
                //место для условий

                    // $i = 1
                if ($i == 1) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: red'>" . $n . "</span>" . "x" . "<span style='color: red'>" . $i . "</span>" . "=" . "<span style='color: red'>" . $product[0] . "</span>" . "<br>";

                    // $i = 2
                } elseif ($i == 2) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: red'>" . $n . "</span>" . "x" . "<span style='color: green'>" . $i . "</span>" . "=" . "<span style='color: green'>" . $product[0] . "</span>" . "<br>";

                    // $i = 3
                } elseif ($i == 3) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: red'>" . $n . "</span>" . "x" . "<span style='color: yellow'>" . $i . "</span>" . "=" . "<span style='color: yellow'>" . $product[0] . "</span>" . "<br>";

                    // $i = 4
                } elseif ($i == 4) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: red'>" . $n . "</span>" . "x" . "<span style='color: blue'>" . $i . "</span>" . "=" . "<span style='color: blue'>" . $product[0] . "</span>" . "<br>";

                    // $i = 5
                } elseif ($i == 5) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: red'>" . $n . "</span>" . "x" . "<span style='color: darkgoldenrod'>" . $i . "</span>" . "=" . "<span style='color: darkgoldenrod'>" . $product[0] . "</span>" . "<br>";

                    // $i = 6
                } elseif ($i == 6) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: red'>" . $n . "</span>" . "x" . "<span style='color: firebrick'>" . $i . "</span>" . "=" . "<span style='color: firebrick'>" . $product[0] . "</span>" . "<br>";

                    // $i = 7
                } elseif ($i == 7) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: red'>" . $n . "</span>" . "x" . "<span style='color: purple'>" . $i . "</span>" . "=" . "<span style='color: purple'>" . $product[0] . "</span>" . "<br>";

                    // $i = 8
                } elseif ($i == 8) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: red'>" . $n . "</span>" . "x" . "<span style='color: aqua'>" . $i . "</span>" . "=" . "<span style='color: aqua'>" . $product[0] . "</span>" . "<br>";

                    // $i = 9
                } elseif ($i == 9) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: red'>" . $n . "</span>" . "x" . "<span style='color: silver'>" . $i . "</span>" . "=" . "<span style='color: silver'>" . $product[0] . "</span>" . "<br>";

                    // $i = 10
                } elseif ($i == 10) {
                    $product = $i * $n . "<br>";
                    $i = $i . "<br>";
                    $str .= "<span style='color: red'>" . $n . "</span>" . "x" . "<span style='color: red'>" . $i[0] . "</span>" . $i[1] . "=" . "<span style='color: red'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "<br>";
                }

            }

            // $n = 2
        } elseif ($n == 2) {
            for ($i = "1"; $i <= "10"; $i++) {
                //место для условий

                // $i = 1
                if ($i == 1) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: green'>" . $n . "</span>" . "x" . "<span style='color: red'>" . $i . "</span>" . "=" . "<span style='color: green'>" . $product[0] . "</span>" . "<br>";

                    // $i = 2
                } elseif ($i == 2) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: green'>" . $n . "</span>" . "x" . "<span style='color: green'>" . $i . "</span>" . "=" . "<span style='color: blue'>" . $product[0] . "</span>" . "<br>";

                    // $i = 3
                } elseif ($i == 3) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: green'>" . $n . "</span>" . "x" . "<span style='color: yellow'>" . $i . "</span>" . "=" . "<span style='color: firebrick'>" . $product[0] . "</span>" . "<br>";

                    // $i = 4
                } elseif ($i == 4) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: green'>" . $n . "</span>" . "x" . "<span style='color: blue'>" . $i . "</span>" . "=" . "<span style='color: blue'>" . $product[0] . "</span>" . "<br>";

                    // $i = 5
                } elseif ($i == 5) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: green'>" . $n . "</span>" . "x" . "<span style='color: darkgoldenrod'>" . $i . "</span>" . "=" . "<span style='color: red'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "<br>";;

                    // $i = 6
                } elseif ($i == 6) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: green'>" . $n . "</span>" . "x" . "<span style='color: firebrick'>" . $i . "</span>" . "=" . "<span style='color: red'>" . $product[0] . "</span>" . "<span style='color: green'>" . $product[1] . "</span>" . "<br>";;

                    // $i = 7
                } elseif ($i == 7) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: green'>" . $n . "</span>" . "x" . "<span style='color: purple'>" . $i . "</span>" . "=" . "<span style='color: red'>" . $product[0] . "</span>" . "<span style='color: blue'>" . $product[1] . "</span>" . "<br>";;

                    // $i = 8
                } elseif ($i == 8) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: green'>" . $n . "</span>" . "x" . "<span style='color: aqua'>" . $i . "</span>" . "=" . "<span style='color: red'>" . $product[0] . "</span>" . "<span style='color: firebrick'>" . $product[1] . "</span>" . "<br>";;

                    // $i = 9
                } elseif ($i == 9) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: green'>" . $n . "</span>" . "x" . "<span style='color: silver'>" . $i . "</span>" . "=" . "<span style='color: red'>" . $product[0] . "</span>" . "<span style='color: aqua'>" . $product[1] . "</span>" . "<br>";;

                    // $i = 10
                } elseif ($i == 10) {
                    $product = $i * $n . "<br>";
                    $i = $i . "<br>";
                    $str .= "<span style='color: green'>" . $n . "</span>" . "x" . "<span style='color: red'>" . $i[0] . "</span>" . $i[1] . "=" . "<span style='color: green'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "<br>";
                }

            }

            // $n = 3
        } elseif ($n == 3) {
            for ($i = "1"; $i <= "10"; $i++) {
                //место для условий

                // $i = 1
                if ($i == 1) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: yellow'>" . $n . "</span>" . "x" . "<span style='color: red'>" . $i . "</span>" . "=" . "<span style='color: yellow'>" . $product[0] . "</span>" . "<br>";

                    // $i = 2
                } elseif ($i == 2) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: yellow'>" . $n . "</span>" . "x" . "<span style='color: green'>" . $i . "</span>" . "=" . "<span style='color: firebrick'>" . $product[0] . "</span>" . "<br>";

                    // $i = 3
                } elseif ($i == 3) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: yellow'>" . $n . "</span>" . "x" . "<span style='color: yellow'>" . $i . "</span>" . "=" . "<span style='color: silver'>" . $product[0] . "</span>" . "<br>";

                    // $i = 4
                } elseif ($i == 4) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: yellow'>" . $n . "</span>" . "x" . "<span style='color: blue'>" . $i . "</span>" . "=" . "<span style='color: red'>" . $product[0] . "</span>" . "<span style='color: green'>" . $product[1] . "</span>" . "<br>";

                    // $i = 5
                } elseif ($i == 5) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: yellow'>" . $n . "</span>" . "x" . "<span style='color: darkgoldenrod'>" . $i . "</span>" . "=" . "<span style='color: red'>" . $product[0] . "</span>" . "<span style='color: darkgoldenrod'>" . $product[1] . "</span>" . "<br>";

                    // $i = 6
                } elseif ($i == 6) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: yellow'>" . $n . "</span>" . "x" . "<span style='color: firebrick'>" . $i . "</span>" . "=" . "<span style='color: red'>" . $product[0] . "</span>" . "<span style='color: aqua'>" . $product[1] . "</span>" . "<br>";

                    // $i = 7
                } elseif ($i == 7) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: yellow'>" . $n . "</span>" . "x" . "<span style='color: purple'>" . $i . "</span>" . "=" . "<span style='color: green'>" . $product[0] . "</span>" . "<span style='color: red'>" . $product[1] . "</span>" . "<br>";

                    // $i = 8
                } elseif ($i == 8) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: yellow'>" . $n . "</span>" . "x" . "<span style='color: aqua'>" . $i . "</span>" . "=" . "<span style='color: green'>" . $product[0] . "</span>" . "<span style='color: blue'>" . $product[1] . "</span>" . "<br>";

                    // $i = 9
                } elseif ($i == 9) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: yellow'>" . $n . "</span>" . "x" . "<span style='color: silver'>" . $i . "</span>" . "=" . "<span style='color: green'>" . $product[0] . "</span>" . "<span style='color: purple'>" . $product[1] . "</span>" . "<br>";

                    // $i = 10
                } elseif ($i == 10) {
                    $product = $i * $n . "<br>";
                    $i = $i . "<br>";
                    $str .= "<span style='color: yellow'>" . $n . "</span>" . "x" . "<span style='color: red'>" . $i[0] . "</span>" . $i[1] . "=" . "<span style='color: yellow'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "<br>";
                }

            }

            // $n = 4
        } elseif ($n == 4) {
            for ($i = "1"; $i <= "10"; $i++) {
                //место для условий

                // $i = 1
                if ($i == 1) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: blue'>" . $n . "</span>" . "x" . "<span style='color: red'>" . $i . "</span>" . "=" . "<span style='color: red'>" . $product[0] . "</span>" . "<br>";

                    // $i = 2
                } elseif ($i == 2) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: blue'>" . $n . "</span>" . "x" . "<span style='color: green'>" . $i . "</span>" . "=" . "<span style='color: green'>" . $product[0] . "</span>" . "<br>";

                    // $i = 3
                } elseif ($i == 3) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: blue'>" . $n . "</span>" . "x" . "<span style='color: yellow'>" . $i . "</span>" . "=" . "<span style='color: red'>" . $product[0] . "</span>" . "<span style='color: green'>" . $product[1] . "</span>" . "<br>";

                    // $i = 4
                } elseif ($i == 4) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: blue'>" . $n . "</span>" . "x" . "<span style='color: blue'>" . $i . "</span>" . "=" . "<span style='color: red'>" . $product[0] . "</span>" . "<span style='color: firebrick'>" . $product[1] . "</span>" . "<br>";

                    // $i = 5
                } elseif ($i == 5) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: blue'>" . $n . "</span>" . "x" . "<span style='color: darkgoldenrod'>" . $i . "</span>" . "=" . "<span style='color: green'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "<br>";

                    // $i = 6
                } elseif ($i == 6) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: blue'>" . $n . "</span>" . "x" . "<span style='color: firebrick'>" . $i . "</span>" . "=" . "<span style='color: green'>" . $product[0] . "</span>" . "<span style='color: blue'>" . $product[1] . "</span>" . "<br>";

                    // $i = 7
                } elseif ($i == 7) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: blue'>" . $n . "</span>" . "x" . "<span style='color: purple'>" . $i . "</span>" . "=" . "<span style='color: green'>" . $product[0] . "</span>" . "<span style='color: aqua'>" . $product[1] . "</span>" . "<br>";

                    // $i = 8
                } elseif ($i == 8) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: blue'>" . $n . "</span>" . "x" . "<span style='color: aqua'>" . $i . "</span>" . "=" . "<span style='color: yellow'>" . $product[0] . "</span>" . "<span style='color: green'>" . $product[1] . "</span>" . "<br>";

                    // $i = 9
                } elseif ($i == 9) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: blue'>" . $n . "</span>" . "x" . "<span style='color: silver'>" . $i . "</span>" . "=" . "<span style='color: yellow'>" . $product[0] . "</span>" . "<span style='color: firebrick'>" . $product[1] . "</span>" . "<br>";

                    // $i = 10
                } elseif ($i == 10) {
                    $product = $i * $n . "<br>";
                    $i = $i . "<br>";
                    $str .= "<span style='color: blue'>" . $n . "</span>" . "x" . "<span style='color: red'>" . $i[0] . "</span>" . $i[1] . "=" . "<span style='color: blue'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "<br>";
                }

            }

            // $n = 5
        } elseif ($n == 5) {
            for ($i = "1"; $i <= "10"; $i++) {
                //место для условий

                // $i = 1
                if ($i == 1) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: darkgoldenrod'>" . $n . "</span>" . "x" . "<span style='color: red'>" . $i . "</span>" . "=" . "<span style='color: red'>" . $product[0] . "</span>" . "<br>";

                    // $i = 2
                } elseif ($i == 2) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: darkgoldenrod'>" . $n . "</span>" . "x" . "<span style='color: green'>" . $i . "</span>" . "=" . "<span style='color: red'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "<br>";

                    // $i = 3
                } elseif ($i == 3) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: darkgoldenrod'>" . $n . "</span>" . "x" . "<span style='color: yellow'>" . $i . "</span>" . "=" . "<span style='color: red'>" . $product[0] . "</span>" . "<span style='color: darkgoldenrod'>" . $product[1] . "</span>" . "<br>";

                    // $i = 4
                } elseif ($i == 4) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: darkgoldenrod'>" . $n . "</span>" . "x" . "<span style='color: blue'>" . $i . "</span>" . "=" . "<span style='color: green'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "<br>";

                    // $i = 5
                } elseif ($i == 5) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: darkgoldenrod'>" . $n . "</span>" . "x" . "<span style='color: darkgoldenrod'>" . $i . "</span>" . "=" . "<span style='color: green'>" . $product[0] . "</span>" . "<span style='color: darkgoldenrod'>" . $product[1] . "</span>" . "<br>";

                    // $i = 6
                } elseif ($i == 6) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: darkgoldenrod'>" . $n . "</span>" . "x" . "<span style='color: firebrick'>" . $i . "</span>" . "=" . "<span style='color: yellow'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "<br>";

                    // $i = 7
                } elseif ($i == 7) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: darkgoldenrod'>" . $n . "</span>" . "x" . "<span style='color: purple'>" . $i . "</span>" . "=" . "<span style='color: yellow'>" . $product[0] . "</span>" . "<span style='color: darkgoldenrod'>" . $product[1] . "</span>" . "<br>";

                    // $i = 8
                } elseif ($i == 8) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: darkgoldenrod'>" . $n . "</span>" . "x" . "<span style='color: aqua'>" . $i . "</span>" . "=" . "<span style='color: blue'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "<br>";

                    // $i = 9
                } elseif ($i == 9) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: darkgoldenrod'>" . $n . "</span>" . "x" . "<span style='color: silver'>" . $i . "</span>" . "=" . "<span style='color: blue'>" . $product[0] . "</span>" . "<span style='color: darkgoldenrod'>" . $product[1] . "</span>" . "<br>";

                    // $i = 10
                } elseif ($i == 10) {
                    $product = $i * $n . "<br>";
                    $i = $i . "<br>";
                    $str .= "<span style='color: darkgoldenrod'>" . $n . "</span>" . "x" . "<span style='color: red'>" . $i[0] . "</span>" . $i[1] . "=" . "<span style='color: darkgoldenrod'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "<br>";
                }

            }

            // $n = 6
        } elseif ($n == 6) {
            for ($i = "1"; $i <= "10"; $i++) {
                //место для условий

                // $i = 1
                if ($i == 1) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: firebrick'>" . $n . "</span>" . "x" . "<span style='color: red'>" . $i . "</span>" . "=" . "<span style='color: firebrick'>" . $product[0] . "</span>" . "<br>";

                    // $i = 2
                } elseif ($i == 2) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: firebrick'>" . $n . "</span>" . "x" . "<span style='color: green'>" . $i . "</span>" . "=" . "<span style='color: red'>" . $product[0] . "</span>" . "<span style='color: green'>" . $product[1] . "</span>" . "<br>";

                    // $i = 3
                } elseif ($i == 3) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: firebrick'>" . $n . "</span>" . "x" . "<span style='color: yellow'>" . $i . "</span>" . "=" . "<span style='color: red'>" . $product[0] . "</span>" . "<span style='color: aqua'>" . $product[1] . "</span>" . "<br>";

                    // $i = 4
                } elseif ($i == 4) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: firebrick'>" . $n . "</span>" . "x" . "<span style='color: blue'>" . $i . "</span>" . "=" . "<span style='color: green'>" . $product[0] . "</span>" . "<span style='color: blue'>" . $product[1] . "</span>" . "<br>";

                    // $i = 5
                } elseif ($i == 5) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: firebrick'>" . $n . "</span>" . "x" . "<span style='color: darkgoldenrod'>" . $i . "</span>" . "=" . "<span style='color: yellow'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "<br>";

                    // $i = 6
                } elseif ($i == 6) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: firebrick'>" . $n . "</span>" . "x" . "<span style='color: firebrick'>" . $i . "</span>" . "=" . "<span style='color: yellow'>" . $product[0] . "</span>" . "<span style='color: firebrick'>" . $product[1] . "</span>" . "<br>";

                    // $i = 7
                } elseif ($i == 7) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: firebrick'>" . $n . "</span>" . "x" . "<span style='color: purple'>" . $i . "</span>" . "=" . "<span style='color: blue'>" . $product[0] . "</span>" . "<span style='color: green'>" . $product[1] . "</span>" . "<br>";

                    // $i = 8
                } elseif ($i == 8) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: firebrick'>" . $n . "</span>" . "x" . "<span style='color: aqua'>" . $i . "</span>" . "=" . "<span style='color: blue'>" . $product[0] . "</span>" . "<span style='color: aqua'>" . $product[1] . "</span>" . "<br>";

                    // $i = 9
                } elseif ($i == 9) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: firebrick'>" . $n . "</span>" . "x" . "<span style='color: silver'>" . $i . "</span>" . "=" . "<span style='color: darkgoldenrod'>" . $product[0] . "</span>" . "<span style='color: blue'>" . $product[1] . "</span>" . "<br>";

                    // $i = 10
                } elseif ($i == 10) {
                    $product = $i * $n . "<br>";
                    $i = $i . "<br>";
                    $str .= "<span style='color: firebrick'>" . $n . "</span>" . "x" . "<span style='color: red'>" . $i[0] . "</span>" . $i[1] . "=" . "<span style='color: firebrick'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "<br>";
                }

            }

            // $n = 7
        } elseif ($n == 7) {
            for ($i = "1"; $i <= "10"; $i++) {
                //место для условий

                // $i = 1
                if ($i == 1) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: purple'>" . $n . "</span>" . "x" . "<span style='color: red'>" . $i . "</span>" . "=" . "<span style='color: purple'>" . $product[0] . "</span>" . "<br>";

                    // $i = 2
                } elseif ($i == 2) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: purple'>" . $n . "</span>" . "x" . "<span style='color: green'>" . $i . "</span>" . "=" . "<span style='color: red'>" . $product[0] . "</span>" . "<span style='color: blue'>" . $product[1] . "</span>" . "<br>";

                    // $i = 3
                } elseif ($i == 3) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: purple'>" . $n . "</span>" . "x" . "<span style='color: yellow'>" . $i . "</span>" . "=" . "<span style='color: green'>" . $product[0] . "</span>" . "<span style='color: red'>" . $product[1] . "</span>" . "<br>";

                    // $i = 4
                } elseif ($i == 4) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: purple'>" . $n . "</span>" . "x" . "<span style='color: blue'>" . $i . "</span>" . "=" . "<span style='color: green'>" . $product[0] . "</span>" . "<span style='color: aqua'>" . $product[1] . "</span>" . "<br>";

                    // $i = 5
                } elseif ($i == 5) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: purple'>" . $n . "</span>" . "x" . "<span style='color: darkgoldenrod'>" . $i . "</span>" . "=" . "<span style='color: yellow'>" . $product[0] . "</span>" . "<span style='color: darkgoldenrod'>" . $product[1] . "</span>" . "<br>";

                    // $i = 6
                } elseif ($i == 6) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: purple'>" . $n . "</span>" . "x" . "<span style='color: firebrick'>" . $i . "</span>" . "=" . "<span style='color: blue'>" . $product[0] . "</span>" . "<span style='color: green'>" . $product[1] . "</span>" . "<br>";

                    // $i = 7
                } elseif ($i == 7) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: purple'>" . $n . "</span>" . "x" . "<span style='color: purple'>" . $i . "</span>" . "=" . "<span style='color: blue'>" . $product[0] . "</span>" . "<span style='color: silver'>" . $product[1] . "</span>" . "<br>";

                    // $i = 8
                } elseif ($i == 8) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: purple'>" . $n . "</span>" . "x" . "<span style='color: aqua'>" . $i . "</span>" . "=" . "<span style='color: darkgoldenrod'>" . $product[0] . "</span>" . "<span style='color: firebrick'>" . $product[1] . "</span>" . "<br>";

                    // $i = 9
                } elseif ($i == 9) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: purple'>" . $n . "</span>" . "x" . "<span style='color: silver'>" . $i . "</span>" . "=" . "<span style='color: firebrick'>" . $product[0] . "</span>" . "<span style='color: yellow'>" . $product[1] . "</span>" . "<br>";

                    // $i = 10
                } elseif ($i == 10) {
                    $product = $i * $n . "<br>";
                    $i = $i . "<br>";
                    $str .= "<span style='color: purple'>" . $n . "</span>" . "x" . "<span style='color: red'>" . $i[0] . "</span>" . $i[1] . "=" . "<span style='color: purple'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "<br>";
                }

            }

            // $n = 8
        } elseif ($n == 8) {
            for ($i = "1"; $i <= "10"; $i++) {
                //место для условий

                // $i = 1
                if ($i == 1) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: aqua'>" . $n . "</span>" . "x" . "<span style='color: red'>" . $i . "</span>" . "=" . "<span style='color: aqua'>" . $product[0] . "</span>" . "<br>";

                    // $i = 2
                } elseif ($i == 2) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: aqua'>" . $n . "</span>" . "x" . "<span style='color: green'>" . $i . "</span>" . "=" . "<span style='color: red'>" . $product[0] . "</span>" . "<span style='color: firebrick'>" . $product[1] . "</span>" . "<br>";

                    // $i = 3
                } elseif ($i == 3) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: aqua'>" . $n . "</span>" . "x" . "<span style='color: yellow'>" . $i . "</span>" . "=" . "<span style='color: green'>" . $product[0] . "</span>" . "<span style='color: blue'>" . $product[1] . "</span>" . "<br>";

                    // $i = 4
                } elseif ($i == 4) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: aqua'>" . $n . "</span>" . "x" . "<span style='color: blue'>" . $i . "</span>" . "=" . "<span style='color: yellow'>" . $product[0] . "</span>" . "<span style='color: green'>" . $product[1] . "</span>" . "<br>";

                    // $i = 5
                } elseif ($i == 5) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: aqua'>" . $n . "</span>" . "x" . "<span style='color: darkgoldenrod'>" . $i . "</span>" . "=" . "<span style='color: blue'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "<br>";

                    // $i = 6
                } elseif ($i == 6) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: aqua'>" . $n . "</span>" . "x" . "<span style='color: firebrick'>" . $i . "</span>" . "=" . "<span style='color: blue'>" . $product[0] . "</span>" . "<span style='color: aqua'>" . $product[1] . "</span>" . "<br>";

                    // $i = 7
                } elseif ($i == 7) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: aqua'>" . $n . "</span>" . "x" . "<span style='color: purple'>" . $i . "</span>" . "=" . "<span style='color: darkgoldenrod'>" . $product[0] . "</span>" . "<span style='color: firebrick'>" . $product[1] . "</span>" . "<br>";

                    // $i = 8
                } elseif ($i == 8) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: aqua'>" . $n . "</span>" . "x" . "<span style='color: aqua'>" . $i . "</span>" . "=" . "<span style='color: firebrick'>" . $product[0] . "</span>" . "<span style='color: blue'>" . $product[1] . "</span>" . "<br>";

                    // $i = 9
                } elseif ($i == 9) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: aqua'>" . $n . "</span>" . "x" . "<span style='color: silver'>" . $i . "</span>" . "=" . "<span style='color: purple'>" . $product[0] . "</span>" . "<span style='color: green'>" . $product[1] . "</span>" . "<br>";

                    // $i = 10
                } elseif ($i == 10) {
                    $product = $i * $n . "<br>";
                    $i = $i . "<br>";
                    $str .= "<span style='color: aqua'>" . $n . "</span>" . "x" . "<span style='color: red'>" . $i[0] . "</span>" . $i[1] . "=" . "<span style='color: aqua'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "<br>";
                }

            }

            // $n = 9
        } elseif ($n == 9) {
            for ($i = "1"; $i <= "10"; $i++) {
                //место для условий

                // $i = 1
                if ($i == 1) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: silver'>" . $n . "</span>" . "x" . "<span style='color: red'>" . $i . "</span>" . "=" . "<span style='color: aqua'>" . $product[0] . "</span>" . "<br>";

                    // $i = 2
                } elseif ($i == 2) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: silver'>" . $n . "</span>" . "x" . "<span style='color: green'>" . $i . "</span>" . "=" . "<span style='color: red'>" . $product[0] . "</span>" . "<span style='color: aqua'>" . $product[1] . "</span>" . "<br>";

                    // $i = 3
                } elseif ($i == 3) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: silver'>" . $n . "</span>" . "x" . "<span style='color: yellow'>" . $i . "</span>" . "=" . "<span style='color: green'>" . $product[0] . "</span>" . "<span style='color: silver'>" . $product[1] . "</span>" . "<br>";

                    // $i = 4
                } elseif ($i == 4) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: silver'>" . $n . "</span>" . "x" . "<span style='color: blue'>" . $i . "</span>" . "=" . "<span style='color: yellow'>" . $product[0] . "</span>" . "<span style='color: firebrick'>" . $product[1] . "</span>" . "<br>";

                    // $i = 5
                } elseif ($i == 5) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: silver'>" . $n . "</span>" . "x" . "<span style='color: darkgoldenrod'>" . $i . "</span>" . "=" . "<span style='color: blue'>" . $product[0] . "</span>" . "<span style='color: darkgoldenrod'>" . $product[1] . "</span>" . "<br>";

                    // $i = 6
                } elseif ($i == 6) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: silver'>" . $n . "</span>" . "x" . "<span style='color: firebrick'>" . $i . "</span>" . "=" . "<span style='color: darkgoldenrod'>" . $product[0] . "</span>" . "<span style='color: blue'>" . $product[1] . "</span>" . "<br>";

                    // $i = 7
                } elseif ($i == 7) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: silver'>" . $n . "</span>" . "x" . "<span style='color: purple'>" . $i . "</span>" . "=" . "<span style='color: firebrick'>" . $product[0] . "</span>" . "<span style='color: yellow'>" . $product[1] . "</span>" . "<br>";

                    // $i = 8
                } elseif ($i == 8) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: silver'>" . $n . "</span>" . "x" . "<span style='color: aqua'>" . $i . "</span>" . "=" . "<span style='color: purple'>" . $product[0] . "</span>" . "<span style='color: green'>" . $product[1] . "</span>" . "<br>";

                    // $i = 9
                } elseif ($i == 9) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: silver'>" . $n . "</span>" . "x" . "<span style='color: silver'>" . $i . "</span>" . "=" . "<span style='color: aqua'>" . $product[0] . "</span>" . "<span style='color: red'>" . $product[1] . "</span>" . "<br>";

                    // $i = 10
                } elseif ($i == 10) {
                    $product = $i * $n . "<br>";
                    $i = $i . "<br>";
                    $str .= "<span style='color: silver'>" . $n . "</span>" . "x" . "<span style='color: red'>" . $i[0] . "</span>" . $i[1] . "=" . "<span style='color: silver'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "<br>";
                }

            }

            // $n = 10
        } elseif ($n == 10) {
            for ($i = "1"; $i <= "10"; $i++) {
                //место для условий

                // $i = 1
                if ($i == 1) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: red'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "x" . "<span style='color: red'>" . $i . "</span>" . "=" . "<span style='color: red'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "<br>";

                    // $i = 2
                } elseif ($i == 2) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: green'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "x" . "<span style='color: green'>" . $i . "</span>" . "=" . "<span style='color: green'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "<br>";

                    // $i = 3
                } elseif ($i == 3) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: yellow'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "x" . "<span style='color: yellow'>" . $i . "</span>" . "=" . "<span style='color: yellow'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "<br>";

                    // $i = 4
                } elseif ($i == 4) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: blue'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "x" . "<span style='color: blue'>" . $i . "</span>" . "=" . "<span style='color: blue'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "<br>";

                    // $i = 5
                } elseif ($i == 5) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: darkgoldenrod'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "x" . "<span style='color: darkgoldenrod'>" . $i . "</span>" . "=" . "<span style='color: darkgoldenrod'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "<br>";

                    // $i = 6
                } elseif ($i == 6) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: firebrick'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "x" . "<span style='color: firebrick'>" . $i . "</span>" . "=" . "<span style='color: firebrick'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "<br>";

                    // $i = 7
                } elseif ($i == 7) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: purple'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "x" . "<span style='color: purple'>" . $i . "</span>" . "=" . "<span style='color: purple'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "<br>";

                    // $i = 8
                } elseif ($i == 8) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: aqua'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "x" . "<span style='color: aqua'>" . $i . "</span>" . "=" . "<span style='color: aqua'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "<br>";

                    // $i = 9
                } elseif ($i == 9) {
                    $product = $i * $n . "<br>";
                    $str .= "<span style='color: silver'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "x" . "<span style='color: silver'>" . $i . "</span>" . "=" . "<span style='color: silver'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "<br>";

                    // $i = 10
                } elseif ($i == 10) {
                    $product = $i * $n . "<br>";
                    $i = $i . "<br>";
                    $str .= "<span style='color: red'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "x" . "<span style='color: red'>" . $i[0] . "</span>" . $i[1] . "=" . "<span style='color: red'>" . $product[0] . "</span>" . "<span style='color: black'>" . $product[1] . "</span>" . "<span style='color: black'>" . $product[2] . "</span>" . "<br>";
                }

            }
        }

    //-----
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