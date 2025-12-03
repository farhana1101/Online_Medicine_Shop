<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $benefits = $_POST['benefits'];

    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $imageName = time() . '_' . preg_replace('/\s+/', '_', $_FILES['image']['name']);
        $target = "uploads/" . $imageName;

        // Check if uploads folder exists
        if (!is_dir("uploads")) {
            die("Error: 'uploads' folder missing. Create it in project root.");
        }

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $stmt = $conn->prepare("INSERT INTO medicines (name, price, benefits, image) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("sdss", $name, $price, $benefits, $imageName);

            if ($stmt->execute()) {
                echo "<script>alert('Medicine added successfully!'); window.location='admin.php';</script>";
            } else {
                echo "Database error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Failed to move uploaded file. Check folder permissions and path.";
        }
    } else {
        echo "Please select a valid image file.";
    }
}
?>

