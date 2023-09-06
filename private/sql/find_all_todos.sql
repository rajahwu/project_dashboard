SELECT
    t.id AS todo_id,
    t.title AS todo_title,
    t.description AS todo_description,
    t.status AS todo_status,
    t.priority AS todo_priority,
    t.category_tag AS todo_category_tag,
    
    tk.id AS task_id,
    tk.title AS task_title,
    tk.description AS task_description,
    tk.is_complete AS task_is_complete,
    
    i.id AS instruction_id,
    i.description AS instruction_description,
    i.is_complete AS instruction_is_complete,
    i.is_ordered AS instruction_is_ordered,
    i.step AS instruction_step
    
FROM todo AS t

LEFT JOIN task AS tk ON t.id = tk.todo_id
LEFT JOIN instruction AS i ON tk.id = i.task_id;
