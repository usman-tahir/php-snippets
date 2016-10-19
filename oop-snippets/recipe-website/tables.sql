
CREATE TABLE recipes (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(400) NOT NULL,
  description TEXT,
  category_id INT,
  chef VARCHAR(255),
  created DATETIME
);

CREATE TABLE categories (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(400) NOT NULL
);