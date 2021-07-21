<?php
include "header.php";
// Getting page id //
$page_id = $_GET['id'];

date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-Y');

// checking form 
if(isset($_POST["submit"]))
{
    $transfer_to = $_POST["transfer"];
    $amount = $_POST["amount"];

    // Run query for upadte receiver balance
    $query = "UPDATE users SET balance = balance + $amount where name = '$transfer_to' " ;
    $result = mysqli_query($connection, $query);
    if(!$result){
     die("error in query". mysqli_error());
    }

    // Run query to update sender balance
    $query5 = "UPDATE users SET balance = balance - $amount where id = $page_id " ;
    $result5 = mysqli_query($connection, $query5);
    if(!$result5){
     die("error in query". mysqli_error());
    }

    // query to update transaction history
    $query6 = "SELECT name from users WHERE id = $page_id ";
    $result6 = mysqli_query($connection, $query6);
    $transfer_from = mysqli_fetch_row($result6);

    $query4 = "INSERT INTO transaction (transfer_from, transfer_to, amount, t_date) values('$transfer_from[0]', '$transfer_to' , $amount, now()) ";
    $result4 = mysqli_query($connection, $query4);
    if(!$result4){
     die("error in query". mysqli_error());
    }
    
}
?>
<style>
    .card{
        background-color: green;
        height: 320px;
        width: 270px;
        color:white;
    }
    .container img{
        width: 110px;
        border-radius: 12px;
        margin: 30px auto;
    }
    .card button{
        width: 63%;
        padding: 4px;
        margin: 5px auto;
        border-radius: 7px;
        border: none;
    }
    .card button a{
        color: #24a03e;
        text-decoration: none;
        font-size: 17px;
    }
    .card button a:hover{
        color: #24a03e;
        text-decoration: none;
    }
    p{
        font-size:18px;
    }
</style>
<body>
    <div class="container">
        <div class="card">
            <img src="./images/done.jpg" alt="done">
            <p>Transaction successful</p>
            <button><a href="index.php">Home</a></button>
            <button><a href="transaction_history.php">Transactions</a></button>
        </div>
    </div>
</body>
</html>