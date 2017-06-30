<?php
    $link = mysqli_connect("sql12.freemysqlhosting.net", "sql12182821", "lE6WvGXM6C", "sql12182821");
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $first_name = mysqli_real_escape_string($link, $_POST['firstname']);
    $email_address = mysqli_real_escape_string($link, $_POST['mail']);
    $sub_branch = mysqli_real_escape_string($link, $_POST['branch']);
    $subject_para = mysqli_real_escape_string($link, $_POST['subject']);
    $sql = "INSERT INTO formdata (name, mail, branch, subject) VALUES ('$first_name', '$email_address', '$sub_branch', '$subject_para')";
    if(mysqli_query($link, $sql)){}
    else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Thank You.
    </title>
    <link href="resources/main.css" type="text/css" rel="stylesheet" media="all">
    <style>
      body{
        font-family: 'Lato';
        background-color: #222;
        padding: 50px;
      }
    </style>
</head>
<body>
  <a href="https://uietcsw.github.io/">Click here to go back to main page</a>
</body>
</html>
