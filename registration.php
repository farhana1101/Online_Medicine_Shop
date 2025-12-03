<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register - Online Medicine Shop</title>
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
    <h2>Register</h2>
    <form id="registerForm" method="POST" action="">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <button type="submit">Register</button>
        <p class="error" id="errorMsg"></p>
    </form>
    <div class="link">
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</div>

<script>
document.getElementById('registerForm').addEventListener('submit', function(e){
    const form = e.target;
    const name = form.name.value.trim();
    const email = form.email.value.trim();
    const password = form.password.value;
    const confirm = form.confirm_password.value;
    const errorMsg = document.getElementById('errorMsg');

    errorMsg.textContent = "";

    if(name === "" || email === ""){
        e.preventDefault();
        errorMsg.textContent = "Name and Email are required!";
        return;
    }
    if(password !== confirm){
        e.preventDefault();
        errorMsg.textContent = "Passwords do not match!";
        return;
    }

    alert("Registration successful! (Front-end demo only)");
});
</script>

</body>
</html>
