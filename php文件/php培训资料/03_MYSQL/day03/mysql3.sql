-- 创建数据库  cms
CREATE DATABASE cms
CHARACTER SET utf8;
-- 打开数据库 cms
USE cms;
-- 创建表结构 cms_admin
CREATE TABLE cms_admin(
 id int unsigned PRIMARY KEY AUTO_INCREMENT,
 aname varchar(30) NOT NULL UNIQUE,
 pwd char(32) NOT NULL
);

-- 添加表数据
insert cms_admin(aname,pwd)
value
('tom',md5('123456')),
('rose',md5('123456'));
-- 查看数据
select * from cms_admin;


-- 创建表结构 cms_type
CREATE TABLE cms_type(
 id int unsigned PRIMARY KEY AUTO_INCREMENT,
 tname varchar(30) NOT NULL UNIQUE
);

-- 添加表数据
insert cms_type(tname)
value
('国内'),
('国际'),
('社会'),
('体育');
-- 查看数据
select * from cms_type;


-- 创建表结构 cms_news
CREATE TABLE cms_news(
 id int unsigned PRIMARY KEY AUTO_INCREMENT,
 title varchar(200) NOT NULL UNIQUE,
 content text NOT NULL,
 aid int unsigned NOT NULL,
 tid int unsigned NOT NULL,
 addtime int unsigned NOT NULL
);

-- 添加表数据
-- 编号1 国内 2国际  3社会 4 体育
insert cms_news(title,content,aid,tid,addtime)
value
('习近平就加强党内法规制度建设作出重要指示','习近平就加强党内法规制度建设作出重要指示',1,1,1482733105),
('中央释放这些改革信号，将影响你的买房决定','中央释放这些改革信号，将影响你的买房决定',1,1,1482733105),
('日本减压疗法将大活人裹成粽子','日本减压疗法将大活人裹成粽子',1,2,1482733105),
('管得真宽！日本新设机构帮东南亚搞“海上安保”','管得真宽！日本新设机构帮东南亚搞“海上安保”',1,2,1482733105),
('穷游世界不是梦 丹麦男子坐货船3年游逾百国家','穷游世界不是梦 丹麦男子坐货船3年游逾百国家',1,3,1482733105),
('黑龙江六旬醉汉在派出所内发飙 徒手拆碎一面墙','黑龙江六旬醉汉在派出所内发飙 徒手拆碎一面墙',1,3,1482733105),
('野马10-33惨败酋长 卫冕冠军彻底无缘季后赛','野马10-33惨败酋长 卫冕冠军彻底无缘季后赛',2,4,1482733105),
('实力反击!杨连慧韩国冷对观众嘘声拿下金腰带','实力反击!杨连慧韩国冷对观众嘘声拿下金腰带',2,4,1482733105);

-- 查看数据
select * from cms_news;

-- 多表联合查询
--  cms_news 中 id title addtime
--  cms_admin中 aname
--  cms_type 中 tname
select n.id,n.title,n.addtime,
ad.aname,ty.tname
from cms_news as n
inner join cms_admin as ad
on n.aid = ad.id
inner join cms_type as ty
on n.tid = ty.id;


























