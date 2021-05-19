<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content=" width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Domine:wght@500&family=Fredoka+One&family=UnifrakturCook:wght@700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/f1045cddcf.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <link rel="stylesheet" type="text/css" href="style.css">
  

  <title>Bank of TSF</title>
  <link rel="shortcut icon" href="TsfLogo.png" type="image/x-icon">
  <style type="text/css">
  
    
    h2{
      text-align: center; margin-top: 40px;  
      font-family: 'Fredoka One', cursive;
    }


.contact{
	
	background-color: rgba(255,165,0,0.7);
  max-width:600px;
  margin:auto;
  box-sizing:border-box;
  padding:40px;
  color:black;
  margin-top:60px;
  margin-bottom: 20px;
}

h2{
  text-align: center;
  font-size: 35px;
}

input[type="text"], textarea{
  width:100%;
  box-sizing: border-box;
  padding:12px 10px;
  
  outline:none;
  border:1px solid black;
  color:black;
  border-radius: 5px;
  margin: 10px;
}

input[type="submit"]{
  width: 100%;
  box-sizing:border-box;
  padding:10px;
  margin-top:30px;
  outline:none;
  border:none;
  background:black;
  border-radius:20px;
  color:#fff;
  line-height: 1.5;
  font-size: 20px;
}

input[type=submit]:hover{
  background:orange;
}

/*-----End of Contact-----*/



  </style>

</head>
<body>
<!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img class="imgnav" src="TsfLogo.png" alt="logo" style="width:40px;" >
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto justify-content-end">
          <li class="nav-item active">
            <a style="color: orange; font-size: 25px; margin-left: 40px;"class="nav-link" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a style="color: orange; font-size: 25px; margin-left: 40px;" class="nav-link" href="userdetails.php">VIEW CUSTOMERS</a>
          </li>
          <li class="nav-item">
            <a style="color: orange; font-size: 25px; margin-left: 40px;"class="nav-link" href="transfermoney.php">MAKE TRANSACTION</a>
          </li>
          <li class="nav-item">
            <a style="color: orange; font-size: 25px; margin-left: 40px;"class="nav-link" href="viewTransaction.php">HISTORY</a>
          </li>
        </ul> 
      </div>
    </div>
</nav>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- End of Navbar -->

<!-- Form -->
        <h2>CUSTOMER DETAILS</h2>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>

            <form class="contact" method="post">
            	<label>ID:</label>
            	<input type="text" name="id" value="<?php echo $rows['id']; ?>"readonly>
            	<hr>

                <label>Name:</label><br/>
                <input type="text" name="Name" value="<?php echo $rows['name']; ?>"readonly>
				<hr>

                <label>Email:</label>
            	<input type="text" name="id" value="<?php echo $rows['email']; ?>"readonly>
            	<hr>

                <label>Balance:</label><br/>
                <input type="text" name="balance" value="<?php echo $rows['balance']; ?>" readonly>

                </form>
<!--End of Form-->

<!-- Footer -->
  <footer>
    <div class="follow">
      <h3>Follow Us</h3>
      <div class="social">
        <a href="#facebook" class="facebook">
          <i class="fa fa-facebook"></i>
        </a>
        <a href="#twitter" class="twitter">
          <i class="fa fa-twitter"></i>
        </a>
        <a href="#linkedin" class="linkedin">
          <i class="fa fa-linkedin"></i>
        </a>
        <a href="#instagram" class="instagram">
          <i class="fa fa-instagram"></i>
        </a>
      </div>
    </div>
    <p class="text-copy">
      Copyright &copy; A project by Aamir Jawadwala
    </p>
  </footer>
  <!-- End Footer -->
