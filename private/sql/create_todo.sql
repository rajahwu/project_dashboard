USE project_dashboard;

CREATE TABLE IF NOT EXISTS todo (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255),
    description TEXT,
    status INT,
    priority INT,
    category_tag TEXT
);

-- Create the 'task' table
CREATE TABLE IF NOT EXISTS task (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255),
    description TEXT,
    todo_id INT,
    is_complete BOOLEAN,
    FOREIGN KEY (todo_id) REFERENCES todo(id) ON DELETE CASCADE
);

-- Create the 'instruction' table
CREATE TABLE IF NOT EXISTS instruction (
    id INT PRIMARY KEY AUTO_INCREMENT,
    description TEXT,
    task_id INT,
    is_complete BOOLEAN DEFAULT false,
    is_ordered BOOLEAN DEFAULT true,
    step INT DEFAULT 0,
    FOREIGN KEY (task_id) REFERENCES task(id) ON DELETE CASCADE
);
