-- 1查询每个管理员的名称 发布的新闻记录数( aid分组 )
   -- (1) 对 cms_news  aid 管理员id分组 
select n.aid,count(*) as count
from cms_news as n
group by n.aid;
   -- (2)
select n.aid,ad.aname,count(*) as count
from cms_news as n
inner join cms_admin as ad
on n.aid = ad.id
group by n.aid; 

-- 2查询每个分类名称的 新闻数(分组)
  -- (1)  cms_news  对  tid 新闻分类分组
select n.tid,ty.tname,count(*) as count
from cms_news as n
inner join cms_type as ty
on n.tid=ty.id
group by n.tid;


-- 3cms_news 添加一个 字段 点击量 hits 
ALTER TABLE cms_news
ADD hits int unsigned NOT NULL DEFAULT 0;
-- 并且给 点击量 hits 字段 更新不同值
update cms_news set hits=30 where id=1;
update cms_news set hits=60 where id=2;
update cms_news set hits=80 where id=3;
update cms_news set hits=15 where id=4;
update cms_news set hits=22 where id=5;
update cms_news set hits=39 where id=6;
update cms_news set hits=99 where id=7;
update cms_news set hits=66 where id=8;
-- 查询 点击量排行前5条的记录
select id,title,hits
from cms_news
order by hits desc
limit 0,5;












