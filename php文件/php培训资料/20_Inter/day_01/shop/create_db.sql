create database shop character set=utf8;

use shop;

#产品表
create table bookInfo
(
  bookId        int             auto_increment primary key,
  bookName      varchar(20)     not null,
  price         float           default 0,
  dateandtime   timestamp       default current_timestamp
);
insert into bookInfo(bookName,price)values('PHP开发指南',60);
insert into bookInfo(bookName,price)values('JavaScript编程',56);
insert into bookInfo(bookName,price)values('HTML亲密接触',65);
insert into bookInfo(bookName,price)values('Smarty模板引擎',76);
insert into bookInfo(bookName,price)values('Linux编程',69);
insert into bookInfo(bookName,price)values('MySQL数据库',37);
insert into bookInfo(bookName,price)values('ThinkPHP框架',160);
insert into bookInfo(bookName,price)values('Yii框架',130);
insert into bookInfo(bookName,price)values('锋利的JQuery',56);









