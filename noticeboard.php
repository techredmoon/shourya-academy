
<?php 
  $title = 'Notice';
  $blogcard= 'Recent Blogs';
  $noticecard = '';
  require_once 'includes/header.php';
?>

<?php require_once 'includes/navbar.php'; ?>


<div class="container-fluid bg-info text-center">
  <div class="banner container">
    <h1 class="display-5 fw-bold lh-1 mb-3">Notice Board</h1>
    </div>
</div>

<div class="container-fluid bg-light text-center">
  <div class="container bg-warning">

      <?php require_once 'includes/noticecard.php'; ?>
    </div>
</div>




<?php require_once 'includes/blogcard.php'; ?>

<?php require_once 'includes/footer.php'; ?>

