<?php  require_once('../../private/initialize.php'); ?>

<?php  include(SHARED_PATH . '/public_header.php'); ?>
<?php  include(SHARED_PATH . '/public_backlink.php'); ?>

<?php 

$todos = Todo::find_all();
// show_todos_data($todos);
?>

<h1>Todos</h1>
<table id="inventory">
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


<?php  include(SHARED_PATH . '/public_footer.php'); ?>
