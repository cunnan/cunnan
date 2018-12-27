-- 创建一个 表结构 admin1
-- 列约束
CREATE TABLE admin1(
 id int unsigned PRIMARY KEY AUTO_INCREMENT,
 name varchar(30) NOT NULL
);

-- 表约束
CREATE TABLE admin1(
 id int unsigned  AUTO_INCREMENT,
 name varchar(30) NOT NULL,
 pwd int not null,
 PRIMARY KEY(id),
 UNIQUE KEY(name),
 unique key(pwd)
 
);

-- 给  num1 num2 字段同时添加主键
-- 一个表中只能有一个主键 ，num1 num2 同时作为一个主键
--错误的 一个有两个主键了 错误的
--CREATE TABLE test(
-- num1 int unsigned PRIMARY KEY,
-- num2 int unsigned PRIMARY KEY
--);

-- 两个字段同时为主键 
-- 必须用表约束
CREATE TABLE admin3(
   num1 int unsigned,
   num2 int unsigned,
   PRIMARY KEY(num1,num2)
);
--如果 再添加一个(1,1) 两字段的值都重复才是主键重复
-- 一个字段值重复不叫主键重复
insert admin3(num1,num2)
value
(1,1),
(1,2),
(2,1);















