<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM medicines WHERE id=$id");
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];

  $price = $_POST['price'];
  $benefits = $_POST['benefits'];

  if (!empty($_FILES['image']['name'])) {
    $image = $_FILES['image']['name'];
    $target = "uploads/" . basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    $sql = "UPDATE medicines SET name='$name', price='$price', benefits='$benefits', image='$image' WHERE id=$id";
  } else {
    $sql = "UPDATE medicines SET name='$name', price='$price', benefits='$benefits' WHERE id=$id";
  }

  if ($conn->query($sql)) {
    echo "<script>alert('Medicine updated!'); window.location='admin.php';</script>";
  } else {
    echo "Error: " . $conn->error;
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Medicine</title>
  <style>
    body { font-family: Arial; background: #f4f4f4; }
    .container { width: 400px; margin: 50px auto; background: white; padding: 20px; border-radius: 8px; }
    input, textarea { width: 100%; margin: 10px 0; padding: 8px; }
    button { background: #007bff; color: white; padding: 10px; border: none; cursor: pointer; }
  </style>
</head>
<body>
  <div class="container">
    <h2>Edit Medicine</h2>
    <form method="POST" enctype="multipart/form-data">
      <input type="text" name="name" value="<?= $row['name'] ?>" required>
      <input type="number" step="0.01" name="price" value="<?= $row['price'] ?>" required>
      <textarea name="benefits" required><?= $row['benefits'] ?></textarea>
      <p>Current Image:</p>
      <img src="uploads/<?= $row['image'] ?>" width="100">
      <input type="file" name="image" accept="image/*">
      <button type="submit">Update</button>
    </form>
  </div>
</body>
</html>
