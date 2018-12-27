CREATE DATABASE mvc DEFAULT CHARACTER SET 'utf8';
USE mvc;
-- 0为男,1为女
CREATE TABLE users(
    id SMALLINT UNSIGNED NOT NULL KEY AUTO_INCREMENT,
    username VARCHAR(20) NOT NULL UNIQUE,
    password VARCHAR(32) NOT NULL,
    sex      BOOLEAN NOT NULL DEFAULT 0
);

INSERT users(username,password,sex) VALUES('tom',MD5('tom'),0);
INSERT users(username,password,sex) VALUES('john',MD5('john'),0);
INSERT users(username,password,sex) VALUES('rose',MD5('rose'),0);
INSERT users(username,password,sex) VALUES('linda',MD5('linda'),1);
INSERT users(username,password,sex) VALUES('jake',MD5('jake'),1);
INSERT users(username,password,sex) VALUES('tiechui',MD5('tiechui'),1);



