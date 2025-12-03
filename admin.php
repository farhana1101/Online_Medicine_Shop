<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Panel - Medicine Management</title>
<style>
  body {
    font-family: 'Poppins', sans-serif;
    background: lightblue;
    margin: 0; padding: 0;
  }

  .container {
    max-width: 900px;
    margin: 40px auto;
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: gray 0px 8px 20px;
  }

  h2 {
    text-align: center;
    color: blue;
    margin-bottom: 20px;
  }

  form { display: flex; flex-direction: column; gap: 12px; margin-bottom: 30px; }
  input, textarea {
    padding: 12px;
    border-radius: 8px;
    border: 1px solid gray;
    font-size: 14px;
  }
  input:focus, textarea:focus { border-color: blue; outline: none; }

  button {
    background: blue;
    color: white;
    padding: 12px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-weight: bold;
    transition: 0.3s;
  }
  button:hover { background: darkblue; }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }
  th, td { border: 1px solid gray; padding: 10px; text-align: center; }
  th { background: blue; color: white; }
  tr:hover { background: aliceblue; }

  img { width: 80px; height: 60px; object-fit: cover; border-radius: 5px; }

  a {
    text-decoration: none;
    color: white;
    padding: 5px 8px;
    border-radius: 5px;
    font-size: 14px;
  }
  .edit { background: darkblue; }
  .delete { background: red; }

  @media(max-width: 600px){
    table, th, td { font-size: 12px; }
    img { width: 60px; height: 45px; }
  }
</style>
</head>
<body>

<div class="container">
  <h2>Admin Panel - Manage Medicines</h2>

  <!-- Add Medicine Form -->
  <form action="add_medicine.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Medicine Name" required>
    <input type="number" step="0.01" name="price" placeholder="Price (Tk)" required>
    <textarea name="benefits" placeholder="Benefits" required></textarea>
    <input type="file" name="image" accept="image/*" required>
    <button type="submit">Add Medicine</button>
  </form>

  <!-- Medicines Table -->
  <h3 style="text-align:center; color:blue;">All Medicines</h3>
  <table>
    <tr>
      <th>ID</th>
      <th>Image</th>
      <th>Name</th>
      <th>Price</th>
      <th>Benefits</th>
      <th>Actions</th>
    </tr>

    <?php
    $result = $conn->query("SELECT * FROM medicines");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
              <td>{$row['id']}</td>
              <td><img src='uploads/{$row['image']}'></td>
              <td>{$row['name']}</td>
              <td>৳ {$row['price']}</td>
              <td>{$row['benefits']}</td>
              <td>
                <a class='edit' href='edit_medicine.php?id={$row['id']}'>Edit</a>
                <a class='delete' href='delete_medicine.php?id={$row['id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a>
              </td>
            </tr>
            ";
        }
    } else {
        echo "<tr><td colspan='6'>No medicines found</td></tr>";
    }
    ?>
  </table>
</div>

</body>
</html>
