<?php
include "header.php";

// Getting page id //
$page_id = $_GET['id'];
?>
<style>
    form select{
        width: 40%;
        margin: 5px;
        padding: 3px;
        border-radius: 5px;
        outline: none;
    }
    form input{
        width: 69%;
        margin: 5px;
        padding: 3px;
        border-radius: 5px;
        outline: none;
    }
    .btn{
        display: block;
        width: 40%;
        margin: 10px auto;
        background-color: #584a4a;
        border: none;
        
    }
    .card{
        background-color: #d9e8db;
    }
    .container img{
        width: 150px;
        border-radius: 50%;
        margin: 10px auto;
    }

    
</style>
    <div class="container">
        <div class="card">
            <img src="images/2.png" alt="avataar">
            <?php 
            // query to get sender details
            $query1 = "SELECT * FROM users WHERE id = $page_id ";

            $result1 = mysqli_query($connection, $query1);
            if(!$result1){
            die("error in query". mysqli_error());
            }
            $row1 = mysqli_fetch_row($result1) 
            ?>
            <p> 
                Hello <b><?php echo $row1[1] ?></b><br>
                Account Balance: <b>₹ <?php echo $row1[3] ?></b> 
            </p>
            
            <form action="successful.php?id=<?php echo $page_id ?>" method = "post">
                <label for="transfer">Transfer to:</label>
                <select name="transfer" required>
                        <option value="">Select</option>
                <?php
                // query to get receiver names ;
                    $query2 = "SELECT * FROM users ";
                    
                    $result2 = mysqli_query($connection, $query2);
                    if(!$result2){
                    die("error in query". mysqli_error());
                    }
                    
                    while($row2 = mysqli_fetch_row($result2)) 
                    { 
                        if($row2[0] == $page_id){
                            continue;
                        }?>
                        <tr>
                        <option value="<?php echo $row2[1] ?>" ><?php echo $row2[1] ?></option>
                        </tr>
                    <?php } ?>
                </select>
                <input type="number" name = "amount" placeholder = "Enter Amount" required >
                <button class = "btn btn-primary " name = "submit">Transfer</button>
            </form>
        </div>
    </div>
    <footer class="footer">
        <p>&copy2021 <b>spark bank</b>  All right reserved </b></p>
        <p>Made by <b>Mayank Rawat</p>
    </footer>
</body>
</html>