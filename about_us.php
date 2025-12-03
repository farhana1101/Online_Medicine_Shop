<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us | Online Medicine Shop</title>
<style>
    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background: lightblue;
        color: black;
    }

    header {
        background: blue;
        text-align: center;
        padding: 80px 20px;
        color: white;
    }
    header h1 { font-size: 40px; margin: 0; }
    header p { font-size: 18px; margin-top: 10px; }

    section { max-width: 900px; margin: 40px auto; padding: 0 20px; }

    /* Story Section */
    .story { display: flex; flex-wrap: wrap; gap: 20px; align-items: center; }
    .story img {
        max-width: 400px;
        width: 100%;
        border-radius: 15px;
        box-shadow: gray 0px 8px 25px;
        transition: transform 0.3s;
    }
    .story img:hover { transform: scale(1.05); }
    .story div { flex: 1; min-width: 250px; }

    /* Core Values */
    .values { display: flex; flex-wrap: wrap; gap: 15px; justify-content: center; margin-top: 40px; }
    .value {
        background: lightcyan;
        padding: 20px;
        border-radius: 15px;
        text-align: center;
        width: 200px;
        transition: transform 0.3s, background 0.3s;
    }
    .value:hover { transform: translateY(-6px); background: aliceblue; }
    .value img { width: 50px; margin-bottom: 10px; }
    .value h4 { color: blue; margin-bottom: 8px; }
    .value p { font-size: 14px; }

    /* Health Tips */
    .tips { background: white; padding: 25px; border-radius: 12px; margin-top: 40px; box-shadow: gray 0px 4px 15px; }
    .tips h4 { margin-bottom: 10px; color: blue; }
    .tips ul { padding-left: 20px; line-height: 1.6; }

    /* Customer Testimonial */
    .testimonial {
        background: aliceblue;
        padding: 25px;
        border-radius: 15px;
        margin-top: 40px;
        text-align: center;
        font-style: italic;
        box-shadow: gray 0px 4px 15px;
    }

    /* CTA */
    .cta { text-align: center; margin: 40px 0; }
    .cta a {
        background: blue;
        color: white;
        padding: 12px 25px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: bold;
        transition: 0.3s;
    }
    .cta a:hover { background: darkblue; }

    @media(max-width:768px){
        .story { flex-direction: column; }
    }
</style>
</head>
<body>

<header>
    <h1>About Online Medicine Shop</h1>
    <p>Your trusted pharmacy delivering care and medicines to every home 💙</p>
</header>

<section>
    <!-- Story -->
    <div class="story">
        <img src="https://img.freepik.com/free-photo/medicine-tablets-capsules-blue-background_1150-17437.jpg" alt="Online Medicine Shop">
        <div>
            <h3>Our Journey</h3>
            <p>We started Online Medicine Shop to make healthcare simple, fast, and accessible.  
            Trusted medicines, friendly support, and quick delivery are our promise to every customer.</p>
        </div>
    </div>

    <!-- Core Values -->
    <div class="values">
        <div class="value">
            <img src="https://cdn-icons-png.flaticon.com/512/1250/1250615.png" alt="Authenticity">
            <h4>Authenticity</h4>
            <p>Only genuine medicines from verified suppliers.</p>
        </div>
        <div class="value">
            <img src="https://cdn-icons-png.flaticon.com/512/833/833472.png" alt="Customer Care">
            <h4>Customer Care</h4>
            <p>We prioritize your health and satisfaction.</p>
        </div>
        <div class="value">
            <img src="https://cdn-icons-png.flaticon.com/512/1162/1162499.png" alt="Innovation">
            <h4>Innovation</h4>
            <p>Fast and safe delivery using smart technology.</p>
        </div>
    </div>

    <!-- Health Tips -->
    <div class="tips">
        <h4>Health Tips</h4>
        <ul>
            <li>Keep medicines in a cool, dry place.</li>
            <li>Check expiry dates before use.</li>
            <li>Do not share prescription medicines.</li>
            <li>Consult a doctor before new supplements.</li>
        </ul>
    </div>

    <!-- Customer Testimonial -->
    <div class="testimonial">
        "Quick delivery and friendly support! I trust Online Medicine Shop for all my family’s health needs." — Monira, Dhaka
    </div>

    <!-- Call to Action -->
    <div class="cta">
        <a href="contact.php">Contact Us for Help</a>
    </div>
</section>

</body>
</html>





