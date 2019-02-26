/*
	FILE: create_graduate_db.sql
    DATE: 2019-02-20 (ISO-861 format)
    AUTHOR: Md Touhidul islam & Ana lura
	DESCRIPTION: 
		This script going to creat graduage database.
*/
CREATE database Kirkwood_Survay;
use Kirkwood_Survay;

CREATE TABLE Duty (
                Duty_id INT AUTO_INCREMENT NOT NULL,
                Duty_name VARCHAR(25) NOT NULL,
                PRIMARY KEY (Duty_id)
);


CREATE TABLE Stuff (
                Stuff_id INT AUTO_INCREMENT NOT NULL,
                k_number VARCHAR(10) NOT NULL,
                email VARCHAR(50) NOT NULL,
                first_name VARCHAR(50) NOT NULL,
                last_name VARCHAR(50) NOT NULL,
                password_key VARCHAR(25) NOT NULL,
                PRIMARY KEY (Stuff_id)
);


CREATE TABLE Stuff_Duty (
                Stuff_func_id INT AUTO_INCREMENT NOT NULL,
                Stuff_id INT NOT NULL,
                Duty_id INT NOT NULL,
                PRIMARY KEY (Stuff_func_id)
);


CREATE TABLE State (
                state_name VARCHAR(50) NOT NULL,
                PRIMARY KEY (state_name)
);


CREATE TABLE Country (
                country_code VARCHAR(3) NOT NULL,
                country_name VARCHAR(50) NOT NULL,
                PRIMARY KEY (country_code)
);


CREATE TABLE Program (
                program_name VARCHAR(50) NOT NULL,
                PRIMARY KEY (program_name)
);


CREATE TABLE Graduate (
                graduate_id INT AUTO_INCREMENT NOT NULL,
                form_id INT NOT NULL,
                k_number VARCHAR(10) NOT NULL,
                first_name VARCHAR(25) NOT NULL,
                middle_name VARCHAR(25) NOT NULL,
                last_name VARCHAR(25) NOT NULL,
                email VARCHAR(50) NOT NULL,
                PRIMARY KEY (graduate_id)
);


CREATE TABLE Form (
                form_id INT AUTO_INCREMENT NOT NULL,
                graduate_id INT NOT NULL,
                graduate_year INT NOT NULL,
                graduate TINYINT NOT NULL,
                salary DOUBLE PRECISION NOT NULL,
                employment_position VARCHAR(60) NOT NULL,
                location_id INT NOT NULL,
                submission_date DATE NOT NULL,
                submitted TINYINT NOT NULL,
                program_name VARCHAR(50) NOT NULL,
                PRIMARY KEY (form_id)
);


CREATE TABLE Location (
                location_id INT AUTO_INCREMENT NOT NULL,
                form_id INT NOT NULL,
                city VARCHAR(50) NOT NULL,
                zip INT NOT NULL,
                address1 VARCHAR(100),
                address2 VARCHAR(100),
                state_name VARCHAR(50) NOT NULL,
                country_code VARCHAR(3) NOT NULL,
                PRIMARY KEY (location_id)
);


ALTER TABLE Stuff_Duty ADD CONSTRAINT Duty_fk
FOREIGN KEY (Duty_id)
REFERENCES Duty (Duty_id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Stuff_Duty ADD CONSTRAINT Stuff_fk
FOREIGN KEY (Stuff_id)
REFERENCES Stuff (Stuff_id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Location ADD CONSTRAINT state_location_fk
FOREIGN KEY (state_name)
REFERENCES State (state_name)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Location ADD CONSTRAINT country_location_fk
FOREIGN KEY (country_code)
REFERENCES Country (country_code)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Form ADD CONSTRAINT program_form_fk
FOREIGN KEY (program_name)
REFERENCES Program (program_name)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Form ADD CONSTRAINT graduate_form_fk
FOREIGN KEY (graduate_id)
REFERENCES Graduate (graduate_id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Location ADD CONSTRAINT form_location_fk
FOREIGN KEY (form_id)
REFERENCES Form (form_id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;