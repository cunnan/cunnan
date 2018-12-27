-- 对  cms_user 表添加数据
--  (1)不带字段的添加(从第一个字段到最后一个字段都要赋值)
insert cms_user
value
(5,'jerry','jerry123',20,1,'上海','55@163.com');
-- 带字段添加
insert cms_user(name,pwd,email)
value
('tom','hello','11@163.com'),
('alice','hello','22@163.com'),
('rose','hello','33@163.com'),
('tina','hello','44@163.com'),
('good','good123','77@163.com'),
('happy','happy','88@163.com'),
('world','world','99@163.com');

-- (3)insert...set... (只能添加一条记录)
insert cms_user set name='john',pwd='john123',
email='10@163.com';

-- 删除 编号是 3 的记录
delete from cms_user where id=3;
-- delete 清空整个表数据
delete from cms_user;
-- 添加一个记录  auto_increment不重置
insert cms_user(name,pwd,email)
value ('hello','hello','66@163.com');
-- truncate 清空整个表数据
truncate cms_user;
-- 添加一个记录  auto_increment重置
insert cms_user(name,pwd,email)
value ('hello','hello','66@163.com');

-- 更新 字段编号是 5的  age字段 值为 20
update cms_user set  age=20 where id=5;
-- 更新 字段   age字段 值年龄加+1
update cms_user set age=age+1;





























