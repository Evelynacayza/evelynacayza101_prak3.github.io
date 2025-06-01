<?php include 'components/header.php'; ?>
<div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="login-glass">
    <div class="icon-circle mb-3">
      <i class="bi bi-person-fill fs-1 text-white"></i>
    </div>
    <h2 class="judul text-white">Hi, Welcome!!</h2>
    <p class="text-white mb-4" style="font-size: 1rem;">Let’s get you logged in to continue exploring 🌸</p>

    <form action="loginprocess.php" method="POST">
      <div class="input-icon mb-3">
        <i class="bi bi-person-fill icon"></i>
        <input type="text" class="form-control input-field" name="username" placeholder="Username">
      </div>

      <div class="input-icon mb-3">
        <label for="email" class="visually-hidden">Email</label>
        <i class="bi bi-envelope-fill icon"></i>
        <input type="email" class="form-control input-field" name="email" placeholder="Email">
      </div>

      <div class="form-check text-start mb-3">
        <input class="form-check-input" type="checkbox" value="" id="rememberMe">
        <label class="form-check-label text-white" for="rememberMe">
          Remember me
        </label>
        <a href="#" class="float-end text-light text-decoration-none" style="font-size: 0.85rem;">Forgot password?</a>
      </div>

      <button type="submit" class="btn btn-light w-100 mt-3">LOGIN</button>
    </form>
  </div>
</div>
