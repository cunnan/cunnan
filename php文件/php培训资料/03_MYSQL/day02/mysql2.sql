-- 对 cms_user 结构添加 字段  addr 
-- varchar(30) 在 age 字段之后
ALTER TABLE cms_user
ADD addr varchar(30) NOT NULL DEFAULT '北京'
AFTER  age;
-- 对 cms_user 结构添加 两个字段  aa bb varchar(30)
-- 在所有字段的最前面
ALTER TABLE cms_user
ADD aa varchar(30) NOT NULL FIRST,
ADD bb varchar(30) NOT NULL FIRST;
-- 删除字段  aa bb 
ALTER TABLE cms_user
DROP aa,
DROP bb;

-- 修改 表结构中 addr  数据类型为 varchar(80)
-- 默认值改为 天津  并且放到 sex 字段后
ALTER TABLE cms_user
MODIFY address varchar(80) NOT NULL DEFAULT '天津'
AFTER sex;

-- 修改 表结构中 addr 字段名  为  address
ALTER TABLE cms_user
CHANGE addr address varchar(80) NOT NULL
DEFAULT '天津';

-- 修改  cms_user 表编码为 utf8
ALTER TABLE cms_user
DEFAULT CHARSET=utf8;

ALTER DATABASE psd1611
DEFAULT CHARSET=utf8;

-- 修改 MySQL  MyISAM 引擎  为InnoDB 
ALTER TABLE cms_user
ENGINE=InnoDB;














