-- 增删 改 查
-- 删除 cms_user表编号 是3,5 的记录
delete from cms_user where id in(3,5);
-- 修改 cms_user表 编号是  6 7 的字段 sex 值为 1
update cms_user set sex=1 where  id in(6,7);
-- 条件查询 cms_user表编号不是7 并且 address是上海的记录
select * from cms_user where id!=7 and address='上海';
-- 条件查询 cms_user sex 是 1 或  age大于等19的记录
select * from cms_user where sex=1 or age>=19;
-- 分组和二次过滤
-- 查询cms_user 对 sex 字段分组
-- 显示字段: sex,每组人数,最大年龄
-- 并且每组人数 大于2 的记录
select sex,count(*) as count,max(age) from cms_user
group by sex
having count>2;











