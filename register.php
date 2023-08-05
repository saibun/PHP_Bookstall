<?php
	//conncet database
	include 'conncet.php';
	//Book registration logic:-
	if(isset($_POST['submit'])){
		$book_name=$_POST['book_name'];
		$author=$_POST['author'];
		$price=$_POST['price'];
		$query="SELECT * FROM book where author ='$author' and name ='$book_name' ";
		$result=mysqli_query($conn,$query);
		$num_rows=mysqli_num_rows($result);
		if($result){
			if($num_rows>0){
				echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
						  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
						  <div>
						    Book Already exist!
						  </div>
						</div>';
			}else{
				$query1="INSERT INTO book (author,name,price) values ('$author','$book_name','$price')";
				$result1=mysqli_query($conn,$query1);
				if($result1){
					header("location: books.php");
				}else{
					echo'<div class="alert alert-danger d-flex align-items-center" role="alert">
						  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
						  <div>
						    Failed insert Books information!
						  </div>
						</div>';
				}
			}
		}else{
			echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
						  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
						  <div>
						    Failed to connect database!
						  </div>
						</div>';
		}

	}


?>
<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
	crossorigin="anonymous">
<title>Register Page</title>
</head>
<body>

	
	<?php include "navbar.php" ?>
	<!-- Book Regiser form -->
	<div class="container my-5 p-5" style="border:1px solid black;">
		<h4 class="text-center">New Book Register</h4>
		<form class="col-md-4 offset-md-4" method="post">
			<div class="mb-3">
				<label for="name" class="form-label">Book Name
					</label> <input type="text" class="form-control" name="book_name">	
			</div>
			
			<div class="mb-3">
				<label for="author" class="form-label">Author
					</label> <input type="text" class="form-control" name="author">	
			</div>
			<div class="mb-3">
				<label for="price" class="form-label">Price
					</label> <input type="text" class="form-control" name="price">	
			</div>
			
			<center><button type="submit" class="btn btn-primary" name="submit">Submit</button>
				<button type="reset" class="btn btn-secondary">Reset</button>
			</center>
		</form>
	</div>


	<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
	<script
		src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
		integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
		crossorigin="anonymous"></script>
	<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
		integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
		crossorigin="anonymous"></script>

</body>
</html>