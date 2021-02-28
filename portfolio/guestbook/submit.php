<?php
require ('includes/php-setup.php');
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <!-- Title -->
    <title>Thank You!</title>
    <!-- Favicon -->
    <link href="images/guestbook.png" type="image/png" rel="icon">

</head>
<body>
<?php
include('includes/nav.html');
?>
<div class="container justify-content-center" id="main">
    <div class="jumbotron">
        <h1 class="display-4">Cesar Escalona's Guestbook</h1>

        <p class="lead">The best way to keep in touch with professional contacts!</p>
        <hr class="my-4">
    </div> <!-- end of Jumbotron -->


<?php
/*
 * array(10) {
  ["fname"]=> string(5) "Cesar"
  ["lname"]=> string(8) "Escalona"
  ["jtitle"]=> string(6) "Farmer"
  ["company"]=> string(8) "Farm inc"
  ["url"]=> string(13) "https://g.com"
  ["email"]=> string(17) "email@example.com"
  ["met"]=> string(8) "Job Fair"
  ["other"]=> string(0) ""
  ["message"]=> string(7) "Yoooooo"
  ["method"]=> string(4) "html"
}


    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
*/

$first = $_POST['fname'];
$last = $_POST['lname'];
$jobTitle = $_POST['jtitle'];
$company = $_POST['company'];
$url = $_POST['url'];
$email = $_POST['email'];
$met = $_POST['met'];
$message = $_POST['message'];

$sql = "INSERT INTO guestbook VALUES ('$first', '$last', '$jobTitle', '$company', '$url', '$email', '$met', '$message', NULL)";
// echo $sql;

$success = mysqli_query($cnxn, $sql);
/*
if ($success) {
    echo "<h3>Thank you!</h3>";
} else {
    echo "Something went wrong";
}
*/


echo "
<div class=\"container text-center align-middle \"><br><br><br>
        <h1 class=\"display-4\">Thank you for connecting $first, we'll be in touch soon!</h1><br><br>

    </div>
  ";




?>

</div>
    <div class="container justify-content-center">
        <div class="text-muted text-center">
            <p class="mb-1">
                <a href="guestbook.php#" class="text-primary">Back to GuestBook</a>
            </p>
            &copy; Copyright 2021
        </footer>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="script/guestbook.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
    </body>