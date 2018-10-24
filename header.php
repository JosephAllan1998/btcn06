<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">BTCN06</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php echo $page == 'index' ? 'active' : ''?>">
        <a class="nav-link" href="index.php">Trang chủ</a>
      </li>
      <?php if (!$currentUser): ?>
      <li class="nav-item <?php echo $page == 'register' ? 'active' : ''?>">
        <a class="nav-link" href="register.php">Đăng ký</a>
      </li>
      <li class="nav-item <?php echo $page == 'login' ? 'active' : ''?>">
        <a class="nav-link" href="login.php">Đăng nhập</a>
      </li>
      <?php else: ?>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Đăng xuất</a>
      </li>
      <?php endif; ?>
  </div>
</nav>