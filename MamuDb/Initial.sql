create database hallmanagement;

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
select * from tutor;


create table info(
ID int primary key,
About varchar(1000),
Typ int not null);

insert into info values(1,'You May ADmit',1);
select * from info;

create table contact(
ID int primary key,
Name varchar(30) not null,
Phn varchar(30) not null);

insert into contact values(1,'Fire','099089808080');
select * from contact;


create table staff(
ID int primary key,
Name varchar(30) not null,
Phn varchar(30) not null,
About varchar(1000) not null);

insert into staff values(1,'Mofiz','8909808','jhasgjhdgajsdggjgajdghag');
select * from staff;



create table mosque(
Name varchar(10) primary key,
About varchar(1000));

insert into mosque values('Fajor','No Content');
insert into mosque values('Jahor','No Content');
insert into mosque values('Ashor','No Content');
insert into mosque values('Magrib','No Content');
insert into mosque values('Esha','No Content');

select * from mosque;



