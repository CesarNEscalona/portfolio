<?php
/* advisor.php
   Display a list of advisors
*/

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
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="styles/styles.css">
    <!-- Title -->
    <title>Admin Page</title>
</head>
<body>
<?php
include('includes/nav.html');
?>
    <div class="jumbotron text-center">
        <h1 class="display-4">Admin Page</h1>

        <p class="lead">Here's who signed up  my Guestbook!</p>
        <hr class="my-4">
     <!-- end of Jumbotron -->
        <div class="container bg-light">
        <!--

<h4 class="display-6">People in Cesar's Guestbook</h4>

<form method="get" action="admin.php">
    <input type="text" name="search">
    <input type="submit" value="Search">
</form>
<a href="guestbook.php">Click here to sign up for my guestbook form</a>
-->
            <h4 class="display-4">Guestbook Entries</h4>

            <table id="student-table">
                <thead>
                <tr>
                    <th>Timestamp</th>
                    <th>Name</th>
                    <th>Job Title</th>
                    <th>Company Name</th>
                    <th>LinkedIn Url</th>
                    <th>Email Address</th>
                    <th>How did we meet</th>
                    <th>Message</th>
                </tr>
                </thead>
                <tbody>

                <?php
//1. Define the base query
$sql = "SELECT *
            FROM guestbook ";

//echo "<p>GET:</p>";
//var_dump($_GET);
/*
if (isset($_GET['advisorid'])){
    $advisorId = $_GET['advisorid'];
    $sql .= " WHERE advisor = '$advisorId'";
}

if (isset($_GET['search'])) {
    $searchTerm = $_GET['search'];
    $sql .= " WHERE time LIKE '$searchTerm'
                  OR first LIKE '%$searchTerm%'
                  OR last LIKE '%$searchTerm%'";
}
*/
$sql .= " ORDER BY time Desc";
//echo "<p>$sql</p>";

//2. Send the query to the db
$result = mysqli_query($cnxn, $sql);

if (mysqli_num_rows($result) == 0) {
    echo "<h2>No results found</h2>";
}

//3. Print the result
//var_dump($result);
foreach ($result as $row) {
    //var_dump($row);

    $company = $row['company'];
    $last = $row['last'];
    $first = $row['first'];
    $jobTitle = $row['jobTitle'];
    $url = $row['url'];
    $email = $row['email'];
    $met = $row['met'];
    $message = $row['message'];
    $time = $row['time'];


    // echo "<p>$first $last | $company | $jobTitle | $url | $email | $met | $message | $time </p>";
    echo "<tr>
                    <td>$time</td>
                    <td>$first, $last</td>
                    <td>$jobTitle</td>
                    <td>$company</td>
                    <td>$url</td>
                    <td>$email</td>
                    <td>$met</td>
                    <td>$message</td>
                    
                  </tr>";
}
?>
                </tbody>
            </table>
        </div>
</div>
<div class="container justify-content-center">
    <footer class="text-muted text-center">
        <p class="mb-1">
            <a href="#" class="text-primary">Back to top</a>
        </p>
        &copy; Copyright 2021
    </footer>
</div> <!-- End of Footer-->
<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
    $('#student-table').DataTable();
</script>
</body>
</html>
