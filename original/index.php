<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Talim</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm  bg-primary"style="font-size: 15px">
      <div class="container">
       <a href="#" class="text-white navbar-brand">
        <p class="text-uppercase">Maktab</p></a>
       <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
         <i class="fas fa-align-justify text-white"></i>      
        </button>
       <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a  class="nav-link text-white text-uppercase">Maktab Yangiliklari</a>
            </li>
            <li class="nav-item">
              <a href="reja.php" class="nav-link text-white text-uppercase">O'quv rejalar</a>
            </li>
            <li class="nav-item">
              <a href="fanlar.php" class="nav-link text-white text-uppercase">Fanlar ruyxati</a>
            </li>
            <li class="nav-item">
              <a href="oqituvchilar.php" class="nav-link text-white text-uppercase">O'qituvchilar ro'yxati</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-white text-uppercase">Maktab bilan bog'lanish<br>+99897000000</a>
            </li>
            <li class="nav-item">
              <a href="admin1.php" class="nav-link text-white text-uppercase">Adminpanel</a>
            </li>
          </ul>
       </div> 
     </div>
    </nav>
    <div>
                  
<div class="text-white  text-center"style="margin-top: 80px">
  <h1>Yangiliklar</h1>

 <?php 
          $connection=mysqli_connect("localhost","root","","talim");
              $query = "SELECT *FROM yangiliklar";
              $query_run=mysqli_query($connection,$query);
           ?>
                    <?php 
                      if (mysqli_num_rows($query_run)) {
                        while ($row=mysqli_fetch_assoc($query_run)) 
                        {

                     ?>
                  <div class="text-center">
                  <b style="font-size: 30px;color: red"><?php echo $row['xabarnomi'];?></b><br>
                      <?php echo $row['mazmuni'];?>
                      <?php 
                        }
                        
                      }
                      else{
                        echo "Malumot kiritilmagan";
                      }
                     ?>  
                  </div>
</div>
</div>
</body>
</html>