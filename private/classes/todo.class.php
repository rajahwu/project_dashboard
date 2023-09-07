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

    static public function find_all_with_task() {
        // $sql = file_get_contents(PRIVATE_PATH . '/sql/find_all_todos.sql');
        // $sql = "SELECT * FROM " . static::$table_name;
    $sql = 'SELECT ';
    $sql .= 't.id AS todo_id, ';
    $sql .= 't.title AS todo_title, ';
    $sql .= 't.description AS todo_description, ';
    $sql .= 't.status AS todo_status, ';
    $sql .= 't.priority AS todo_priority, ';
    $sql .= 't.category_tag AS todo_category_tag, ';

    $sql .= 'tk.id AS task_id, ';
    $sql .= 'tk.title AS task_title, ';
    $sql .= 'tk.description AS task_description, ';
    $sql .= 'tk.is_complete AS task_is_complete, ';

    $sql .= 'i.id AS instruction_id, ';
    $sql .= 'i.description AS instruction_description, ';
    $sql .= 'i.is_complete AS instruction_is_complete, ';
    $sql .= 'i.is_ordered AS instruction_is_ordered, ';
    $sql .= 'i.step AS instruction_step ';
    
    $sql .= 'FROM ' . static::$table_name . ' AS t ';

$sql .= 'LEFT JOIN task AS tk ON t.id = tk.todo_id ';
$sql .= 'LEFT JOIN instruction AS i ON tk.id = i.task_id ';

        return static::find_by_sql($sql);
      }
    
}
?>