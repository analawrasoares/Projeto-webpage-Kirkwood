/*
	FILE: Kirlwood_Survey_bd.sql
    DATE: 2019-02-20 (ISO-861 format)
    AUTHOR: Md Touhidul islam & Ana lura
	DESCRIPTION: 
		This script going to creat Kirkwood_Survey database.
*/
CREATE database Kirkwood_Survey;
use Kirkwood_Survey;

CREATE TABLE Duty (
                duty_name VARCHAR(25) NOT NULL,
                PRIMARY KEY (duty_name)
);



CREATE TABLE Staff (
                k_number VARCHAR(8) NOT NULL,
                email VARCHAR(50) NOT NULL,
                first_name VARCHAR(50) NOT NULL,
                last_name VARCHAR(50) NOT NULL,
                password_key VARCHAR(25) NOT NULL,
                PRIMARY KEY (k_number)
);


CREATE TABLE Staff_Duty (   
                k_number VARCHAR(8) NOT NULL,
                duty_name VARCHAR(25) NOT NULL,
                PRIMARY KEY (k_number, duty_name)
);


CREATE TABLE State (
                state_name VARCHAR(50) NOT NULL,
                state_code VARCHAR(3),
                PRIMARY KEY (state_name)
);


CREATE TABLE Country (
                country_code VARCHAR(3) NOT NULL,
                country_name VARCHAR(50) NOT NULL,
                short_code VARCHAR(3),
                PRIMARY KEY (country_code)
);


CREATE TABLE Program (
                program_name VARCHAR(50) NOT NULL,
                PRIMARY KEY (program_name)
);


CREATE TABLE Graduate (
                graduate_id INT AUTO_INCREMENT NOT NULL,
                form_id INT NOT NULL,
                k_number VARCHAR(8) NOT NULL,
                first_name VARCHAR(25) NOT NULL,
                middle_name VARCHAR(25) NOT NULL,
                last_name VARCHAR(25) NOT NULL,
                email VARCHAR(50) NOT NULL,
                PRIMARY KEY (graduate_id)
);


CREATE TABLE Form (
                form_id INT AUTO_INCREMENT NOT NULL,
                graduate_id INT NOT NULL,
                graduate_year VARCHAR(4) NOT NULL,
                salary_range VARCHAR(15), 
                employment_position VARCHAR(60),
                location_id INT NOT NULL,
                submission_date DATE NOT NULL,
                program_name VARCHAR(50) NOT NULL,
                employer_name VARCHAR(50),
                continue_edu bool NOT NULL,
                have_job bool NOT NULL,
                PRIMARY KEY (form_id)
);
/*
salary-range should be string because it is a select structure with specified available salary ranges.
0-30,000
30,000-40,000
40,000-65,000
75,000-85,000
85,000-95,000
95,000-100,000
Over 100,000

*/


CREATE TABLE Location (
                location_id INT AUTO_INCREMENT NOT NULL,
                city VARCHAR(50) NOT NULL,
                zip VARCHAR(5) NOT NULL,
                state_name VARCHAR(50) NOT NULL,
                country_code VARCHAR(3) NOT NULL,
                PRIMARY KEY (location_id),
                UNIQUE (zip)
);

ALTER TABLE Staff_Duty ADD CONSTRAINT duty_name_fk
FOREIGN KEY (duty_name)
REFERENCES Duty (duty_name)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Staff_Duty ADD CONSTRAINT k_number_fk
FOREIGN KEY (k_number)
REFERENCES Staff (k_number)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Location ADD CONSTRAINT state_location_fk
FOREIGN KEY (state_name)
REFERENCES State (state_name)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Location ADD CONSTRAINT country_code_fk
FOREIGN KEY (country_code)
REFERENCES Country (country_code)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Form ADD CONSTRAINT program_name_fk
FOREIGN KEY (program_name)
REFERENCES Program (program_name)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

/*
ALTER TABLE Form ADD CONSTRAINT graduate_id_fk
FOREIGN KEY (graduate_id)
REFERENCES Graduate (graduate_id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

*/
