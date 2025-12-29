<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Panel</title>

<style>
body{
  font-family: Arial;
  background: lightblue;
  margin:0;
}

.container{
  width:90%;
  max-width:900px;
  margin:40px auto;
  background:#fff;
  padding:25px;
  border-radius:10px;
}

h2,h3{
  text-align:center;
  color:blue;
}

/* Form */
form input, form textarea, form button{
  width:100%;
  padding:10px;
  margin-bottom:10px;
}

button{
  background:blue;
  color:white;
  border:none;
  cursor:pointer;
}

/* Table */
table{
  width:100%;
  border-collapse:collapse;
  margin-top:20px;
}

th,td{
  border:1px solid gray;
  padding:8px;
  text-align:center;
}

th{
  background:blue;
  color:white;
}

img{
  width:70px;
  height:55px;
  object-fit:cover;
}

a{
  color:white;
  padding:4px 6px;
  text-decoration:none;
}

.edit{ background:darkblue; }
.delete{ background:red; }
</style>
</head>

<body>

<div class="container">
<h2>Admin Panel - Manage Medicines</h2>

<!-- Add Medicine -->
<form action="add_medicine.php" method="POST" enctype="multipart/form-data">
  <input type="text" name="name" placeholder="Medicine Name" required>
  <input type="number" name="price" step="0.01" placeholder="Price" required>
  <textarea name="benefits" placeholder="Benefits" required></textarea>
  <input type="file" name="image" required>
  <button>Add Medicine</button>
</form>

<h3>All Medicines</h3>

<table>
<tr>
  <th>ID</th>
  <th>Image</th>
  <th>Name</th>
  <th>Price</th>
  <th>Benefits</th>
  <th>Action</th>
</tr>

<?php
$sql = "SELECT * FROM medicines";
$result = $conn->query($sql);

if($result->num_rows == 0){
  echo "<tr><td colspan='6'>No medicines found</td></tr>";
}

while($row = $result->fetch_assoc()){
?>
<tr>
  <td><?= $row['id'] ?></td>
  <td><img src="uploads/<?= $row['image'] ?>"></td>
  <td><?= $row['name'] ?></td>
  <td>৳ <?= $row['price'] ?></td>
  <td><?= $row['benefits'] ?></td>
  <td>
    <a class="edit" href="edit_medicine.php?id=<?= $row['id'] ?>">Edit</a>
    <a class="delete" href="delete_medicine.php?id=<?= $row['id'] ?>"
       onclick="return confirm('Are you sure?')">Delete</a>
  </td>
</tr>
<?php } ?>

</table>
</div>

</body>
</html>


