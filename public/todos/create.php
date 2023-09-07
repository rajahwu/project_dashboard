<?php require_once('../../private/initialize.php'); ?>

<?php  include(SHARED_PATH . '/public_header.php'); ?>
<?php  include(SHARED_PATH . '/public_backlink.php'); ?>

<?php 
$todo = $_POST['todo'] ?? '';

if(!empty($todo)) {
    echo "<pre>";
    print_r($todo);
    echo "</pre>";
}

?>

<form action="create.php" method="post" class="flex flex-col prose">
    <label for="title">Title:</label>
    <input class="input bg-blue-100" type="text" name="todo[title]" placeholder="todo title">

    <label for="description">Description:</label>
    <textarea class="input bg-blue-100" name="todo[description]" id="description" rows="3" cols="5"></textarea>
    
    <label for="priority">Priority</label>
    <select class="select bg-blue-100"" type="text" name="todo[priority]">
        <option value=""></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <input class="input" type="hidden" name="todo[status]" value="0">
    <label for="category_tags">Category Tags:</label>
    <textarea class="input bg-blue-100" name="todo[category_tags]" id="" cols="3" rows="3"></textarea>
    <input type="submit" value="submit">
</form>

<?php  include(SHARED_PATH . '/public_footer.php'); ?>
