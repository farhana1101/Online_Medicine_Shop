<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us | Online Medicine Shop</title>
<style>
  body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    background: lightblue;
    color: black;
  }

  header {
    background: blue;
    color: white;
    text-align: center;
    padding: 70px 20px;
  }
  header h1 { margin: 0; font-size: 36px; }
  header p { margin-top: 8px; font-size: 16px; }

  .container {
    max-width: 900px;
    margin: 40px auto;
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: gray 0px 8px 20px;
  }

  h2 { text-align: center; color: blue; margin-bottom: 10px; }
  p.description { text-align: center; margin-bottom: 30px; }

  /* Contact details boxes */
  .contact-details { display: flex; flex-wrap: wrap; gap: 15px; justify-content: center; margin-bottom: 30px; }
  .details-box {
    flex: 1 1 220px;
    background: aliceblue;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    box-shadow: gray 0px 4px 10px;
    transition: transform 0.3s;
  }
  .details-box:hover { transform: translateY(-5px); }
  .details-box h3 { margin-bottom: 8px; color: blue; }
  .details-box p { margin: 0; }

  /* Form */
  form { display: flex; flex-direction: column; gap: 15px; }
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

  /* Map */
  .map { margin-top: 25px; border-radius: 10px; overflow: hidden; box-shadow: gray 0px 4px 10px; }
  iframe { width: 100%; height: 250px; border: 0; }

  /* Social icons */
  .social-icons { text-align: center; margin-top: 20px; }
  .social-icons a {
    margin: 0 12px;
    font-size: 20px;
    color: blue;
    text-decoration: none;
    transition: 0.3s;
  }
  .social-icons a:hover { color: darkblue; }

  @media(max-width: 600px){
    .contact-details { flex-direction: column; }
  }
</style>
</head>
<body>

<header>
  <h1>Contact Online Medicine Shop</h1>
  <p>We are here to help you anytime 💙</p>
</header>

<div class="container">

  <h2>Get in Touch</h2>
  <p class="description">Have questions or need assistance? Reach out to us using the form or contact details below.</p>

  <!-- Contact Details -->
  <div class="contact-details">
    <div class="details-box">
      <h3>📍 Address</h3>
      <p>123 Main Street, Dhaka, Bangladesh</p>
    </div>
    <div class="details-box">
      <h3>📧 Email</h3>
      <p>info@medicinestore.com</p>
    </div>
    <div class="details-box">
      <h3>📞 Phone</h3>
      <p>+880 1234 567890</p>
    </div>
  </div>

  <!-- Contact Form -->
  <form action="#" method="POST">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <input type="text" name="subject" placeholder="Subject" required>
    <textarea name="message" rows="4" placeholder="Your Message" required></textarea>
    <button type="submit">Send Message</button>
  </form>

  <!-- Map -->
  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.907963182209!2d90.3976!3d23.7776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7b0d0cb9bbf%3A0x3b7a6e056d8d1a6b!2sDhaka%2C%20Bangladesh!5e0!3m2!1sen!2sus!4v1699700000000!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
  </div>

  <!-- Social Icons -->
  <div class="social-icons">
    <a href="#">🌐</a>
    <a href="#">📧</a>
    <a href="#">📱</a>
  </div>

</div>

</body>
</html>

