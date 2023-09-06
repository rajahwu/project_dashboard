<?php
class Todo extends DatabaseObject {
    static protected $table_name = 'todo';
    static protected $db_columns = ['id', 'title', 'description', 'status', 'priority', 'category_tag'];

    public $id;
    public $title;
    public $description;
    public $status;
    public $priority;
    public $category_tag;

    public const STATUS_CODES = ['backlog', 'in_progress', 'complete'];
    public const PRIORITY_CODES = array(1,2,3,4,5);

    public function __construct($args=[]) {
        $this->title = $args['title'] ?? '';
        $this->title = $args['description'] ?? '';
        $this->title = $args['status'] ?? 0;
        $this->title = $args['priority'] ?? 3;
        $this->title = $args['category_tag'] ?? '';
    }
}
?>