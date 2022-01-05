CREATE DATABASE advice;

USE advice;
CREATE TABLE users 
(
    id int primary key auto_increment, 
    username varchar(255), 
    password varchar(255) 
);

-- insert a row into the users table:
-- username = foo
-- password = bar
INSERT INTO users (username, password) VALUES ('foo', '$2y$10$IWDcVmWIHlx5nI5A.18gNOUDoJZgdfWJwFMamea9JaUK9M.iTx8g.');
