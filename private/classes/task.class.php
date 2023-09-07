<?php
class Task extends DatabaseObject {
    static protected $table_name = 'task';
    static protected $db_columns = ['id', 'title', 'description', 'todo_id', 'is_complete'];

    public $id;
    public $title;
    public $description;
    public $todo_id;
    public $is_complete;

    public function __construct($args=[]) {
        $this->title = $args['title'] ?? '';
        $this->title = $args['description'] ?? '';
        $this->title = $args['todo_id'] ?? 0;
        $this->title = $args['id_complete'] ?? false;
    }


}
?>