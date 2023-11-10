CREATE TABLE posts (
    Id INT PRIMARY KEY,
    Title VARCHAR(255),
    Body TEXT,
    Author VARCHAR(100),
    Created_at TIMESTAMP
);

INSERT INTO posts (Title, Body, Author, Created_at) VALUES
('Naslov 1', 'Sadržaj 1', 'Igor', NOW()),
('Naslov 2', 'Sadržaj 2', 'IgorB', NOW()),
('Naslov 3', 'Sadržaj 3', 'Igor Bodor', NOW());

CREATE TABLE comments (
    Id INT PRIMARY KEY,
    Author VARCHAR(100),
    Text TEXT,
    Post_id INT,
    FOREIGN KEY (Post_id) REFERENCES posts(Id)
);

INSERT INTO comments (Author, Text, Post_id) VALUES
('Pera', 'Odlican artikal!', 1),
('Marko', 'Super!', 1),
('Nikola', 'Veoma interesantno!', 2),
('Nemanja', 'Zanimljivo!', 2),
('Sale', 'Hvala!', 3);