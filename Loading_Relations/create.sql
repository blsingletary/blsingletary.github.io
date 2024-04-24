DROP DATABASE IF EXISTS Hotel_Database;
CREATE DATABASE Hotel_Database;
USE Hotel_Database

DROP TABLE IF EXISTS HotelInfo;
CREATE TABLE HotelInfo(
hName varchar(50) not null,
hLoc varchar(60) not null,
capacity varchar(3) not null,
primary key (hLoc)
);

DROP TABLE IF EXISTS Staff;
CREATE TABLE Staff (
essn char(9) not null, 
salary decimal(10,2) not null,
fName varchar(20) not null,
minit char,
lName varchar(20) not null,
address varchar(50) not null,
bdate date not null,
sex char not null,
position varchar(25) not null,
primary key (essn)
);

DROP TABLE IF EXISTS Guest;
CREATE TABLE Guest (
email varchar(50) not null,
fName varchar(20) not null,
minit char,
lName varchar(20) not null,
phonenum char(12) not null,
pMethod varchar(20) not null,
primary key (email)
);

DROP TABLE IF EXISTS Room;
CREATE TABLE Room (
rNum integer(4) not null,
NumBeds integer(4) not null,
costpernight varchar(5) not null,
`Floor` integer(4),
primary key (rNum)
);

DROP TABLE IF EXISTS StaysAt;
CREATE TABLE StaysAt (
ID varchar(50) not null,
location varchar(60) not null,
gRoom integer not null,
numnightstay integer(4) not null,
unique key (ID)
);

/* 
hName = hotel name
hLoc = hotel location
pMethod = Payment Method
fName = first name
lName = last name
minit = middle initial
ssn = social security number, we're using ssn instead of ID numbers
essn = employee ssn
HotelLoc = hotel location
bdate = birthday
numnightstay = number of nights stayed
NumBeds = number of beds
rNum = room number\
gRoom = Guest's Room
position = like chef, front desk assistant, housekeeping, etc
gssn = guest ssn
ID = ssn, just named that way for the StaysAt table
*/