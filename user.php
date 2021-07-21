<?php
include "header.php";

$query = "SELECT * FROM users";

$result = mysqli_query($connection, $query);
if(!$result){
  die("error in query". mysqli_error());
}

?>
<style>
    table{
      /* text-align:center; */
      font-weight: 500;
      font-size: 17px;
    }
    table button{
      width : 80px;
      padding: 2px;
      border-radius: 7px;
      border: none;
      height: 32px;

    }
    table button a{
      text-decoration: none;
      font-size: 17px;
      color: brown;
    }
</style>

    <div class="details">
      <table class="table table-striped">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Customer ID</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Email Id</th>
                <th scope="col">Current Balance</th>
                <th scope="col">Transfer Money </th> 
              </tr>
            </thead>
            <tbody>
              <?php
                while($row = mysqli_fetch_row($result))
                { ?>
                  <tr>
                    <td><?php echo $row[0] ?></td>
                    <td><?php echo $row[1] ?></td>
                    <td><?php echo $row[2] ?></td>
                    <td><?php echo $row[3] ?> Rs.</td>
                    <td><button><a href="transfer.php?id=<?php echo $row[0] ?>">Transfer</a></button></td>
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