<?php
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,"project");
$id=$_GET['id'];
$sql="SELECT * FROM employee_data WHERE id='$id'";
$data =mysqli_query($conn,$sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Search</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Project</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="../home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../reg.php">Register</a>
          </li>
		    <li class="nav-item active">
            <a class="nav-link" href="../data.php">Employeer's Data<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../info.php">Company Info</a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="../index.php">Logout</a>
          </li>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="search.php">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" name="id" aria-label="Search">

          <input class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search" value="SEARCH">
        </form>
      </div>
    </nav>

    <main role="main">
<table class='table' style='margin-top:5vw'>
<thead>
<th>Id</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Mobile no</th>
<th>Email</th>
<th>Address</th>
<th>Image</th>
<th>Action</th>
</thead>
<?php
		while($result1 =mysqli_fetch_assoc($data))
			{
      echo "<tr>
      <td>".$result1['id']."</td>
			<td>".$result1['first_name']."</td>
			<td>".$result1['last_name']."</td>
      <td>".$result1['mobile_no']."</td>
      <td>".$result1['email']."</td>
      <td>".$result1['address']."</td>
      <td>"?>
          <img src="../php/<?php echo $result1['image']?>" height=1% width=100%"></td>
		<?php	echo "<td><a class='btn btn-info'href='../update.php?id=$result1[id]&fn=$result1[first_name]&ln=$result1[last_name]&mn=$result1[mobile_no]&en=$result1[email]&ad=$result1[address]&img=$result1[image]'>Edit</a>
			<a class='btn btn-danger' href='../php/delete.php?id=$result1[id]' onclick= ' checkdelete()'>Delete</a></td>
			</tr>";			
			}
		?>
    </table>
    </main>

<footer class="container">
  <p>&copy; Project Ajna 2019-2020</p>
</footer>
<script>
function checkdelete()
{
confirm('Are u Sure?');
}
</script>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>