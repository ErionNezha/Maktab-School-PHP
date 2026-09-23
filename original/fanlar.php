<!DOCTYPE html>
<html lang="en">
<head>
  <title>fanlar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body> 
  <?php 
          $connection=mysqli_connect("localhost","root","","maktablar");
              $query = "SELECT *FROM fan";
              $query_run=mysqli_query($connection,$query);
           ?>
                   
<div class="container">
  <h2>Fan nomlari</h2>
  <div class="card">
    <div class="card-body"><?php 
                      if (mysqli_num_rows($query_run)) {
                        while ($row=mysqli_fetch_assoc($query_run)) 
                        {

                     ?>
                      <tr>
      
                      <?php echo $row['sinf'];?>
                      <?php echo $row['nomi'];?>
                      <?php 
                        }
                        
                      }
                      else{
                        echo "Malumot kiritilmagan";
                      }
                     ?> 
<a href="#"class="btn btn-primary">Ortga</a>
                   </div>
  </div>
</div>

</body>
</html>
