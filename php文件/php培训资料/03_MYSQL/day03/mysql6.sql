-- 创建数据库  cms2
CREATE DATABASE cms2
CHARACTER SET utf8;
-- 打开数据库 cms
USE cms2;
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
 addtime int unsigned NOT NULL,
 FOREIGN KEY(aid) REFERENCES cms_admin(id),
 FOREIGN KEY(tid) REFERENCES cms_type(id)
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

-- c.先有父表再子表  
--先有父表的记录再有子表的记录   
-- 添加 cms_news  tid 8 -- 错误 父表中没有
insert cms_news(title,content,aid,tid,addtime)
value
('test1','test1',1,4,1482733105);

-- 先删子表再删父表
--先删子表记录再删父表记录 

--  删除父表 cms_type 删除 编号是 3 的记录
--  错误 因为 子表有 对应的值
-- 只有删除子表的的记录然后才删父表记录
delete from cms_type where id=3;


































