-- Insert sample data into the 'todo' table
INSERT INTO todo (title, description, status, priority, category_tag) VALUES
    ('Todo 1', 'Description for Todo 1', 1, 2, 'Tag1,Tag2'),
    ('Todo 2', 'Description for Todo 2', 2, 3, 'Tag3,Tag4');

-- Insert sample data into the 'task' table
INSERT INTO task (title, description, todo_id, is_complete) VALUES
    ('Task 1', 'Description for Task 1', 1, false),
    ('Task 2', 'Description for Task 2', 1, true),
    ('Task 3', 'Description for Task 3', 2, false);

-- Insert sample data into the 'instruction' table
INSERT INTO instruction (description, task_id, is_ordered) VALUES
    ('Instruction 1 for Task 1', 1, true),
    ('Instruction 2 for Task 1', 1, true),
    ('Instruction 1 for Task 3', 3, true);
