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