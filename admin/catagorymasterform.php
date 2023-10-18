<?php
session_start();
include 'connection.php';
if(!isset ($_SESSION['username'])){
?>
<script>window.location.href = 'index.php';</script>
<?php
}
else{

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Categary</title>
    <style>
        body{
             font-family: 'Lato', sans-serif;
            font-family: 'Open Sans', sans-serif;
            font-family: 'Roboto', sans-serif;
            font-family: 'Rowdies', cursive;
            
            background-color: rgb(0,0,0,0.3);
            animation-name:demo;
            animation-duration:4s;
        
        }
        @keyframes demo {
          0%  {
            background-color: red;
            }
            25%{
                background-color: yellow;
            }
            50%{
                background-color: grey;
            }
            100%{
                background-color: white;
            }
            syntax:{animation-iteration-count:value;}
            Syntax: {animation-duration: value(2 in sec)};
            Syntax: {animation-direction: value;}
        }
        
       .container{
        display:block;
        width:400px;
        margin: 12% auto;
        border: 2px solid black;
        padding: 73px 31px;
        height: 44%;
        text-align:center;
        background-color: rgb(0,0,0,0.9);
        box-shadow:0.3;
        color:#fff;
        
       }
       .submit{
        margin:10px;
        padding:10px;
       } 
       .submit:hover{
        background-color:orange;
       }
    </style>
</head>
<body>
    <form action="catagorymasteraction.php" method="POST" class="container">
        <div style="display:block;">
        <label for="Catagoryname">Catagory Name</label>
        <input type="text" name="cat" id="cat" placehoder="Category Name" autocomplete="off">
        </div>

        <div>
        <label for="Active"> Is Active </label>
        <input type="radio" name="act" id="act" value="0">Active 
        <input type="radio" name="act" id="act" value="1">In Active
        </div>
        <input type="submit" value="Submit" class="submit">
        
    </form>
    
</body>
</html>