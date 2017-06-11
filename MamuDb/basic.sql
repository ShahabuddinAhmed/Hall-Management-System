create table tutor(
ID int primary key,
Name varchar(30),
About varchar(1000));
insert into tutor values(1,'No Content','No Content');
insert into tutor values(2,'No Content','No Content');
insert into tutor values(3,'No Content','No Content');
insert into tutor values(4,'No Content','No Content');
insert into tutor values(5,'No Content','No Content');
insert into tutor values(6,'No Content','No Content');

create table info(
Typ varchar(10)  primary key,
About varchar(1000)
);

insert into info values('admission','No Content');
insert into info values('canteen','No Content');
insert into info values('library','No Content');
insert into info values('dining','No Content');
insert into info values('about','No Content');

create table contact(
ID int primary key,
Name varchar(30) not null,
Phn varchar(30) not null);

insert into contact values(1,'No Content','No Content');
insert into contact values(2,'No Content','No Content');
insert into contact values(3,'No Content','No Content');
insert into contact values(4,'No Content','No Content');
insert into contact values(5,'No Content','No Content');
insert into contact values(6,'No Content','No Content');

create table staff(
ID int primary key,
Name varchar(30) not null,
Phn varchar(30) not null,
About varchar(1000) not null);

insert into staff values(1,'No Content','No Content','No Content');
insert into staff values(2,'No Content','No Content','No Content');
insert into staff values(3,'No Content','No Content','No Content');
insert into staff values(4,'No Content','No Content','No Content');
insert into staff values(5,'No Content','No Content','No Content');
insert into staff values(6,'No Content','No Content','No Content');
insert into staff values(7,'No Content','No Content','No Content');
insert into staff values(8,'No Content','No Content','No Content');
insert into staff values(9,'No Content','No Content','No Content');
insert into staff values(10,'No Content','No Content','No Content');

create table mosque(
Name varchar(10) primary key,
About varchar(1000));

insert into mosque values('Fajor','No Content');
insert into mosque values('Jahor','No Content');
insert into mosque values('Ashor','No Content');
insert into mosque values('Magrib','No Content');
insert into mosque values('Esha','No Content');

create table student(
	ID varchar(10) primary key,
	Name varchar(30) not null,
	Dept varchar(30) not null,
	Year varchar(30) not null,
	Session varchar(30) not null,
	Room int not null,
	Address varchar(1000) not null,
	Mobile varchar(30) not null,
	RoomType varchar(30) not null,
	Birth date not null,
	Pass varchar(30) not null,
	AdmitDate date not null);


create table complain(
ID int AUTO_INCREMENT  primary key,
StuID varchar(10),
Complain varchar(1000) not null);

create table payment(
ID int primary key,
Roll varchar(10) NOT NULL,
Yer int not null,
Jan varchar(10) ,
Feb varchar(10) ,
Mar varchar(10) ,
Apr varchar(10) ,
May varchar(10) ,
Jun varchar(10) ,
Jul varchar(10) ,
Aug varchar(10) ,
Sept varchar(10) ,
Oct varchar(10) ,
Nov varchar(10) ,
Decm varchar(10));

create table notice(
	ID int AUTO_INCREMENT  primary key,
	About varchar(1000) not null,
	Gd date not null
)