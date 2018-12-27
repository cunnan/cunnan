-- 创建表结构  cms_user
CREATE TABLE cms_user(
  id int unsigned PRIMARY KEY AUTO_INCREMENT,
  name varchar(30) NOT NULL UNIQUE,
  pwd char(32) NOT NULL,
  age tinyint unsigned NOT NULL DEFAULT 18,
  sex tinyint(1) NOT NULL DEFAULT 0,
  email varchar(50) NOT NULL UNIQUE
);
-- 添加表数据
insert cms_user(name,pwd,email)
value
('tom','tom123','11@163.com'),
('rose','rose123','22@163.com'),
('alice','rose123','33@163.com');
-- 查询表中的数据
select * from cms_user;
















