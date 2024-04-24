
set foreign_key_checks=0;


# Loading HotelInfo.dat into HotelInfo Table
LOAD DATA LOCAL INFILE "C:/xampp/htdocs/CST225/Project/Final/Loading_Relations/HotelInfo.dat" INTO TABLE HotelInfo FIELDS TERMINATED BY ','
ENCLOSED BY "'" LINES TERMINATED BY '\n';

# Loading Staff.dat into Staff Table
LOAD DATA LOCAL INFILE "C:/xampp/htdocs/CST225/Project/Final/Loading_Relations/Staff.dat" INTO TABLE Staff FIELDS TERMINATED BY ','
ENCLOSED BY "'" LINES TERMINATED BY '\n';

# Loading Guest.dat into Guest Table
LOAD DATA LOCAL INFILE "C:/xampp/htdocs/CST225/Project/Final/Loading_Relations/Guest.dat" INTO TABLE Guest FIELDS TERMINATED BY ','
ENCLOSED BY "'" LINES TERMINATED BY '\n';


# Loading Room.dat into Room Table
LOAD DATA LOCAL INFILE "C:/xampp/htdocs/CST225/Project/Final/Loading_Relations/Room.dat" INTO TABLE Room FIELDS TERMINATED BY ','
ENCLOSED BY "'" LINES TERMINATED BY '\n';


# Loading StaysAt.dat into StaysAt Table
LOAD DATA LOCAL INFILE "C:/xampp/htdocs/CST225/Project/Final/Loading_Relations/StaysAt.dat" INTO TABLE StaysAt FIELDS TERMINATED BY ','
ENCLOSED BY "'" LINES TERMINATED BY '\n';

set foreign_key_checks=1;