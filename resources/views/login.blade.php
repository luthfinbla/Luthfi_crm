<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="/css/style.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
  <div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
  </div>
  <form method="POST" action="{{ route('login') }}">
    @csrf
    <h3>Login Here</h3>

    <label for="email">Email</label>
    <input type="email" placeholder="Email" id="email" name="email" required>
    
    <label for="password">Password</label>
    <input type="password" placeholder="Password" id="password" name="password" required>
    <button type="submit">Log In</button>
    
    <div class="social">
      <div class="go"><i class="fab fa-google"></i> Google</div>
      <div class="fb"><i class="fab fa-facebook"></i> Facebook</div>
    </div>
  </form>
  
</body>
</html>
