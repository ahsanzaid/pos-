CREATE TABLE distributor (
    id int NOT NULL AUTO_INCREMENT,
    distribution_id int NOT NULL,
    name varchar(20),
    email varchar(30) null,
    status int null,
    jobtitle varchar(10) null,
    contact1 varchar(15),
    contact2 varchar(15) null,
    contact3 varchar(15) null,
    PRIMARY KEY (d_id) ,
    FOREIGN KEY (distribution_id) REFERENCES distribution(id)
)


CREATE TABLE distribution (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(20) NOT NULL UNIQUE,
    PRIMARY KEY (id) ,
    
)
