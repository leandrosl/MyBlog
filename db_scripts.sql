-- MyBlog database script --

-- tables --
CREATE TABLE post (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    author_id INT,
    title VARCHAR(200),
    post_text TEXT
);

CREATE TABLE authors (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(100),
    lastname VARCHAR(200),
    username VARCHAR(200) UNIQUE,
    password VARCHAR(255),
    birth_date DATE,
    birth_country VARCHAR(100),
    biography VARCHAR(255)
);