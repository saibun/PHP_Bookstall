<?php 
  include"conncet.php";
  $query = "SELECT * FROM book";
  $result = mysqli_query($conn,$query);

  
  

?>
<!doctype html>
<html lang="en" xmlns:th="https://www.thymeleaf.com">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Books</title>
     <script src="https://kit.fontawesome.com/0faddc1af8.js" crossorigin="anonymous"></script>
  </head>
  <body>
   
   
   	<?php include"navbar.php"; ?>

  <div class="container my-5 col-md-8">
        		<table class="table  table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Author</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      
                        <?php 
                          while($row = mysqli_fetch_assoc($result)){
                            $id=$row['id'];
                            $book_name=$row['name'];
                            $author = $row['author'];
                            $price = $row['price'];
                            echo'<tr>
                                    <td>'.$id.'</td>
                                    <td>'.$book_name.'</td>
                                    <td>'.$author.'</td>
                                    <td>'.$price.'</td>                    
                            </tr>';

                            
                          }

                          

                        ?>
                        

                        
                        
                      
                     
                    </tbody>
            </table>
  </div>
   
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>