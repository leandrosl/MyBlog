-- MyBlog database script --

-- tables --
CREATE TABLE post (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    author_id INT,
    title VARCHAR(200),
    post_text TEXT
);