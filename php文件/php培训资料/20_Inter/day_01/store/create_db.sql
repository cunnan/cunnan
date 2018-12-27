create database store character set=utf8;

use store;

#用户表
create table userinfo
(
  userId       int            auto_increment primary key,
  userName     varchar(20)    unique not null,
  password     varchar(20)    not null,
  dateandtime  timestamp      default current_timestamp
);
insert into userinfo(userName,password)values('张三','123456');
insert into userinfo(userName,password)values('李四','123456');
insert into userinfo(userName,password)values('王五','123456');

#产品表
create table bookinfo
(
  bookId        int             auto_increment primary key,
  bookName      varchar(20)     not null,
  price         float           default 0,
  dateandtime   timestamp       default current_timestamp
);
insert into bookinfo(bookName,price)values('PHP开发指南',60);
insert into bookinfo(bookName,price)values('JavaScript编程',56);
insert into bookinfo(bookName,price)values('HTML亲密接触',65);
insert into bookinfo(bookName,price)values('Smarty模板引擎',76);
insert into bookinfo(bookName,price)values('Linux编程',69);
insert into bookinfo(bookName,price)values('MySQL数据库',37);
insert into bookinfo(bookName,price)values('ThinkPHP框架',160);
insert into bookinfo(bookName,price)values('Yii框架',130);
insert into bookinfo(bookName,price)values('锋利的JQuery',56);

#购物车表
create table carinfo
(
  carId         int         auto_increment primary key,
  userId        int         not null,#用户编号
  bookId        int         not null,#产品编号
  bookCount     int         not null,#产品数量
  dateandtime   timestamp   default current_timestamp,
  foreign key (userId) references userinfo(userId),
  foreign key (bookId) references bookinfo(bookId)
);

#订单表
create table orderinfo
(
  id          int             auto_increment primary key,
  orderId     varchar(13)     unique not null,#订单编号
  totalPrice  float           not null,#订单总价
  userId      int             not null,#下订单的人
  accpter     varchar(50)     not null,#收件人
  tel         varchar(20)     not null,#收件人的电话
  address     varchar(300)    not null,#送货地址
  isPay       int             default 0,#是否付款  0未  1己
  isSend      int             default 0,#是否发货  0未  1己
  isCheck     int             default 0,#是否收货  0未  1己
  remark      varchar(200)        null,#订单描述
  dateandtime timestamp       default current_timestamp,
  foreign key (userId) references userinfo(userId)
);

#订单明细表
create table orderdetails
(
  id           int             auto_increment primary key,
  orderId      varchar(13)     not null,
  bookId       int             not null,
  bookCount    int             not null,
  foreign key (orderId) references orderinfo(orderId),
  foreign key (bookId) references bookinfo(bookId)
);

#创建视图：carinfo、bookinfo表的多表查询


select * from userinfo;#会员表
select * from bookinfo;#产品表
select * from carinfo;#购物车表
select * from orderinfo;#订单表
select * from orderdetails;#订单明细表














