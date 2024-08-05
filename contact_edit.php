<?php
include('database.php');
include('admin_header.php');

$sql='select * from contact_us';
$GetResult=mysqli_query($db,$sql);

if(isset($_REQUEST['edt']))
{
    $eid=$_REQUEST['edt'];
    $sql="select * from contact_us where contact_id='$eid'";
    $s=mysqli_query($db,$sql);
    $res=mysqli_fetch_array($s);
}


if(isset($_REQUEST['insert']))
{
    $user= $_REQUEST['contact_name'];
    $mobilen= $_REQUEST['mobile_no'];
    $emaile= $_REQUEST['email'];
    $msg=$_REQUEST['massage'];
    

   
    $sql="update contact_us set contact_name='$user', mobile_no='$mobilen' , email='$emaile', massage='$msg' where contact_id='$eid' ";
    mysqli_query($db,$sql);
    header("location:contact.php");
    
}
if(isset($_REQUEST['del']))
{
    $ida=$_REQUEST['del'];
    $sql="delete from contact_us where contact_id='$ida' ";
    mysqli_query($db,$sql);
    header('location:contact.php');

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="all.css">
</head>
<body>
    <div class="main_blog"> 
        <h2>Contact Add Form </h2>
        <div class="blog">
            <form action="" method="post" enctype="multipart/form-data">

                <div>Contact Name</div>
                <div><input type="text" placeholder="Conatact Name" required name="contact_name" class="txt" value="<?php echo $res['contact_name']; ?>"></div>

        
                <div>Mobile No.</div>
                <div><input type="int" placeholder="Mobile No." required name="mobile_no" class="txt" value="<?php echo $res['mobile_no']; ?>"></div>

                <div>Contact Email</div>
                <div><input type="email" placeholder="Email" required name="email" class="txt" value="<?php echo $res['email']; ?>"></div>

                <div>Massage</div>
                <div><input type="text" placeholder='Massage'class='txt' name='massage' value="<?php echo $res['massage']; ?>"> </div>
            
                <div><input type="submit" name = "insert" class="btn"></div>
            </form>
        </div>
        <div class="table_blog">
            <table border="1">
                <tr>
                    <th>Sr.No</th>
                    <th>contact_name</th>
                    <th>Mobile No.</th>
                    <th>Contact Email</th>
                    <th>Massage</th>
                    <th>Delete</th>
                    
                </tr>
                 <?php
                 $no=1;
                 while($row=mysqli_fetch_array($GetResult))
                {   
                ?>
               <tr>
                   <td><?php echo $no++;?></td>
                   <td><?php echo $row['contact_name'];?></td>
                   <td><?php echo $row['mobile_no'];?></td>
                   <td><?php echo $row['email'];?></td>
                   <td><?php echo $row['massage'];?></td>

                   <td><a href="contact.php?del=<?php echo $row['contact_id'];?>" onclick="return confirm('you are sure !!!')">delete</a></td>

                   
                   
                   
               </tr>
                <?php
               }
               ?>
            </table>
        </div>
    </div>
</body>
</html>


