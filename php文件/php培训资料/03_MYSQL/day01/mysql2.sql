-- 创建数据库  psd1611
CREATE DATABASE psd1611
CHARACTER SET utf8;
-- 查看数据库
SHOW DATABASES;
-- 删除数据 psd1611
DROP DATABASE psd1611;
-- 创建数据库  psd1611  编码gbk
CREATE DATABASE psd1611
CHARACTER SET gbk;
-- 查看创建数据库的命令 psd1611
SHOW CREATE DATABASE psd1611;
-- 修改数据库字符集编码 psd1611 为 utf8
ALTER DATABASE psd1611
CHARACTER SET utf8;
-- 查看创建数据库的命令 psd1611
SHOW CREATE DATABASE psd1611;

-- 打开数据库psd1611
USE psd1611;
-- 查看当前打开的数据库
SELECT DATABASE();











