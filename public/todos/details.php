<?php require_once('../../private/initialize.php'); ?>

<?php  include(SHARED_PATH . '/public_header.php'); ?>
<?php  include(SHARED_PATH . '/public_backlink.php'); ?>



<?php
  $id = $_GET['id'] ?? false;
  
  if(!$id) {
    redirect_to('bicycles.php');
  }
  $todo = Todo::find_by_id($id);
  
  if($todo->id != $id) {
      redirect_to("..");
  }
  
  ?>
  <p><?php echo "todo id: " . h($todo->id); ?></p>
  <p><?php echo "priority: " . h($todo->priority); ?></p>
  <p><?php echo "title: " . h($todo->title); ?></p>
  <p><?php echo "status: " . $todo::STATUS_CODES[$todo->status]; ?></p>
  <p><?php echo "tags: " . h($todo->category_tag); ?></p>
  <p><?php echo "description: " . h($todo->description); ?></p>
  
  <?php  include(SHARED_PATH . '/public_footer.php'); ?>
