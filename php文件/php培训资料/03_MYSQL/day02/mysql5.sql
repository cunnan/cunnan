-- [group by 字段]:分组
-- 查询 cms_user 对 address 字段分组
-- 字段 : address,每组中人数,每组中的平均年龄
select address,count(*) as count,
avg(age) as avg
from cms_user
group by address;

-- 查询 cms_user 对 address 字段分组
-- 字段 : address,每组中人数,每组中的平均年龄
-- 并且  每组人数大于等于3的记录
select address,count(*) as count,
avg(age) as avg
from cms_user
group by address
having count>=3;

-- 查询 cms_user中 编号在2-7之间的记录中
-- 对 address 字段分组
-- 字段 : address,每组中人数,每组中的平均年龄
-- 并且  每组人数大于等于3的记录
select address,count(*) as count,avg(age) as avg
from cms_user
where id>=2  and id<=7
group by address
having count>=3;


-- 作业:
-- 增删 改 查
-- 删除 cms_user表编号 是3,5 的记录
-- 修改 cms_user表 编号是  6 7 的字段 sex 值为 1
-- 条件查询 cms_user表编号不是7 并且 address是上海的记录
-- 条件查询 cms_usersex 是 1 或  age大于等19的记录
-- 分组和二次过滤
-- 查询cms_user 对 sex 字段分组
-- 显示字段: sex,每组人数,最大年龄
-- 并且每组人数 大于2 的记录























