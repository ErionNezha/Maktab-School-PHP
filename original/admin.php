<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Admin Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/admin.css">
  <link rel="stylesheet" type="text/css" href="css/fa/css/all.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


<div class="jumbotron text-center">
 


  <section >
  <div class="container my-5">
    <p class="h2 text-white">Yangiliklar</p>
   <?php 
          $connection=mysqli_connect("localhost","root","","maktablar");
              $query = "SELECT *FROM yangiliklar";
              $query_run=mysqli_query($connection,$query);
           ?>
             <table class="table table-hover bg-white" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                      <th>Id</th>
                      <th>Nomi</th>
                      <th>Mazmuni</th>
                      <th>Vaqti</th>
                    </tr>
                    <?php 
                      if (mysqli_num_rows($query_run)) {
                        while ($row=mysqli_fetch_assoc($query_run)) 
                        {

                     ?>
                      <tr>
      
                      <td><?php echo $row['id'];?></td>
                      <td><?php echo $row['nomi'];?></td>
                      <td><?php echo $row['mazmuni'];?><br><?php echo $row['ans1'];?></td>
                      <td><?php echo $row['time'];?><br><?php echo $row['ans2'];?></td>
                      </tr>
                      <?php 
                        }
                        
                      }
                      else{
                        echo "Malumot kiritilmagan";
                      }
                     ?>
                </table>
              </div>

    <p class="h2 text-white">Yangiliklar kiritish bo'limi</p>

  <section id="about" class="py-3 text-white">
    <section id="newsletter" class="text-center p-5">
    <div class="container bg-dark">
      <div class="row">
        <div class="col">
            <form action="malumot_kiritish.php"method="post"class=" justify-content-center">
                  <div class="row">
                    <div class="col-md-10">
                      
                  <label>Nomi</label>
                  <input type="text" name="nomi"class="form-control"required><br>
                  <label>Mazmuni kiriting</label>
                  <input type="text" name="mazmuni"class="form-control"required><br>
                    </div>
                  </div>  
                 <button type="submit" class="btn btn-primary form-control my-3">Savol kiritish</button>
              </form>
        </div>
      </div>
    </div>
</section>
  <section >
  <div class="container my-5">
    <p class="h2 text-white">oqituvchi</p>
   <?php 
          $connection=mysqli_connect("localhost","root","","maktablar");
              $query = "SELECT *FROM oqituvchi";
              $query_run=mysqli_query($connection,$query);
           ?>
             <table class="table table-hover bg-white" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                      <th>Id</th>
                      <th>Nomi</th>
                      <th>Mazmuni</th>
                      <th>Vaqti</th>
                    </tr>
                    <?php 
                      if (mysqli_num_rows($query_run)) {
                        while ($row=mysqli_fetch_assoc($query_run)) 
                        {

                     ?>
                      <tr>
      
                      <td><?php echo $row['ism'];?></td>
                      <td><?php echo $row['familiya'];?></td>
                      <td><?php echo $row['malumot'];?><br><?php echo $row['ans1'];?></td>
                      <td><?php echo $row['email'];?><br><?php echo $row['ans2'];?></td>
                      </tr>
                      <?php 
                        }
                        
                      }
                      else{
                        echo "Malumot kiritilmagan";
                      }
                     ?>
                </table>
              </div>

    <p class="h2 text-white">oqituvchi kiritish bo'limi</p>

  <section id="about" class="py-3 text-white">
    <section id="newsletter" class="text-center p-5">
    <div class="container bg-dark">
      <div class="row">
        <div class="col">
            <form action="oqituvchi.php"method="post"class=" justify-content-center">
                  <div class="row">
                    <div class="col-md-10">
                      
                  <label>Ism</label>
                  <input type="text" name="ism"class="form-control"required><br>
                  <label>familiya</label>
                  <input type="text" name="familiya"class="form-control"required><br>
                  <label>Malumot</label>
                  <input type="text" name="malumot"class="form-control"required><br>
                  <label>email</label>
                  <input type="text" name="email"class="form-control"required><br>
                    </div>
                  </div>  
                 <button type="submit" class="btn btn-primary form-control my-3">kiritish</button>
              </form>
        </div>
      </div>
    </div>
</section>


  <section >
  <div class="container my-5">
    <p class="h2 text-white">Reja</p>
   <?php 
          $connection=mysqli_connect("localhost","root","","maktablar");
              $query = "SELECT *FROM reja";
              $query_run=mysqli_query($connection,$query);
           ?>
             <table class="table table-hover bg-white" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                      <th>malumot</th>
                    </tr>
                    <?php 
                      if (mysqli_num_rows($query_run)) {
                        while ($row=mysqli_fetch_assoc($query_run)) 
                        {

                     ?>
                      <tr>
      
                      <td><?php echo $row['malumot'];?></td>
                      </tr>
                      <?php 
                        }
                        
                      }
                      else{
                        echo "Malumot kiritilmagan";
                      }
                     ?>
                </table>
              </div>

  <p class="h2 text-white">reja kiritish bo'limi</p>
  <section id="about" class="py-3 text-white">
    <section id="newsletter" class="text-center p-5">
    <div class="container bg-dark">
      <div class="row">
        <div class="col">
            <form action="rejani.php"method="post"class=" justify-content-center">
                  <div class="row">
                    <div class="col-md-10">
                  <label>Malumot</label>
                  <input type="text" name="malumot"class="form-control"required><br>
                    </div>
                  </div>  
                 <button type="submit" class="btn btn-primary form-control my-3"> kiritish</button>
              </form>
        </div>
      </div>
    </div>
</section>


  <section >
  <div class="container my-5">
    <p class="h2 text-white">Fanlar</p>
   <?php 
          $connection=mysqli_connect("localhost","root","","maktablar");
              $query = "SELECT *FROM fan";
              $query_run=mysqli_query($connection,$query);
           ?>
             <table class="table table-hover bg-white" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                      <th>Fanlar</th>
                    </tr>
                    <?php 
                      if (mysqli_num_rows($query_run)) {
                        while ($row=mysqli_fetch_assoc($query_run)) 
                        {

                     ?>
                      <tr>
      
                      <td><?php echo $row['nomi'];?></td>
                      <td><?php echo $row['sinf'];?></td>
                      </tr>
                      <?php 
                        }
                        
                      }
                      else{
                        echo "Malumot kiritilmagan";
                      }
                     ?>
                </table>
              </div>

  <p class="h2 text-white">Fan kiritish bo'limi</p>
  <section id="about" class="py-3 text-white">
    <section id="newsletter" class="text-center p-5">
    <div class="container bg-dark">
      <div class="row">
        <div class="col">
            <form action="fanlarni.php"method="post"class=" justify-content-center">
                  <div class="row">
                    <div class="col-md-10">
                  <label>Sinf</label>
                  <input type="text" name="sinf"class="form-control"required><br>
                  <label>fanlar Nomi</label>
                  <input type="text" name="nomi"class="form-control"required><br>
                    </div>
                  </div>  
                 <button type="submit" class="btn btn-primary form-control my-3"> kiritish</button>
              </form>
        </div>
      </div>
    </div>
</section>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

<a href="#"class="btn btn-primary">Ortga</a>
</body>
</html>

