-- order by 字段   asc 升序|desc 降序
--  查询 所有记录 要求 按编号 降序排序
select * from cms_user order by id desc;

-- 并且 对 最大年龄字段  降序排序
select sex,count(*) as count,max(age) as avg
from cms_user
group by sex
order by avg desc;

-- [limit [$offset,] $length]:获得前n条记录
-- 获得前3条记录
-- 准确吗-- 不准确 错误
select * from cms_user where id<=3;
-- 准确
select * from cms_user limit 0,3;


-- 实现分页  每页显示 3
--  第一页      $offset =0  (1-1)*3=0
select * from cms_user limit 0,3;
--  第二页      $offset =3  (2-1)*3=3
select * from cms_user limit 3,3;
--  第三页      $offset =6  (3-1)*3=6 
select * from cms_user limit 6,3;

-- 实现分页  对编号降序排序  每页显示 3
--  第一页      $offset =0  (1-1)*3=0
select * from cms_user order by id desc limit 0,3;
--  第二页      $offset =3  (2-1)*3=0
select * from cms_user order by id desc limit 3,3;

-- select  跟 expr 
select 3+7,3*7,8/3;
-- select  跟函数
--  查看当前打开的数据库
select database(); 
--  查看当前MySQL用户名
select user(); 
--  查看当前MySQL版本
select version(); 
--  查看当前的系统时间日期
select now();











































