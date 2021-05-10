<!DOCTYPE html>
<?php include('server.php') ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin View Digital Library&reg;</title>
    <link rel="stylesheet" href="style.css">
  </head>
<style type="text/css">
    body  {  background-color: skyblue ;

}
</style>
<div class="header" style="background-color:blue";>
      <h2>Admin view user details</h2>
    </div>

<?php
$sql = "SELECT id,fullname,username,email,age,gender,phno FROM users";
 $result = mysqli_query($db, $sql);
 if ($result->num_rows > 0){
 echo "<table>
   <tr>
   <th> ID    </th>
   <th> Full Name  </th>
   <th> Name  </th>
   <th> Email </th>
   <th> Age  </th>
   <th> Gender  </th>
   <th> Phone Number  </th>
   </tr>";
   while($row = $result->fetch_assoc()) {

       echo "<tr>
       <td>".$row["id"]."</td>
       <td>".$row["fullname"]."</td>
       <td>".$row["username"]."</td>
       <td>".$row["email"]."</td>
       <td>".$row["age"]."</td>
       <td>".$row["gender"]."</td>
       <td>".$row["phno"]."</td>
       </tr>";
   }
echo  "</table>";
    }
    ?>

    
<div class="header" style="background-color:blue">
      <h2>Admin view Isuues and complaints by users</h2>
    </div>
  <?php
$sql = "SELECT Issue_id,username,email,issue FROM issues";
 $result = mysqli_query($db, $sql);
 if ($result->num_rows > 0){
 echo "<table>
   <tr>
   <th> Issue ID </th>
   <th> User Name </th>
   <th> Email </th>
   <th> Issue <th>
   </tr>";
   while($row = $result->fetch_assoc()) {
       echo "<tr>
       <td>".$row["Issue_id"]."</td>
       <td>".$row["username"]."</td>
       <td>".$row["email"]."</td>
       <td>".$row["issue"]."</td>
       </tr>";
   }
echo  "</table>";
    }
    ?>

      

<h3>To see available Books <a href="book.html">Click Here </a></h3>
<p align="middle"><a href="index.php?logout='1'" style="color: red;">Logout</a></p>




  </body>
</html>
