<?php 
  require_once 'init.php';
  require_once 'functions.php';
  // Xử lý logic ở đây
  $page = 'index';
  $posts = findAllPosts();
?>
<?php include 'header.php'; ?>
<h1>Trang chủ</h1>
<p><?php if ($currentUser): ?>
Xin chào <?php echo $currentUser['fullName']; ?>. Chúc một ngày tốt lành.
<?php else: ?>
Chào mừng bạn đến với mạng xã hội...
<?php endif; ?>
</p>
<?php foreach ($posts as $post) : ?>

<div class="card">
  <div class="card-body">
    <h5 class="card-title"><?php echo $post['fullName']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $post['createdAt']; ?></h6>
    <p class="card-text"><?php echo $post['content']; ?></p>
  </div>
</div>
<?php endforeach; ?>
<?php include 'footer.php'; ?>