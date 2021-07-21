<?php
include "header.php";
?>
<div class="info">
        <h2>Basic Banking System</h2>
    </div>
    <div class="container">
        <div class="box">
            <div class="card" id="card1" >
                <img src="./images/avatar.jpg" alt="user">
                <button class="home_btn" id="user"><a href="./user.php">Our Customers</a> </button>
            </div>
            <div class="card" id="card2">
                <img src="./images/transfer.jpg" alt="money transfer">
                <button class="home_btn" id="transfer"><a href="./user.php">Transfer Money</a> </button>

            </div>
            <div class="card" id="card3">
                <img src="./images/history.png" alt="history">
                <button class="home_btn" id="history"><a href="./transaction_history.php">Transaction History</a> </button> 
            </div>
        </div>
    </div>
    <footer class="footer">
        <p>&copy2021 <b>spark bank</b>  All right reserved </b><br>
        Made by <b>Mayank Rawat</p>
    </footer>
</body>
</html>