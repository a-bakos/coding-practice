mysql -u [username] -p;
// password prompt

USE [database];
CREATE TABLE [tablename] (col1, col2, ...);

SHOW TABLES;
SHOW COLUMNS FROM [tablename];

INSERT INTO [tablename] (col1, col2) VALUES (val1, val2);
// or
INSERT [tablename] VALUES (val1, val2, val n);

SELECT * FROM [tablename];
SELECT [col1, col2] FROM [tablename];
SELECT NOW();

// examples
SELECT name FROM people WHERE birthday = '2000-01-01';

SELECT * FROM users WHERE last_name IN ('Geller', 'Green', 'Bing', 'Tribbiani', 'Buffay');

SELECT first_name FROM users WHERE last_name = 'Geller';
SELECT first_name FROM users WHERE last_name LIKE 'G%';

SELECT * FROM users WHERE email IS NULL;
// an empty string is different than NULL
SELECT * FROM users WHERE pass = '';

SELECT * FROM users WHERE pass = SHA1('bingo');

SELECT * FROM users WHERE (user_id < 10) OR (user_id > 20);
SELECT * FROM users WHERE user_id NOT BETWEEN 10 and 20;
