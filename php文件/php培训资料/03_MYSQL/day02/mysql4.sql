-- select 字段名,字段名... from 表名;
-- 查询 cms_user 中 用户名 name和 
-- 地址 address字段的所有记录u
select address,name from cms_user;

-- 查询 cms_user 中 用户名 name和 
-- 地址 address字段的所有记录 并且给 adresss 起别名为addr
select address as addr,name from cms_user;
-- 查询 cms_user 中 用户名 name和 
-- 地址 address字段的所有记录并且给表名起别名是u
-- 标注  字段来自哪个表
select u.address,u.name from cms_user as u;

select address,name from psd1611.cms_user;

update cms_user set age=17 where id=2;
update cms_user set address='上海' where id=3;
--  查询  cms_user 表 中 编号小于等 3的记录
--  查询  cms_user 表 中 编号大于 6的记录
--  查询  cms_user 表 中 编号不等于 7的记录
select * from cms_user where id<=3; 
select * from cms_user where id>6;
select * from cms_user where id<>7;

-- 查询  cms_user 表 中 编号 3-6条的记录
select * from cms_user where id between 3 and 6;
select * from cms_user where id>=3 and id<=6;
-- 查询  cms_user 表 中 编号 不是3-6条的记录
select * from cms_user where id not between 3 and 6;
select * from cms_ungser where id<3 or id>6;


-- 查询  cms_user 表 中 编号 2 5 8记录
select * from cms_user where id in(2,5,8);
select * from  cms_user where id=2 or id=5 or
id=8;
-- 查询  cms_user 表 中 编号 不是2 5 8记录
select * from cms_user where id not in(2,5,8);
select * from cms_user where id<>2 and id<>5 and id<>8;

--查询 用户名是  tom 和密码是 hello 的记录（登录）
select * from cms_user where name='tom' and pwd='hello';
-- 查询cms_user 表 中 年龄age 大于等于 19 并且 address 是天津的记录
-- 查询cms_user 表 中编号在 2-7之间 并且address 是上海的记录 
-- 查询cms_user 表 中 编号大于等于5 或 是 age 大于等于 19的记录
select * from cms_user where age>=19 and address='天津';
select * from cms_user where id>=2 and id<=7 and address='上海';
select * from cms_user where id>=5 or age>=19;

-- 查询 cms_user 表 name字段中包含 字母 a的记录
select * from cms_user where name like '%a%';
-- 查询 cms_user 表 name字段中第二个字母是o的记录
select * from cms_user where name like '_o%';

--  查询 cms_user 表 name字段中是4个字母的记录
select * from cms_user where name like '____';
--  查询 cms_user 表  name字段 倒数第二个是l 或
-- age大于等于19的记录
select * from cms_user where name like '%l_'
or  age>=19;












