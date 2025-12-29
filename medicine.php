<?php include 'db.php'; ?>
<html>
<head>
<title>Medicine Store</title>

<style>
body{
  font-family:Arial;
  background:#f4f4f4;
  margin:0;
}

.container{
  width:90%;
  margin:auto;
  padding:20px;
}

.search{
  text-align:center;
  margin-bottom:20px;
}

input{
  padding:8px;
  width:300px;
}

.cards{
  display:flex;
  flex-wrap:wrap;
  justify-content:space-around;
}

.card{
  background:white;
  width:250px;
  margin:10px;
  padding:10px;
  text-align:center;
}

.card img{
  width:100%;
  height:150px;
}

.price{
  color:green;
  font-weight:bold;
}
</style>
</head>

<body>

<div class="container">
<h1>Medicine Store</h1>

<div class="search">
<form method="GET">
  <input type="text" name="search" placeholder="Search medicine">
  <button>Search</button>
</form>
</div>

<div class="cards">

<?php
$search = "";
if(isset($_GET['search'])){
  $search = $_GET['search'];
}

$sql = "SELECT * FROM medicines WHERE name LIKE '%$search%'";
$result = $conn->query($sql);

if($result->num_rows == 0){
  echo "No medicines found";
}

while($row = $result->fetch_assoc()){
  echo "<div class='card'>";
  echo "<img src='uploads/".$row['image']."'>";
  echo "<h3>".$row['name']."</h3>";
  echo "<p class='price'>৳ ".$row['price']."</p>";
  echo "<p>".$row['benefits']."</p>";
  echo "<button>Add to Cart</button>";
  echo "</div>";
}
?>

</div>
</div>

</body>
</html>

