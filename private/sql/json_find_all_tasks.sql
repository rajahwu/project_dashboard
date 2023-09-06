SELECT
    JSON_OBJECT(
        'todo_id', t.id,
        'todo_title', t.title,
        'todo_description', t.description,
        'todo_status', t.status,
        'todo_priority', t.priority,
        'todo_category_tag', t.category_tag,
        'tasks', JSON_ARRAYAGG(
            JSON_OBJECT(
                'task_id', tk.id,
                'task_title', tk.title,
                'task_description', tk.description,
                'task_is_complete', tk.is_complete,
                'instructions', JSON_ARRAYAGG(
                    JSON_OBJECT(
                        'instruction_id', i.id,
                        'instruction_description', i.description,
                        'instruction_is_complete', i.is_complete,
                        'instruction_is_ordered', i.is_ordered,
                        'instruction_step', i.step
                    )
                )
            )
        )
    ) AS result_json
FROM todo AS t
LEFT JOIN task AS tk ON t.id = tk.todo_id
LEFT JOIN instruction AS i ON tk.id = i.task_id
GROUP BY t.id;
