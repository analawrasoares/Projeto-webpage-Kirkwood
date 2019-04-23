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
	graduate_id int
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
        WHERE graduate_id = graduate_id
        LIMIT 1;
	
END//
-- Reassign the original delimiter
DELIMITER ;