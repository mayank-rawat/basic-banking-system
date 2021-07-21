<?php
include "header.php";
?>

<style>
    .heading{
        clear: both;
        text-align: center;
        font-size: 80px;
        padding: 20px;
    }
    .table{
      font-weight: 500;
      font-size: 17px;
    }
</style> 
    <div class="heading">
        <h2>Transaction History</h2>
    </div>
    <div class="details">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">S.No.</th>
                <th scope="col">Sender</th>
                <th scope="col">Reciever</th>
                <th scope="col">Amount</th>
                <th scope="col">Date</th> 
              </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM transaction";

                $result = mysqli_query($connection, $query);
                if(!$result){
                  die("error in query". mysqli_error());
                }                
                while($row = mysqli_fetch_row($result))
                { ?>
                  <tr>
                    <td><?php echo $row[0] ?></td>
                    <td><?php echo $row[1] ?></td>
                    <td><?php echo $row[2] ?></td>
                    <td><?php echo $row[3] ?></td>
                    <td><?php echo $row[4] ?></td>
                  </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <footer class="footer">
        <p>&copy2021 <b>spark bank</b>  All right reserved </b></p>
        <p>Made by <b>Mayank Rawat</p>
    </footer>
</body>
</html>