**mysql -u [username] -p;**

// password prompt

**USE [database];**

**CREATE TABLE [tablename] (col1, col2, ...);**

**SHOW TABLES;**

**SHOW COLUMNS FROM [tablename];**

**INSERT INTO [tablename] (col1, col2) VALUES (val1, val2);**

// or

**INSERT [tablename] VALUES (val1, val2, val n);**

**SELECT * FROM [tablename];**

**SELECT [col1, col2] FROM [tablename];**

**SELECT NOW();**

---

// examples

**SELECT name FROM people WHERE birthday = '2000-01-01';**

**SELECT * FROM users WHERE last_name IN ('Geller', 'Green', 'Bing', 'Tribbiani', 'Buffay');**

**SELECT first_name FROM users WHERE last_name = 'Geller';**

**SELECT first_name FROM users WHERE last_name LIKE 'G%';**

**SELECT * FROM users WHERE email IS NULL;**

---

// an empty string is different than NULL

**SELECT * FROM users WHERE pass = '';**

**SELECT * FROM users WHERE pass = SHA1('bingo');**

**SELECT * FROM users WHERE (user_id < 10) OR (user_id > 20);**

**SELECT * FROM users WHERE user_id NOT BETWEEN 10 and 20;**

**SELECT * FROM users WHERE pass = '' ORDER BY email DESC;**

**SELECT first_name, last_name FROM users ORDER BY last_name ASC, first_name ASC;**

**SELECT * FROM users WHERE last_name != '' ORDER BY registration_date DESC;**

**SELECT * FROM users LIMIT 10;**

---

// y records returned, starting at x

**SELECT * FROM users LIMIT x, y;**

**SELECT * FROM users LIMIT 10, 10;** // records 11 through 20

**SELECT which_columns FROM tablename WHERE conditions ORDER BY column LIMIT x;**

---

// select last 5 registered users

**SELECT first_name, last_name FROM users ORDER BY registration_date DESC LIMIT 5;**

---

// Update records

**SELECT user_id FROM users WHERE last_name='Cooper' AND first_name='Sheldon';**

**UPDATE users SET pass=SHA1('password') WHERE user_id=10 LIMIT 1;**

---

// Delete a record

**DELETE FROM tablename WHERE condition;**

**SELECT user_id FROM users WHERE fist_name = 'Gunther' AND last_name = 'Centralperk';**

**SELECT * FROM users WHERE user_id = 10;**

**DELETE FROM users WHERE user_id = 10 LIMIT 1;**

---

// The preferred way to empty a table is:

**TRUNCATE TABLE tablename;**

---

// To delete all of the data in a table, as well as the table itself:

DROP TABLE tablename;

---

// To delete an entire database, including every table therein and all of its data:

**DROP DATABASE databasename;**

---

// Alias

**SELECT registratio_date AS Reg FROM users;**

---

### TEXT FUNCTIONS

CONCAT()
CONCAT_WS()
LENGTH()
LEFT()
RIGHT()
TRIM()
UPPER()
LOWER()
REPLACE()
SUBSTRING()

---

### NUMERIC FUNCTIONS

ABS()
CEILING()
FLOOR()
FORMAT()
MOD()
RAND()
ROUND()
SQRT()

---

### DATE AND TIME FUNCTIONS

DATE()
HOUR()
MINUTE()
SECOND()
DAYNAME()
DAYOFMONTH()
MONTHNAME()
MONTH()
YEAR()
CURDATE()
CURTIME()
NOW()
UNIX_TIMESTAMP()
UTC_TIMESTAMP()

---

### \*\_FORMAT() PARAMETERS

%e
%d
%D
%W
%a
%c
%m
%M
%b
%Y
%y
%l
%h
%k
%H
%i
%S
%r
%T
%p

---

**SHOW ENGINES;**

**SHOW CHARACTER SET;**

**SHOW COLLATION LIKE 'charset%';**

CREATE TABLE tablename (col1 COLUMNTYPE, col2 COLUMNTYPE ...) ENGINE = type;

---

UTC_DATE()

UTC_TIME()

UTC_TIMESTAMP()

CONVERT_TZ(dt, from, to);

---

INDEX_TYPE index_name (columns)

INDEX full_name (last_name, first_name)

---

FOREIGN KEY (item_name) REFERENCES table (column);

ON DELETE action

ON UPDATE action

---

JOIN:

- SELECT forum_id FROM forums WHERE name='MySQL';

- SELECT * FROM messages WHERE forum_id=1;

=> SELECT what_columns FROM tableA JOIN_TYPE tableB JOIN_CLAUSE;

SELECT what_columns  FROM tableA JOIN_TYPE tableB JOIN_CLAUSE JOIN_TYPE tableC JOIN_CLAUSE;

---

AVG()
COUNT()
SUM()

SELECT AVG(balance) FROM accounts;

SELECT MAX(balance), MIN(balance) FROM accounts;

SELECT COUNT(*) FROM accounts;

SELECT COUNT(DISTINCT customer_id);

SELECT AVG(balance), customer_id FROM accounts GROUP BY customer_id;

SELECT what_columns FROM table WHERE condition GROUP BY column ORDER BY column LIMIT x, y;

---

CONCAT()

GROUP_CONCAT()

GREATEST()

SELECT GREATEST(col1, col2) FROM table;

LEAST()

SELECT LEAST(col1, col2) FROM table;

COALESCE()

SELECT COALESCE(col1, col2) FROM table;

SELECT IF (condition, return_if_true, return_if_false);

SELECT IF (gender='M', 'Male', 'Female');

INSERT INTO people (gender) VALUES (IF(something='Male', 'M', 'F'));

CASE()

SELECT CASE col1 WHEN value1 THEN return_this ELSE return_that END FROM table;

SELECT CASE gender WHEN 'M' THEN 'Male' ELSE 'FEMALE' END FROM people;

---

ALTER TABLE tablename CLAUSE

ADD COLUMN
CHANGE COLUMN
DROP COLUMN
ADD INDEX
DROP INDEX
RENAME TO

ALTER TABLE messages ENGINE = MyISAM;
ALTER TABLE messages ADD FULLTEXT (body, subject);

---

SHOW TABLE STATUS\G

SHOW TABLE STATUS LIKE 'messages'

---

SELECT * FROM tablename WHERE MATCH (columns) AAINST (terms);

SELECT * FROM tablename WHERE MATCH (columns) AGAINST ('terms' IN BOOLEAN MODE);

SELECT * FROMT tablename WHERE MATCH (columns) AGAINST ('+database -mysql' IN BOOLEAN MODE);

\+
\-
\~
\*
\<
\>
\" "
()

---

OPTIMIZE TABLE tablename;

ANALYZZE TABLE tablename;

EXPLAIN()

EXPLAIN EXTENDED()

---

START TRANSACTION;

COMMIT;

ROLLBACK;

SAVEPOINT savename;
ROLLBACK TO SAVEPOINT savename;

---

AES_ENCRYPT()
AES_DECRYPT()

INSERT INTO users (username, pass) VALUES ('troutster', AES_ENCRYPT('mypass', 'salthere'));