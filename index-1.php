<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Online Medicine Shop</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body style="margin:0; font-family:'Poppins', sans-serif; background: rgb(244,244,244);">

<!-- Navbar -->
<div style="

  background: rgb(12,100,189);
  color: rgb(255,255,255);
  padding: 12px 20px;
  display: flex;
  align-items: center;
  flex-wrap: wrap;
">
  <img src="https://images.unsplash.com/photo-1705988142466-e468bc654eeb?auto=format&fit=crop&w=700&q=80" 
       style="width:55px; border-radius:8px; margin-right:15px;">
  <ul style="list-style:none; display:flex; margin:0; padding:0; flex-wrap:wrap;">
    <li style="margin-left:15px;"><a href="#" style="color: rgb(255,255,255); text-decoration:none; font-weight:600;">Home</a></li>
    <li style="margin-left:15px;"><a href="medicine.php" style="color: rgb(255,255,255); text-decoration:none; font-weight:600;">Medicines</a></li>
    <li style="margin-left:15px;"><a href="registration.php" style="color: rgb(255,255,255); text-decoration:none; font-weight:600;">Register</a></li>
    <li style="margin-left:15px;"><a href="contact.php" style="color: rgb(255,255,255); text-decoration:none; font-weight:600;">Contact</a></li>
    <li style="margin-left:15px;"><a href="donation.php" style="color: rgb(255,255,255); text-decoration:none; font-weight:600;">Donate</a></li>
    <li style="margin-left:15px;"><a href="about_us.php" style="color: rgb(255,255,255); text-decoration:none; font-weight:600;">About Us</a></li>
  </ul>
</div>

<!-- Hero Section -->
<div style="
  position: relative;
  height: 330px;
  background: url('https://images.unsplash.com/photo-1617881770125-6fb0d039ecde?auto=format&fit=crop&w=1200&q=80') center/cover no-repeat;
  display: flex;
  justify-content: center;
  align-items: center;
">
  <!-- Dark overlay -->
  <div style="
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.45);
  "></div>

  <!-- Text -->
  <div style="position: relative; color: rgb(255,255,255); text-align:center; padding:20px;">
    <h1>Welcome to Online Medicine Shop</h1>
    <p>Your health, our priority</p>
  </div>
</div>

<!-- Features -->
<div style="max-width:1100px; margin:auto; padding:40px 20px; text-align:center;">
  <h2 style="color: rgb(12,100,189);">Why Choose Us?</h2>
  <div style="
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 25px;
    margin-top:25px;
  ">
    <div style="background: rgb(255,255,255); padding:25px; border-radius:10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1); transition:0.3s;">
      <i class="fas fa-truck" style="font-size:40px; color: rgb(12,100,189); margin-bottom:10px;"></i>
      <h3>Fast Delivery</h3>
      <p>Quick and safe doorstep delivery.</p>
    </div>
    <div style="background: rgb(255,255,255); padding:25px; border-radius:10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1); transition:0.3s;">
      <i class="fas fa-prescription-bottle-alt" style="font-size:40px; color: rgb(12,100,189); margin-bottom:10px;"></i>
      <h3>Quality Products</h3>
      <p>We provide only trusted medicines.</p>
    </div>
    <div style="background: rgb(255,255,255); padding:25px; border-radius:10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1); transition:0.3s;">
      <i class="fas fa-headset" style="font-size:40px; color: rgb(12,100,189); margin-bottom:10px;"></i>
      <h3>24/7 Support</h3>
      <p>We are always ready to help you.</p>
    </div>
  </div>
</div>

<!-- Footer -->
<div style="background: rgb(13,202,240); text-align:center; padding:20px; color: rgb(255,255,255); font-weight:600;">
  <p>Follow us:</p>
  <a><i class="fab fa-facebook-f" style="color: rgb(255,255,255); margin:0 10px; font-size:18px;"></i></a>
  <a><i class="fab fa-instagram" style="color: rgb(255,255,255); margin:0 10px; font-size:18px;"></i></a>
  <a><i class="fab fa-whatsapp" style="color: rgb(255,255,255); margin:0 10px; font-size:18px;"></i></a>
  <p>© 2025 Online Medicine Shop</p>
</div>

</body>
</html>


