use f31ee;

create table javajam_menu
( itemId int unsigned not null auto_increment primary key,
  itemShortName char(50) not null,
  itemFullName char(50) not null,
  itemPrice float(6,2) not null
);

-- create table orders
-- ( orderid int unsigned not null auto_increment primary key,
--   itemid int unsigned not null,
--   itemname int unsigned not null,
--   qnt int unsigned not null,
--   amount float(6,2),
--   orderdate date not null,
-- );


