<?php  require_once('../private/initialize.php'); ?>

<?php  include(SHARED_PATH . '/public_header.php'); ?>
<?php  include(SHARED_PATH . '/public_backlink.php'); ?>

<h1>my_dashboard root</h1>
<?php 

$todo = Todo::find_all();
echo '<pre>';
var_dump($todo);
echo '</pre>';
?>

<?php  include(SHARED_PATH . '/public_footer.php'); ?>
