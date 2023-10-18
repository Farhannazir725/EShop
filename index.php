<?php
session_start();
include 'admin/connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Baloo+Bhaina+2&family=Lato:wght@700&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,800;1,600&family=Roboto:wght@100&family=Rowdies:wght@300;400&display=swap"
        rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    type="text/css" />
    <title>My E-SHOP</title>
    <style>
        *{
            margin:0px;
            padding:0px;
        }
        h1{
            margin-top:0px;
           text-align:center;
           font-family: 'Baloo Bhai 2', 'cursive';
        }
       h2{
        
        font-family: 'Baloo Bhai 2', 'cursive';
        position: relative;
        display: flex;
        margin:0px 1150px;
        font-size:15px;
        color:white;
        padding:5px;
        
        
       }
       h2 a{
        text-decoration: none;
       }
        
        nav{
            display: flex;
            font-family: 'Baloo Bhai 2', 'cursive';
            align-items: center;
            position: absolute;
            top: 0;
           
             margin: 70px 400px;
        }
        nav::before{
            content: "";
            background-color: black;
            position: absolute;
            height: 100%;
            width: 50%%;
            z-index: -1;
            opacity: 0.4;
}
    nav ul{
    display: flex;
    font-family: 'Baloo Bhai 2', 'cursive';
     }
     nav ul li{
    list-style: none;
    font-size: 16px;
        }
        nav ul li a{
    color: white;
    text-decoration: none;
    display: block;
    padding: 3px 22px;
    border-radius: 20px;
}
nav ul li a:hover{
    color: black;
    background-color: #fff;
    text-decoration:2px solid brown underline;
    
}
body{
    background:url("bg.jpg");
    
}

/*  section */
section{
    display:grid;
    grid-template-areas: 
 
  'section section section section'
  
  ;
  
   
}
.item{
    display:grid;
    
  
}
a{
 
 text-decoration: none;
 color:black;
 font-family: 'Baloo Bhai 2', 'cursive';
 }
 a:hover{
    color: black;
    background-color: #fff;
    text-decoration:2px solid brown underline;
    border-radius:30px;

 }
    
    </style>
</head>
<body>
<h2><a href="login.php">Login<br>
  </a> 

<i class="fa fa-envelope-o"></i>

</h2> 

    <h1>My Online Shop</h1>
    
    <nav>
        <ul>
            <li class="item" id="item"><a href="">Home </a></li>
            <li class="item" id="item"><a href="#">About </a></li>
            <li class="item" id="item"><a href="#">Products </a></li>
            <li class="item" id="item"><a href="#">Contact US </a></li>
            <li class="item" id="item"><a href="#">Cart </a></li>
        </ul>
    </nav>
    <?php if(isset($_SESSION['email'])){
    echo $_SESSION['username'];
} ?>
    <div>
    <?php
    $sql = mysqli_query($conn,"SELECT * FROM categorydetails WHERE 	activestatus= 0");
    while($row = mysqli_fetch_array($sql)){
        ?>
<table>
    <tr><td><a href="catalog.php?catid=<?php echo $row['sno'];?>"><?php echo $row['catname'];?></a></td></tr>

    <tr><?php
    $sql2= mysqli_query($conn,"SELECT * FROM subcat WHERE catid = '{$row['sno']}'	AND activestatus= 0");
    while($row2 = mysqli_fetch_array($sql2)){ ?>
        
<td ><a href="catalog.php?subcatid=<?php echo $row2['sno'];?>"><?php echo $row2['subcatname'];?> </a></td>
    <?php    
    }
        ?></tr>
</table>







<?php
    }


    ?>
    </div>
    <footer ><a href="loguout.php">Logout</a></footer>
    
</body>
</html>