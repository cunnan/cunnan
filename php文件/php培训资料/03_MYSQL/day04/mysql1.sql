-- 逻辑外键--原理:父表和子表是一个表，实现无限极菜单分类
-- 创建表结构 category
-- id  name     pid 外键列
-- 当前菜单的 id 是下一级菜单的 pid
-- 当前菜单的 pid 是上一级菜单的 id
CREATE TABLE category(
  id int unsigned PRIMARY KEY AUTO_INCREMENT,
  name varchar(30) NOT NULL,
  pid  int unsigned NOT NULL
);
insert category(name,pid)
value
('家用电器',0),
('手机',0),
('电脑办公',0),
('电视',1),
('空调',1),
('洗衣机',1),
('合资品牌',4),
('国产品牌',4),
('互联网品牌',4),
('挂式空调',5),
('柜式空调',5),
('中央空调',5),
('滚筒洗衣机',6),
('洗烘一体洗衣机',6),
('乐视',8),
('创维',8);

--  查询  当前菜单名  和 父级菜单名
select s.name,p.name
from category as s 
inner join (select * from category) as p
on s.pid = p.id;











