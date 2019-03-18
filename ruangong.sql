create table user
(  
   id int auto_increment, 
   name varchar(20) not null default 'user', 
   psw varchar(20) not null default 'psw', 
   credit int not null default 100, 
   email varchar(20) not null,
   phonenum varchar(20) not null,
   is_admin int not null,
   constraint pk_id primary key (id)
   );
   
   insert into user values(1,'root','1234',100,'1234@qq.com','18901998097',1);
   
create table sport
(
   id int auto_increment, 
   sport_tid int not null , 
   start_time varchar(20) not null, 
   min_num int not null , 
   max_num int not null, 
   place varchar(20) not null, 
   description varchar(100), 
   stop_time varchar(20) not null, 
   issue_time varchar(20) , 
   primary key(id)
   );
   
create table study
(
   id int auto_increment, 
   study_tid int not null , 
   start_time varchar(20) not null, 
   min_num int not null , 
   max_num int not null, 
   description varchar(100), 
   stop_time varchar(20) not null, 
   primary key(id)
   );
create table trip(id int auto_increment, destination varchar(20) , start_time varchar(20) not null, min_num int not null , max_num int not null, description varchar(100), stop_time varchar(20) not null, issue_time varchar(20) , primary key(id));
create table snacks(id int auto_increment, snacks_tid int not null , start_time varchar(20) not null, min_num int not null , restaurant varchar(20) not null, description varchar(100), stop_time varchar(20) not null, primary key(id));
create table start(uid int not null, aid int not null);
create table part(uid int not null, aid int not null);
create table sport_type(id int auto_increment, name varchar(20), primary key(id));
create table study_type(id int auto_increment, name varchar(20), primary key(id));
insert into sport_type(name) values('football'), ('basketball'), ('pingpang'), ('badminton'), ('tennis'), ('volleyball');
insert into study_type(name) values('SITP'),('SH_Innovation'), ('CH_Innovation'), ('Math_Modelling');
