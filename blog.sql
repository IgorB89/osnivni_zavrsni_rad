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