<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <style>
        .sty{height:20px;padding:10px}
        .align{text-align:center;}
        .admisson {
    height: 348px;
    width: 430px;
    background-color: gray;
    margin-left: 89px;
    padding: 10px;
    color: white;
}
.admisson2 {
    height: 348px;
    width: 430px;
    background-color: gray;
    padding: 10px;
    color: white;
    margin-left: 118px;
}
.bttn {

    margin-top: 30px;
    margin-right: 123px;
}
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <center>
        <h1>school bill</h1>

        <form action="print_bill.php" method="POST">
            <table>
                <th class="align">Student Name</th>
                <th class="align">Reg.No</th>
                <th class="align">Class</th>
                <th class="align">Date</th>
                <th class="align">Deposite By</th>
                <tr>
                    <td class="sty"><input class="align" type="text" name="name" placeholder="name"></td>  
                    <td class="sty"><input class="align" type="number" name="reg_no" placeholder="reg no"></td>
                    <td class="sty">
                    <select style="height:30px" name="class">
                        <option selected>--Class--</option>
                        <option value="Narsary">Nursary</option>
                        <option value="kg">K.G</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    </td>  
                    <td class="sty"><input class="align" type="text" name="date" value="<?PHP echo date("d-m-y"); ?>"></td>
                    <td class="sty"><input class="align" type="text" name="depositer" placeholder="depositer"></td>
                </tr>
            </table>
            </center>
            <div class="row">
                <div class="col-md-4">
                <div class='admisson2'>    
                        <legend>Tution Fee</legend>
                        <input type="checkbox" name="jan" value="jan">jan<br/>
                        <input type="checkbox" name="feb" value="feb">Feb<br/>
                        <input type="checkbox" name="mar" value="mar">March<br/>
                        <input type="checkbox" name="apr" value="apr">April<br/>
                        <input type="checkbox" name="may" value="may">May<br/>
                        <input type="checkbox" name="jun" value="jun">June<br/>
                        <input type="checkbox" name="jul" value="jul">July<br/>
                        <input type="checkbox" name="aug" value="aug">Aug<br/>
                        <input type="checkbox" name="sep" value="sep">Sep<br/>
                        <input type="checkbox" name="oct" value="oct">Oct<br/>
                        <input type="checkbox" name="nov" value="nov">Nov<br/>
                        <input type="checkbox" name="dec" value="dec">Dec<br/>
                    </div>
                </div>
                <div class="col-md-4 offset-1">
                    <div class='admisson'>    
                        <legend>Particular</legend>
                        <input type="checkbox" name="admisson" value="admisson">New admisson<br/>
                        <input type="checkbox" name="yearly" value="yearly">yearly<br/>
                        <input type="checkbox" name="tie" value="tie">Tie<br/>
                        <input type="checkbox" name="diary" value="diary">Diary<br/>
                        <input type="checkbox" name="belt" value="belt">Belt<br/>
                        <input type="checkbox" name="adform" value="adform">Adform<br/>
                        <input type="checkbox" name="i-card" value="i-card">I-card<br/>
                    </div>
                </div>
            </div>
            <div class="bttn">
                <input class="btn btn-primary btn-lg float-right " type="submit" name="print" value="Print Bill">
            </div>
            
        </form>
       
    </div>




<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>




