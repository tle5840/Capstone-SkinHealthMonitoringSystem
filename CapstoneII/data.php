<?php 
	session_start();
	if(isset($_SESSION['user'])){
        include 'config.php';
        $qry = "select * from skinhealthtable where Username = '".$_SESSION['user']."'";
        $qry_run = mysqli_query($con,$qry) or die(mysqli_error($con));
 ?>
 <center>
 <h1>Welcome <b><?php echo $_SESSION['user']; ?></b></h1>
    <table border="1" width="400px">
        <tr align="center">
            <th>#</th>
            <th>Username</th>
            <th>Conductivity</th>
            <th>Temperature</th>
            <th>UV</th>
        </tr>
        <?php
            $n = 1; 
            while($row = mysqli_fetch_array($qry_run)){
        ?>
            <tr align="center">
                <td><?php echo $n; ?></td>
                <td><?php echo $row['Username']; ?></td>
                <td><?php echo $row['Conductivity']; ?></td>
                <td><?php echo $row['Temperature']; ?></td>
                <td><?php echo $row['UV']; ?></td>
            </tr>
        <?php $n++;} ?>
        <tfoot>
            <tr>
                <td colspan="4" align="center"><a href="index.php">Back To Home</a></td>
            </tr>
        </tfoot>
    </table>
</center>
 <?php }else{
 	header('Location:../home.php');}
  ?>