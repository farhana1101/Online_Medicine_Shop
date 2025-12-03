<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Medicine Store</title>
  <style>
    body { font-family: Arial; background: #f4f4f4; margin: 0; }
    .container { width: 90%; margin: auto; padding: 20px; }
    .search-box { text-align: center; margin-bottom: 20px; }
    input[type="text"] { padding: 8px; width: 300px; }
    .medicines { display: flex; flex-wrap: wrap; justify-content: space-around; }
    .card { background: #fff; width: 250px; margin: 10px; border-radius: 8px; text-align: center; padding: 10px; }
    .card img { width: 100%; height: 150px; object-fit: cover; border-radius: 8px; }
    .card h3 { margin: 10px 0; }
    .price { color: green; font-weight: bold; }
  </style>
</head>
<body>
  <div class="container">
    <h1>Medicine Store</h1>

    <div class="search-box">
      <form method="GET">
        <input type="text" name="search" placeholder="Search medicine...">
        <button type="submit">Search</button>
      </form>
    </div>

    <div class="medicines">
      <?php
      $search = isset($_GET['search']) ? $_GET['search'] : '';
      $sql = "SELECT * FROM medicines WHERE name LIKE '%$search%'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              echo "
              <div class='card'>
                  <img src='uploads/{$row['image']}' alt='{$row['name']}'>
                  <h3>{$row['name']}</h3>
                  <p class='price'>৳ {$row['price']}</p>
                  <p>{$row['benefits']}</p>
                  <button>Add to Cart</button>
              </div>";
          }
      } else {
          echo "<p>No medicines found.</p>";
      }
      ?>
    </div>
  </div>
</body>
</html>
