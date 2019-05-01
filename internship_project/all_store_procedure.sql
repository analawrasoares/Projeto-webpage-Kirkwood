/**
	FILE:store_procidure_select.sql
    DATE:04/16/2019
	AUTHOR: Md Touhidul Islam
    DISCRIPTION: 
		
*/
use kirkwood_survey;
-- Changing the delimiter into //
DELIMITER //

CREATE PROCEDURE SP_get_form_information(
) 
	BEGIN
		SELECT 
			graduate.k_number
            , graduate.first_name
            , graduate.middle_name
            , graduate.last_name
            , graduate.email
            , form.form_id
			, form.graduate_id
			, form.graduate_year
			, form.salary_range
			, form.employment_position
			, form.location_id
			, form.submission_date
			, form.program_name
			, form.employer_name
			, form.continue_edu
			, form.have_job
            , location.city
            , location.zip
            , location.state_name
            , country_code
            , state.latitude
            , state.longitude
		FROM graduate
        INNER JOIN form
		ON graduate.graduate_id = form.graduate_id
        INNER JOIN location
        ON form.location_id = location.location_id
        INNER JOIN state 
        ON location.state_name = state.state_name
        GROUP BY graduate.k_number
        ORDER BY form.submission_date;
END//
-- Reassign the original delimiter
DELIMITER ;




/**
	FILE:Statistic_store_procudure.sql
    DATE:04/16/2019
	AUTHOR: Md Touhidul Islam
    DISCRIPTION: 
		
*/
use kirkwood_survey;
-- Changing the delimiter into //
DELIMITER //

CREATE PROCEDURE SP_state_statistics(
) 
	BEGIN
		SELECT
			sum(form.salary_range) AS 'average_salary'
            , COUNT(graduate.graduate_id) AS 'people_work'
            , location.state_name
            , location.country_code
            , state.latitude
            , state.longitude
		FROM graduate
        INNER JOIN form
		ON graduate.graduate_id = form.graduate_id
        INNER JOIN location
        ON form.location_id = location.location_id
        INNER JOIN state 
        ON location.state_name = state.state_name
        WHERE	form.salary_range <> '0'
        GROUP BY location.state_name;
END//
-- Reassign the original delimiter
DELIMITER ;


DELIMITER //
-- Creating the stored procedure
CREATE PROCEDURE sp_get_graduate_id_from_k_number(
		in_k_number VARCHAR(8),
        in_email VARCHAR(50) ,
        in_first_name VARCHAR(50),
        in_middle_name VARCHAR(25),
        in_last_name VARCHAR(50) 					  
)
BEGIN 
	INSERT IGNORE
		INTO 
			graduate (
				k_number
                ,first_name
                ,middle_name
                ,last_name
                ,email
			)VALUES (
				in_k_number
                ,in_first_name
                ,in_middle_name
                ,in_last_name
                ,in_email
			);
END //
-- Reassign the original delimiter
DELIMITER ;

USE Kirkwood_Survey;

-- Changing the delimiter into //
DELIMITER //



-- Creating the stored procedure
CREATE PROCEDURE sp_insert_graduate_info(
     a_graduate_id INT,
     a_graduate_year VARCHAR(4),
	 a_salary_range VARCHAR(15), 
	 a_employment_position VARCHAR(60),
	 a_city VARCHAR(50),
	 a_zip VARCHAR(5) ,
     a_state_name VARCHAR(50),
	 a_country_code VARCHAR(3),
	 a_program_name VARCHAR(50),
	 a_employer_name VARCHAR(50),
	 a_continue_edu boolean,
     a_have_job boolean
)
BEGIN 
	INSERT IGNORE INTO State (
			state_name
		)VALUES (
			a_state_name
		) ;
	INSERT IGNORE INTO location (
			city
			, zip
			, state_name 
			, country_code
		)VALUES (
			a_city
			, a_zip
			,  a_state_name	
			, a_country_code
	);
	INSERT IGNORE INTO program (
				program_name
				)VALUES (
				a_program_name
			);
				
INSERT INTO Form 
			(graduate_id
			, graduate_year
			, salary_range
			, employment_position
			, location_id
			, submission_date
			, program_name
			, employer_name
			, continue_edu
			, have_job
			)VALUES (
			a_graduate_id 
			, a_graduate_year 
			, a_salary_range 
			, a_employment_position 
			, 	(SELECT location_id
					FROM Location 
					WHERE zip = a_zip 
					)
			,NOW()
			,a_program_name
			,a_employer_name
			,a_continue_edu
			,a_have_job);
UPDATE graduate
SET form_id = (SELECT form_id FROM form WHERE graduate_id = a_graduate_id) 
WHERE graduate_id = a_graduate_id;
END //

-- Reassign the original delimiter
DELIMITER ;


/**
	FILE:store_procidure_select.sql
    DATE:04/16/2019
	AUTHOR: Md Touhidul Islam
    DISCRIPTION: 
		
*/
use kirkwood_survey;
-- Changing the delimiter into //
DELIMITER //

CREATE PROCEDURE SP_get_GraduateInfo(
	in_graduate_id int
) 
	BEGIN
		SELECT 
			graduate_id
            , form_id
            , k_number
            , first_name
            , middle_name
            , last_name
            , email
		FROM graduate
        WHERE graduate_id = in_graduate_id
        LIMIT 1;
	
END//
-- Reassign the original delimiter
DELIMITER ;




DELIMITER //
-- Creating the stored procedure
CREATE PROCEDURE sp_insert_into_graduate_table(
		in_k_number VARCHAR(8),
        in_email VARCHAR(50) ,
        in_first_name VARCHAR(50),
        in_middle_name VARCHAR(25),
        in_last_name VARCHAR(50) 					  
)
BEGIN 
	INSERT IGNORE
		INTO 
			graduate (
				k_number
                ,first_name
                ,middle_name
                ,last_name
                ,email
			)VALUES (
				in_k_number
                ,in_first_name
                ,in_middle_name
                ,in_last_name
                ,in_email
	);
END //
-- Reassign the original delimiter
DELIMITER ;