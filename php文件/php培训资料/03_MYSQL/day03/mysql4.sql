-- 子查询：where后
--         a.in
-- 结合 cms_user cms_prov 表
-- 查询 cms_user中 城市是北京的记录
-- 1. cms_prov表查找 北京对应的编号字段值
select id from cms_prov where pname='北京';
-- 2. 
select * from cms_user where address in
(select id from cms_prov where pname='北京');

-- 查询 cms_user中 城市是天津和上海的记录
select * from cms_user where address in
(select id from cms_prov where pname='天津'
or pname='上海');
--  多表联合查询
select u.id,u.name,u.address,p.pname
from cms_user as u
inner join cms_prov as p
on u.address=p.id
where p.pname='天津'or p.pname='上海';
--  比较运算后
-- 查询cms_user 中 年龄字段大于平均年龄(一个结果)的记录
-- 1.平均年龄的记录
select avg(age) from cms_user;
-- 2.年龄字段大于平均年龄
select * from cms_user where 
age>(select avg(age) from cms_user);

-- 查询cms_user 中 年龄字段大于 17 18 19(多个结果)的记录
select * from cms_user where
age >some(select age from cms_user 
where age in(17,18,19));

--   =some/any    等同与 in  
select * from cms_user where
age =some(select age from cms_user where age in(17,18,19));

-- 查询 cms_user 中的所有记录
-- 用子查询cms_user产生新表  只有  name 和 email两个字段
select * from (select name,email from 
cms_user) as new;


















