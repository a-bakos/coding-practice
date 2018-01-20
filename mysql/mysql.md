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

**UPDATE users SET pass=SHA1('password) WHERE user_id=10 LIMIT 1;**

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

