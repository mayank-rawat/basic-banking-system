<?php

$connection = mysqli_connect('localhost', 'root', '', 'spark_bank');
if(!$connection)
{
  die("database connection fail");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spark Bank</title>
    <link rel="stylesheet" href="./css/stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>
    .card a{
        text-decoration : none;
        color: white; 
    }
</style>
<body>
    <header class="header">
        <div class="left">
            <div id = "logo">
                <a href="index.php"><img src="./images/logo.png" alt="Spark Bank"><span>Spark Bank</span></a>
            </div>
        </div>
        <div class="right"> 
            <div class="navbar">
                <ul>
                    <li><a href="index.php"><button>Home</button></a></li>
                    <li><a href="contact.html"><button>Contact</button></a></li>
                    <li><a href="https://www.thesparksfoundationsingapore.org/"><button>About</button></a></li>
                </ul>
            </div>
        </div>
    </header>  