<?php  require_once('../private/initialize.php'); ?>

<?php  include(SHARED_PATH . '/public_header.php'); ?>
<?php  include(SHARED_PATH . '/public_backlink.php'); ?>


<div class="hero min-h-screen bg-base-200">
  <div class="hero-content text-center">
    <div class="max-w-md">
      <h1 class="text-5xl font-bold">Hello User</h1>
      <p class="py-6">Welcome to my Dashboard</p>
      <a href="./todos" class="btn btn-primary">See Todo</a>
    </div>
  </div>
</div>

<?php  include(SHARED_PATH . '/public_footer.php'); ?>
