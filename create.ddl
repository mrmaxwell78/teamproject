CREATE DATABASE Inventory;

CREATE table Buildings(
	BuidlingID INTEGER(5) auto_increment Not Null,
	BuildingNo TINYINT(5) Not Null,
	BuildingName CHAR(20) Not Null,
	primary key (BuidlingID));
	
CREATE table Rooms(
    RoomID INTEGER(5) auto_increment Not Null,
    BuildingID INTEGER(5) Not Null,
    RoomNumber INTEGER(5) Not Null,
    Capacity INTEGER(5) Not Null,
    primary key (roomID),
    foreign key(BuildingID) REFERENCES Building(BuildingID));

CREATE table RoomComputers(
    RoomID INTEGER(5) not null,
    BuildingID INTEGER(5) Not Null,
    ComputerID INTEGER(5) Not Null,
    Count INTEGER(5) auto_increment Not Null,
    foreign key(RoomID) REFERNECES Rooms(RoomID));
					 
CREATE table Computers(
	ComputerID INTEGER(5) auto_increment Not Null,
	MemorySize TEXT Not Null,
	StorageSize TEXT Not Null,
	primary key (ComputerID),
	foreign key(VendorID) REFERENCES Vendors(VendorID)
	);

CREATE table Vendors(
	VendorID INTEGER(5) auto_increment Not Null,
	Name VARCHAR(20) Not Null,
	Phone CHAR(12) Not Null,
	primary key (VendorID));
