<?php require("index.php");?>
<style>
    h2{
        display: none;
    }
</style>
<div class="container" >
<h1>It's the miscellaneous page.</h1>
<div class="gap" style="padding-top: 40px;">
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydbtest";

$newconn = new mysqli($servername, $username, $password, $dbname);
if ($newconn->connect_error){
    die("Connection failed: " . $newconn->connect_error);
}

$sql = "SELECT id, name, post, email FROM mytest";
$result = $newconn->query($sql);

if ($result->num_rows>0)
   
   
    {

    //     echo  "id: " . $row['id'] . " - Name: " . $row['name'] . " post = " . $row['post'] . " and email is: " . $row['email'] . "<br>";
    // }
  
}


?>
</div>
<div class="container">
    <table>
        <tr>
            <th><?="id"?></th>
            <th><?="name"?></th>
            <th><?="post"?></th>
            <th><?="email"?></th>
        </tr>
        <?php  while ($row = $result->fetch_assoc()) : ?>

        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['post'] ?></td>
            <td><?= $row['email'] ?></td>

        </tr>
        <?php  endwhile; ?>

    </table>
</div>
</div>