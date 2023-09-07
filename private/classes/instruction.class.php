<?php
class Instruction extends DatabaseObject {
    static protected $table_name = 'instruction';
    static protected $db_columns = ['id', 'title', 'description', 'todo_id', 'is_complete', 'is_ordered', 'step'];

    public $id;
    public $title;
    public $description;
    public $todo_id;
    public $is_complete;
    public $is_ordered;
    public $step;

    public function __construct($args=[]) {
        $this->title = $args['title'] ?? '';
        $this->title = $args['description'] ?? '';
        $this->title = $args['todo_id'] ?? 0;
        $this->title = $args['id_complete'] ?? false;
        $this->title = $args['id_ordered'] ?? true;
        $this->title = $args['step'] ?? 0;
    }


}
?>