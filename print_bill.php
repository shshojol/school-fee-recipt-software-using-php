<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$conn = mysqli_connect("localhost","root","","feesub");
if(!$conn){
    echo "not connect";
}
$sql = "select rec_no from rcv order by id DESC limit 1";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$last_rcv_no = $row["rec_no"];
$last_rcv_no++;

$name = $_REQUEST["name"];
$reg = $_REQUEST["reg_no"];
$class = $_REQUEST["class"];
$date = $_REQUEST["date"];
$depositer = $_REQUEST["depositer"];
$fee = $_POST["jan"]." ".$_POST["feb"]." ".$_POST["mar"]." ".$_POST["apr"]." ".$_POST["may"]." ".$_POST["jun"]." ".$_POST["jul"]." ".$_POST["aug"]." ".$_POST["sep"]." ".$_POST["oct"]." ".$_POST["nov"]." ".$_POST["dec"];
$particular = $_POST["diary"]." ".$_POST["tie"]." ".$_POST["belt"]." ".$_POST["adform"]." ".$_POST["i-card"]." ".$_POST["admisson"]." ".$_POST["yearly"];

$sql = "insert into rcv (name,reg_no,class,depositer,date,rec_no,particulars,fee_month)
values('$name','$reg','$class','$depositer','$date','$last_rcv_no','$particular','$fee')";
mysqli_query($conn,$sql);

$sql = "select fee_month from rcv where rec_no = $last_rcv_no";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$month_fee = $row["fee_month"];
$space_remove = str_replace(" ","",$month_fee);
$fee_lenth = strlen($space_remove);
$fee = $fee_lenth/3;
$total_fee = $fee*150;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
  
    </style>
</head>
<body>
    <table border=""> 
        <tr>
            <td colspan=4 style="text-align:center; border-width:0px; font-size:24px"><b>My new school</b></td>
        </tr>
        <tr>
            <td rowspan=2 colspan=2 style="border-width:px;">student name: <b><?PHP echo $name?></b><br>paid by: <b><?PHP echo $depositer?></b><br>class: <b><?PHP echo $class?></b></td>
            
            <td colspan=2>date: <b><?PHP echo $date?></b></td>
            
        </tr>
        <tr>    
            <td colspan="2">rec no: <b><?PHP echo $last_rcv_no?></b></td>   
        </tr>
        <tr>
            <td><b>Particular</b></td>
            <td><b>Fee(150 tk)</b></td>
            <td><b>Total</b></td>
            <td><b>Balance</b></td>
        </tr>
        <tr>
            <td style="padding-bottom:150px;width:150px">
                <?PHP
                
                    if($_POST["diary"]){
                        echo " diary = 50tk<br>";
                        $amount =50;
                    }
                    if($_POST["tie"]){
                        echo " tie = 20tk<br>";
                        $amount += 20;
                    }
                    if($_POST["belt"]){
                        echo " Belt = 100tk<br>";
                        $amount += 100;
                    }
                    if($_POST["adform"]){
                        echo " Adform = 300tk<br>";
                        $amount += 300;
                    }
                    if($_POST["i-card"]){
                        echo " I-card = 150tk<br>";
                        $amount += 150;
                    }
                    if($_POST["yearly"]){
                        echo " yearly = 500tk<br>";
                        $amount += 500;
                    }
                    if($_POST["admisson"]){
                        echo "admisson = 1000tk<br>";
                        $amount += 1000;
                    }
                    
                ?>
            </td>
            <td style="width:100px;padding-bottom:150px;">
                    <?PHP
                        echo "<div style='text-transform:uppercase'>";
                        echo $month_fee;
                     ?>
            </td>
            <td style="padding-bottom:70px">
                    <?PHP
                     echo $amount . "+" . $total_fee;

                    ?>
            </td>
            <td style="width:70px"></td>
        </tr>
        <tr>
            <td colspan=2><b>Total</b></td>
            <td><?PHP echo  $total = $amount+$total_fee."/-"; ?></td>
            <td></td>
        </tr>
        <?php
        $sql = "update rcv SET total = '$total' where rec_no = '$last_rcv_no'";
        mysqli_query($conn,$sql);
        ?>
    </table>
    <input type="button" value="Print Now" onclick = "window.alert()" style="margin-top:10px;">
    <a href="index.php" style="margin-left:300px;">Go Back</a>
  
</body>
</html>