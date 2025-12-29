<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us</title>

<style>
body{
  margin:0;
  font-family: Arial, sans-serif;
  background:#e3f2fd;
}

/* Header */
header{
  background:#1976d2;
  color:white;
  text-align:center;
  padding:60px 20px;
}
header p{
  font-weight:bold;
  color:#ffffff;
}

/* Box */
.container{
  max-width:850px;
  margin:30px auto;
  background:white;
  padding:25px;
  border-radius:10px;
}

/* Text */
h2{
  text-align:center;
  color:#1976d2;
}
p{
  text-align:center;
  color:#555;
}

/* Contact info */
.info{
  display:flex;
  gap:15px;
  margin:25px 0;
}
.box{
  background:#f1f8ff;
  padding:18px;
  border-radius:8px;
  text-align:center;
  flex:1;
}

/* Form */
input, textarea{
  width:100%;
  padding:10px;
  margin-bottom:10px;
  border:1px solid #ccc;
  border-radius:5px;
}
button{
  width:100%;
  padding:12px;
  background:#1976d2;
  color:white;
  border:none;
  border-radius:5px;
  cursor:pointer;
}

/* Map */
iframe{
  width:100%;
  height:220px;
  margin-top:20px;
  border:0;
}

/* Mobile */
@media(max-width:600px){
  .info{ flex-direction:column; }
}
</style>
</head>

<body>

<header>
  <h1>Contact Online Medicine Shop</h1>
  <p>We are here to help you</p>
</header>

<div class="container">

<h2>Get in Touch</h2>
<p>Contact us for any support or questions</p>

<div class="info">
  <div class="box">
    <b>📍 Address</b>
    <p>Dhaka, Bangladesh</p>
  </div>
  <div class="box">
    <b>📧 Email</b>
    <p>info@medicinestore.com</p>
  </div>
  <div class="box">
    <b>📞 Phone</b>
    <p>+880 1234 567890</p>
  </div>
</div>

<form>
  <input type="text" placeholder="Your Name">
  <input type="email" placeholder="Your Email">
  <input type="text" placeholder="Subject">
  <textarea rows="4" placeholder="Your Message"></textarea>
  <button>Send Message</button>
</form>

<iframe src="https://www.google.com/maps?q=Dhaka,Bangladesh&output=embed"></iframe>

</div>

</body>
</html>
