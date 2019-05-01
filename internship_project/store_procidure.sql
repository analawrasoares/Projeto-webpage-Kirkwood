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
END //

-- Reassign the original delimiter
DELIMITER ;


