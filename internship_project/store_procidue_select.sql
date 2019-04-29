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
