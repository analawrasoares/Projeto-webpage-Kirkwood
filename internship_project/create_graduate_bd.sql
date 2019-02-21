-- Create database graduate
CREATE DATABASE graduate;

-- Select the databsase
USE graduate;

-- create table 'graduate_info'

CREATE TABLE graduate_info
(
	graduate_id     INT            PRIMARY KEY      AUTO_INCREMENT
    , form_id       INT            NOT NULL
    , k_number      VARCHAR(10)    NOT NULL
    , first_name    VARCHAR(25)    NOT NULL
    , last_name     VARCHAR(25)    NOT NULL
    , middle_name   VARCHAR(25)    NOT NULL
	, email         VARCHAR(50)    NOT NULL

);

-- Create table 'form_info'

CREATE TABLE form_info
(
	form_id                    INT            PRIMARY KEY      AUTO_INCREMENT
    , program_id               INT            NOT NULL
    , graduate_year            INT            NOT NULL
    , employment_position      VARCHAR(50)    NOT NULL
    , salary                   INT            NOT NULL
    , employer_name            VARCHAR(50)    NOT NULL
    , location_id              INT            NOT NULL 
    , submission_date          DATE           NOT NULL 
);

-- create table table location

CREATE TABLE  location
(
	location_id               INT            PRIMARY KEY      AUTO_INCREMENT
    , country_id              INT            NOT NULL
    , state_id                INT            NOT NULL
    ,city                     VARCHAR(50)    NOT NULL
    , zip                     INT            NOT NULL
    ,other                    VARCHAR(50)    NOT NULL
);

-- create table for program

CREATE TABLE program
(
	program_id              INT            PRIMARY KEY      AUTO_INCREMENT
    , program_name          VARCHAR(50)    NOT NULL
);

-- create table for COUNTRY

CREATE TABLE country
(
	country_id              INT            PRIMARY KEY      AUTO_INCREMENT
    , country_name          VARCHAR(50)    NOT NULL
);

-- create table for state

CREATE TABLE state
(
	state_id              INT            PRIMARY KEY      AUTO_INCREMENT
    , state_name          VARCHAR(50)    NOT NULL
);

-- create a function able
CREATE TABLE admin_info
(
	k_number              INT            NOT NULL
    , email               VARCHAR(50)    NOT NULL
    , first_name          VARCHAR(25)    NOT NULL
    , last_name           VARCHAR(25)    NOT NULL
    , password_key        VARCHAR(25)    NOT NULL
    , admin_id            INT            PRIMARY KEY      AUTO_INCREMENT
);

-- create a function table

CREATE TABLE admin_function
(
	function_name       VARCHAR(25)    NOT NULL
    , k_number            INT            NOT NULL
);

-- create a table containing all function
CREATE TABLE all_function
(
	function_name          VARCHAR(25)    PRIMARY KEY
);


