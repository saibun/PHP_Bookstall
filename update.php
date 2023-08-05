<?php
	include "conncet.php";
	isset($_GET["updateId"]);
	$id=$_GET["updateId"];
	$query="SELECT * FROM book where id=$id ";
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_assoc($result);
	$author = $row["author"];
	$book_name = $row["name"];
	$price = $row["price"];
	if(isset($_POST['submit'])){
		$author=$_POST['author'];
		$price=$_POST['price'];
		$book_name=$_POST['book_name'];
		$update_query = "UPDATE book SET name='$book_name', author='$author', price='$price' WHERE id=$id";
		$result=mysqli_query($conn,$update_query);
		if(!$result){
			die(mysqli_error($conn));
		}
		header("location: books.php");
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
<title>Update Page</title>
</head>
<body>

	
	<?php include "navbar.php" ?>
	<!-- Book Regiser form -->
	<div class="container my-5 p-5" style="border:1px solid black;">
		<h4 class="text-center">Update Book Details</h4>
		<form class="col-md-4 offset-md-4" method="post">
			<div class="mb-3">
				<label for="name" class="form-label">Book Name
					</label> <input type="text" class="form-control" name="book_name" value="<?php echo $book_name ?>">	
			</div>
			
			<div class="mb-3">
				<label for="author" class="form-label">Author
					</label> <input type="text" class="form-control" name="author" value="<?php echo $author ?>">	
			</div>
			<div class="mb-3">
				<label for="price" class="form-label">Price
					</label> <input type="text" class="form-control" name="price" value=<?php echo $price ?>>	
			</div>
			
			<center><button type="submit" class="btn btn-warning btn-lg" name="submit" >Update</button>
				
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