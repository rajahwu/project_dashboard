<?php  require_once('../../private/initialize.php'); ?>

<?php  include(SHARED_PATH . '/public_header.php'); ?>
<?php  include(SHARED_PATH . '/public_backlink.php'); ?>

<?php 

$todos = Todo::find_all();
// $tasks = Task::find_all() ?? null;
// $instructions = Instruction::find_all() ?? null;
// show_todos_data($todos);
// $todos_with_tasks = Todo::find_all_with_task();

// print_query_results_data($todos_with_tasks);
echo "<pre>";
// print_r($todos_with_tasks);
  // print_r($todos);
  // print_r($tasks);
  // print_r($instructions);
echo "</pre>";
?>

<div class="prose">

  <h1>Todos</h1>
  <a href="create.php">Add todo</a>
  <table id="inventory" class="table">
    <tr>
      <th>id</th>
      <th>priority</th>
      <th>title</th>
      <th>status</th>
      <th>category_tag</th>
      <th>description</th>
      <th>&nbsp;</th>
    </tr>
    
    <?php foreach($todos as $todo) { ?>
      <tr>
        <td><?php echo h($todo->id); ?></td>
        <td><?php echo h($todo->priority); ?></td>
        <td><?php echo h($todo->title); ?></td>
        <td><?php echo $todo::STATUS_CODES[$todo->status]; ?></td>
        <td><?php echo h($todo->category_tag); ?></td>
        <td><?php echo h($todo->description); ?></td>
        <td><a href="details.php?id=<?php echo $todo->id; ?>">View</a></td>
      </tr>
      <?php } ?>
      
    </table>
  </div>


<?php  include(SHARED_PATH . '/public_footer.php'); ?>
