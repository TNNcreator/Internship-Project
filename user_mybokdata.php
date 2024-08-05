<?php 

include('user_header.php');
include('database.php');


$user=$_SESSION['logins'];



$sql="select * from boking where email='$user' ";
$result = mysqli_query($db,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="all.css">
    <style>
        body{
            background: black;
        }
    </style>
</head>
<body style="margin-top:120px;">
    <div class="main_blog" >
    <div class="table_blog" >
        <table border="1" >
            <tr>
                <th>Sr.No</th>
                <th>Boking_id</th>
                <th>Package_name</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>P Number</th>
                <th>Date</th>
                
            </tr>
            <?php
            $no=1;
            while($bok = mysqli_fetch_array($result))
            {
                    $sid=$bok['pkg_id'];
                    $sql="select * from package where pkg_id='$sid'";
                    $sq=mysqli_query($db,$sql);
                    $GetStateName=mysqli_fetch_array($sq);

                    $pid=$GetStateName['place_id'];
                    $sql="select * from place where place_id='$pid'";
                    $q=mysqli_query($db,$sql);
                    $GetplaceName=mysqli_fetch_array($q);

                   
            ?>
            <tr>
                <td><?php echo $no++ ;?> </td>
                <td><?php echo $bok['biking_id']?></td>
                <td><?php echo $GetplaceName['place_name']?></td>
                <td><?php echo $bok['full_name']?></td>
                <td><?php echo $bok['email']?></td>
                <td><?php echo $bok['number']?></td>
                <td><?php echo $bok['date']?></td>
                
                
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
    </div>
</body>
</html>
<?php
include('user_footer.php');
?>