<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action = "add.php" method = "get">
    <label> Enter your ID: </label>
    <input type = "number" id="id" name= "id"> </br>
    <label> Enter your Name: </label>
    <input type = "text" id="name" name= "name"> </br>
    <label for = "age"> Enter your Age: </label>
    <input type = "number" id= "age" name = "age"></br>
    <label for = "address"> Enter your Address:
    <input type = "text" id= "address" name="address"> </br>
    <input name = "Submit" value = "Submit" type= "Submit">
    </form>
</body>
</html>

<?php
include('connect.php');

if(isset($_GET['Submit'])){
    $id = $_GET['id'];
    $name = $_GET['name'];
    $age = $_GET['age'];
    $address = $_GET['address'];

    $Add = "INSERT INTO users VALUES( '$id', '$name', $age, '$address')";

    $sqlAdd = mysqli_query ($connect, $Add);
    echo "<script>alert ('New data Added!') </script>";
    echo "<script>window.location.href ='index.php'</script>";
}