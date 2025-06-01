<?php
$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';

if (empty($username) || empty($email)) {
    header("Location: error.php");
    exit();
}

include 'components/header.php';
date_default_timezone_set("Asia/Jakarta");
$time = date("H:i:s");
$date = date("d-m-Y");
$day = date("l");
?>

<div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="login-glass text-center p-4">
    <!-- Icon berhasil login -->
    <div class="mb-3">
      <i class="bi bi-check-circle-fill fs-1 text-success"></i>
    </div>

    <!-- Judul Selamat Datang -->
    <h2 class="judul mb-2" style="color: #fff; text-shadow: 1px 1px 3px rgba(0,0,0,0.4);">
      Welcome, <?= htmlspecialchars($username); ?>!
    </h2>

    <!-- Kalimat berhasil login -->
    <p class="fst-italic fs-6" style="color: #fff; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.9);">
      🎉 You have successfully logged in to our website.
    </p>

    <!-- Detail login -->
    <div class="text-start mt-4" style="color: #ffffff; text-shadow: 1px 1px 3px rgba(0,0,0,0.3);">
      <p>
        <i class="bi bi-envelope-fill me-2 icon-email"></i>
        <strong>Email:</strong> <?= htmlspecialchars($email); ?>
      </p>
      <p>
        <i class="bi bi-calendar-event me-2 icon-hari"></i>
        <strong>Hari:</strong> <?= $day; ?>
      </p>
      <p>
        <i class="bi bi-calendar-check me-2 icon-tanggal"></i>
        <strong>Tanggal:</strong> <?= $date; ?>
      </p>
      <p>
        <i class="bi bi-clock-fill me-2 icon-jam"></i>
        <strong>Jam Login:</strong> <?= $time; ?>
      </p>
    </div>

    <!-- Tombol Logout -->
    <a href="index.php" class="btn btn-outline-light mt-4 rounded-pill px-4">Logout</a>
  </div>
</div>