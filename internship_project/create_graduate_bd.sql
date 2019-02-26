/*
	FILE: create_graduate_db.sql
    DATE: 2019-02-20 (ISO-861 format)
    AUTHOR: Md Touhidul islam & Ana lura
	DESCRIPTION: 
		This script going to create graduage database.
*/


CREATE TABLE Function (
                function_id INT AUTO_INCREMENT NOT NULL,
                function_name VARCHAR(25) NOT NULL,
                PRIMARY KEY (function_id)
);


CREATE TABLE Admin (
                admin_id INT AUTO_INCREMENT NOT NULL,
                k_number VARCHAR(10) NOT NULL,
                email VARCHAR(50) NOT NULL,
                first_name VARCHAR(50) NOT NULL,
                last_name VARCHAR(50) NOT NULL,
                password_key VARCHAR(25) NOT NULL,
                PRIMARY KEY (admin_id)
);


CREATE TABLE Admin_Func (
                admin_func_id INT AUTO_INCREMENT NOT NULL,
                admin_id INT NOT NULL,
                function_id INT NOT NULL,
                PRIMARY KEY (admin_func_id)
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
                graduate_id INT AUTO_INCREMENT NOT NULL,
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


ALTER TABLE Admin_Func ADD CONSTRAINT function_admin_func_fk
FOREIGN KEY (function_id)
REFERENCES Function (function_id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Admin_Func ADD CONSTRAINT admin_admin_func_fk
FOREIGN KEY (admin_id)
REFERENCES Admin (admin_id)
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