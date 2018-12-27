-- 打开数据库 psd1611
USE psd1611;

-- 查看表
SHOW TABLES;
-- 创建表结构 users
CREATE TABLE users(
  username varchar(30),
  age int
);
-- 查看表结构
DESC users;

DESCRIBE users;
SHOW COLUMNS FROM users;

-- 查看创建表结构命令 users
SHOW CREATE TABLE users;

-- 给表users 添加数据
insert users(username,age)
value
('tom',18),
('rose',18),
('alice',18);

-- 查询表users中的所有记录(行)
select * from users;

-- 给表users 添加中文数据
-- 在windows 命令窗口中  添加和显示中文
-- 命令窗口cmd 中文编码 SET NAMES gbk; 
-- 才能和 MySQL数据库通讯中文
SET NAMES gbk;
insert users(username,age)
value
('张三',18),
('李四',20);
select * from users;


 



























