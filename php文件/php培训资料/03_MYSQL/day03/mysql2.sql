-- 修改  表数据  中  address 的 值 为 1
update cms_user set  address='1';
-- 修改 表 cms_user 字段  address  数据类型 int
ALTER TABLE cms_user
MODIFY address int NOT NULL DEFAULT 1;
-- 创建 cms_prov  城市表结构
-- id  pname
CREATE TABLE cms_prov(
   id int unsigned PRIMARY KEY  AUTO_INCREMENT,
   pname varchar(30) NOT NULL
);
-- 添加数据
insert cms_prov(pname)
value
('北京'),
('天津'),
('上海'),
('广州'),
('河北');
-- 修改  表数据  中  address 的 值 为 1
update cms_user set  address=2 where id in(2,5);
update cms_user set  address=3 where id in(6,8);
update cms_user set  address=4 where id in(7);


--  查询 cms_user 表中  name,address 字段
select name,address from cms_user;
-- 多表联合查询
-- 内连接
-- 查询 cms_user中 name 和 cms_prov 中 pname字段
--两表关系: cms_user address 和 cms_prov中 id 字段一样的 
select u.id,u.name,p.pname from cms_user as u
inner join cms_prov as p
on u.address=p.id
order by u.id asc;

-- 多表联合查询
-- 左外连接  left join
-- 查询 cms_user中 name 和 cms_prov 中 pname字段
-- 左表  cms_prov  右表 cms_user
select u.id,u.name,p.pname
from cms_prov as p
left join cms_user as u
on u.address= p.id;


-- 右外连接 right join
-- 查询 cms_user中 name 和 cms_prov 中 pname字段
-- 右表  cms_prov  左表 cms_user
select u.id,u.name,p.pname
from cms_user as u
right join cms_prov as p
on u.address= p.id;



























