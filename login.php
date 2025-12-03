<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - Online Medicine Shop</title>
<style>
body { font-family: Arial; background: #f4f4f4; display:flex; justify-content:center; align-items:center; height:100vh; margin:0; }
.form-container { background:#fff; padding:20px; border-radius:5px; box-shadow:0 3px 6px rgba(0,0,0,0.1); width:100%; max-width:400px; }
h2 { text-align:center; color:#0c64bd; }
form { display:flex; flex-direction:column; }
input { padding:10px; margin:10px 0; border-radius:3px; border:1px solid #ccc; }
button { padding:10px; border:none; border-radius:3px; background:#0c64bd; color:#fff; font-weight:bold; cursor:pointer; }
button:hover { background:#094a8c; }
.link { text-align:center; margin-top:10px; }
.link a { text-decoration:none; color:#0c64bd; }
.error { color:red; font-size:14px; }
</style>
</head>
<body>

<div class="form-container">
    <h2>Login</h2>
    <form id="loginForm" method="POST" action="">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
        <p class="error" id="loginError"></p>
    </form>
    <div class="link">
        <p>Don't have an account? <a href="registration.php">Register</a></p>
    </div>
</div>

<script>
document.getElementById('loginForm').addEventListener('submit', function(e){
    const form = e.target;
    const email = form.email.value.trim();
    const password = form.password.value;
    const loginError = document.getElementById('loginError');

    loginError.textContent = "";

    if(email === "" || password === ""){
        e.preventDefault();
        loginError.textContent = "Email and Password are required!";
        return;
    }

    alert("Login successful! (Front-end demo only)");
});
</script>

</body>
</html>

