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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Cesar Escalona</title>

<body>
<?php
include('includes/nav.html');
?>

<main>
    <section class="py-5 text-center container justify-content-center bg-light">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h2 class="fw-light display-4"><strong>Cesar Escalona</strong></h2>
                <img src="images/cesar.jpg" alt="Business" class="img-fluid">
                <p class="lead text-muted">Passionate Software Developer located in Seattle,
                    looking for a Summer internship at a company creating JAVA applications</p>
            </div> <!-- Main-->


            <div class="container text-left py-5">
                <h2 class="font-weight-bold">Education</h2>
                <div class="row">
                    <div class="col">
                <h5>Bachelor of Applied Science</h5>
                <p>Green River College <br> 2020-Present</p>
            </div>
                    <div class="col">
            <div class="container text-left">
            <h5>Associate of Arts Degree</h5>
            <p>Green River College <br> 2018-2020</p>
            </div>
                    </div>
             </div> <!-- Education-->


            <h2 class="font-weight-bold">Skills & Certifications</h2>
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <strong>Languages</strong>
                        <ul>
                        <li>Java</li>
                        <li>PHP</li>
                        <li>SQL</li>
                        <li>JavaScript</li>
                        <li>Python</li>
                        </ul>
                    </div>
                    <div class="col-sm">
                        <strong>Web</strong>
                        <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>BootStrap</li>
                        </ul>
                    </div>
                    <div class="col-sm">
                        <strong>Tools</strong>
                        <ul>
                        <li>JGrasp</li>
                        <li>PhpStorm</li>
                        <li>IntelliJ</li>
                        <li>Trello</li>
                        <li>Repl.it</li>
                        </ul>
                    </div>
                </div>
            </div> <!-- Skills-->

                <div class="container py-3">
                <h2 class="font-weight-bold">Experience</h2>
                    <div class="row">
                        <div class="col">
                            <h5>Coneybeare Sustainability Company</h5>
                        </div>
                        <div class="col text-center">
                            <h5>Jan - Present</h5>
                        </div>
                    </div>
                    <ul>
                    <li>Building a sustainability website for a client that features a searchable database of green companies</li>
                    <li>The site is built using BootStrap, PHP, HTML, CSS, and JavaScript</li>
                    <li>Working in two week sprints with a SCRUM team of 4 to deliver results</li>
                    <li>Using Trello for organization and efficiency </li>
                    </ul>
                </div> <!-- Experience-->


          </div>
        </div>
    </section>
</main>
<footer class="text-muted text-center">
    <p class="mb-1">
        <a href="#" class="text-primary">Back to top</a>
    </p>
    &copy; Copyright 2021
</footer>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
-->
</body>
</html>