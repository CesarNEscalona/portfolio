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
    <title>Guestbook</title>

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

    <form action="submit.php" method="post" id="guestbookform" name="form1">

    <fieldset class="form-group border p-2">
        <legend>Contact Info</legend>
        <div class="form-group">
            <label for="fname">First Name:</label>
            <input type="text" class="form-control" id="fname"
                   placeholder="Enter first name" name="fname">
            <span class="err" id="err-fname">
                    Please enter a first name
                </span>
        </div> <!-- First Name -->

        <div class="form-group">
            <label for="lname">Last Name:</label>
            <input type="text" class="form-control" id="lname"
                   placeholder="Enter last name" name="lname">
            <span class="err" id="err-lname">
                    Please enter a last name
                </span>
        </div> <!-- Last Name -->

        <div class="form-group">
            <label for="jtitle">Job Title:</label>
            <input type="text" class="form-control" id="jtitle"
                   placeholder="Enter job title" name="jtitle">
        </div> <!-- Job title -->

        <div class="form-group">
            <label for="company">Company Name:</label>
            <input type="text" class="form-control" id="company"
                   placeholder="Enter company name" name="company">
        </div> <!-- Company Name -->

        <div class="form-group">
            <label for="url">LinkedIn URL:</label>
            <input type="text" class="form-control" id="url"
                   placeholder="Enter LinkedIn url" name="url">
            <span class="err" id="err-url">
                LinkedIn url must contain "http" and ".com"
            </span>
        </div> <!-- LinkedIn URL -->

        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" class="form-control" id="email"
                   placeholder="email@example.com" name="email">
        </div>
        <span class="err" id="err-email">
                    Please enter a valid email (email@example.com)
                </span>
        <!-- Email Address -->

    </fieldset> <!-- End of Contact section -->

        <fieldset class="form-group border p-2">
            <legend>How we met</legend>
            <div class="form-group">
            <label class="my-1 mr-2" for="met">How did we meet?</label>
            <select class="form-control" id="met" name="met">
                <option value="none">Choose one...</option>
                <option value="Meetup">Meetup</option>
                <option value="Job Fair">Job Fair</option>
                <option value="Have not met yet">We have not met yet</option>
                <option value="other">Other</option>
            </select>
            <span class="err" id="err-Meet">
                    Please select an option
                </span>
            </div><!-- End of dropdown -->

            <div class="form-group">
                <label for="otherO">If Other (please specify) :</label>
                <input type="text" class="form-control" id="otherO"
                       placeholder="Please specify how we met" name="other">
            </div> <!-- End of other -->
            <span class="err" id="err-other">
                    Please specify how we met
                </span>

                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" rows="5" id="message"
                              name="message"></textarea>
            </div> <!-- End of Textarea -->
            <span class="err" id="err-message">
                    Please enter a message
                </span>

        </fieldset> <!-- End of How we met section -->

        <fieldset class="form-group border p-2">
            <legend>Mailing List</legend>
            <div class="form-check">
                <label class="form-check-label">
            <input type="checkbox" value="checked" class="form-check-input" id="mailing" name="mailing">
            Please add me to your mailing list!</label>
            </div> <!-- End of Mailing list checkbox -->

            <br> <!-- added bit of space -->

                <h6>Please choose an email format:</h6>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input"
                               name="method" value="html" checked="checked">HTML
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input"
                               name="method" value="text">Text
                    </label>
                </div> <!-- End of radio buttons -->

        </fieldset> <!-- End of Mailing list fieldset -->

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-default">
    Submit</button>
        <hr>
</form> <!-- End of Form -->
</div>

<div class="container justify-content-center">
<footer class="text-muted text-center">
    <p class="mb-1">
        <a href="#" class="text-primary">Back to top</a>
    </p>
    &copy; Copyright 2021
</footer>
</div> <!-- End of Footer-->

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
</html>