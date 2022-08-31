<?php

$servername="localhost";
$username="root";
$password="";
$database="filehandle";

$con=mysqli_query($servername,$username,$password,$database);


if(isset($_POST['submit'])){
    $filetype=$_POST['filetype'];
    


    $filefname=rand(1000,10000) ."-".$_FILES["file"]["name"];

    // Giving Temporary name
}




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            height: 100vh;
            width: 100vw;
            background: linear-gradient( rgba(236, 23, 23, 0.4),rgba(39, 39, 198, 0.3));
        }
        .container{
            padding: 45px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,50%);
            border: 2px solid black;
            box-shadow: 2px 2px rgb(0, 0, 0);
        }
        .inputelem{
            margin: 5px 10px;
        }
    </style>
    <title>Forms</title>
</head>
<body>
    <div class="container">
        <form action="#" method="post" enctype="multipart/form-data">
            <label for="filetype">Enter Document Type</label>
            <select name="filetype" id="" class="inputelem">
             
            <optgroup>
                <option value="Ciizenship">Nagarikta</option>
                <option value="Passport">Passport</option>
                <option value="Liscense">Liscense</option>
                <option value="PAN">PAN Card</option>
            </optgroup>
        </select> <br>

        <input type="file" name="sub-doc" id=""  class="inputelem"> <br>


        <input type="submit" value="Submit" name="submit">
        
        </form>
    </div>
    
</body>
</html>