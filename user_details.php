<?php include ("a_header.php");?>
<?php include ("a_connection.php");?>


<div class="container"> 
<h2 class="text-black text-center text-danger">Users registered<h2>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email ID</th>
      <th scope="col">password</th>
    </tr>
  </thead>

<?php
    $sql1 = "SELECT * FROM users";
    $result1 =  mysqli_query($conn, $sql1);
    while($row1 = mysqli_fetch_assoc($result1))
    {
        $user_name = $row1['user_name'];
        $user_email = $row1['user_email'];
        $user_password = $row1['user_password'];
       
        echo ' <tr>
        <th scope="row">' . $user_name . '</th>
        <td>' . $user_email . '</td>
        <td>' . $user_password . '</td>
      </tr>';
    }
?>
</table>
</div>
</div>