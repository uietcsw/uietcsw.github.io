<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "1034447", "", "1034447");

    // Check connection

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
    $first_name = mysqli_real_escape_string($link, $_POST['firstname']);
    $email_address = mysqli_real_escape_string($link, $_POST['mail']);
    $sub_branch = mysqli_real_escape_string($link, $_POST['branch']);
    $subject_para = mysqli_real_escape_string($link, $_POST['subject']);

    // attempt insert query execution
    $sql = "INSERT INTO formdata (name, mail, branch, subject) VALUES ('$first_name', '$email_address', '$sub_branch', '$subject_para')";

    if(mysqli_query($link, $sql)){} else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // close connection
    mysqli_close($link);
?>

<!DOCTYPE html>

<html lang="en">
<head>

    <!--META TAGS-->
    <meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--FAVICON-->
    <link rel="shortcut icon" href="resources/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="resources/favicon/favicon.ico" type="image/x-icon">

    <!--TITLE-->
  <title>Home | UIETCSW &mdash; Confederate of Student Welfare | University Institute of Engineering &amp; Technology</title>

  <!--STYLESHEETS-->

  <link rel="stylesheet" type="text/css" href="/resources/css/main.css" media="all">
    <link rel="stylesheet" type="text/css" href="resources/css/responsive.css" media="all">

    <!--ICON FONT STYLESHEET-->
    <link rel="stylesheet" href="resources/css/icon-font.min.css">

    <!--GOOGLE FONT APIS-->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    <!--Fallback for IE-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="resources/js/script.js"></script>

</head>
<body>
    <!-- <div class="loader"></div> -->
    <nav class="clearfix">
        <ul class="clearfix">
            <a href="https://uietcsw.github.io/"><li>Home</li></a>
            <a href="./resources.html"><li>Resources</li></a>
            <a href="./contact.html"><li>Contact</li></a>
            <a href="./feedback.html"><li>Feedback</li></a>
        </ul>
    </nav>

    <div class="container clearfix">

        <section>
            <h1 class="big">
                <a href="./index.html"><span>CSW</span>UIET</a>
            </h1>
            <h3 class="set-def--blue">
                Thank You 
            </h3>
            <div class="wtf">
                You query has been submitted. We will try to respond in 1-2 hours.
            </div>
            
        </div>
    <footer>
        <div class="exit">
            Copyright &copy; UIETCSW 2017
            <br>University Institute of Engineering and Technology<br>Chandigarh, India
        </div>
    </footer>

    <!--WEB SCRIPT OPTIMIZATION-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

</body>
</html>
