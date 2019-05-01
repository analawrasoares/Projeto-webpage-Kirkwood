/**
	FILE:Statistic_store_procudure.sql
    DATE:04/16/2019
	AUTHOR: Md Touhidul Islam
    DISCRIPTION: 
		
*/
use kirkwood_survey;
-- Changing the delimiter into //
DELIMITER //

CREATE PROCEDURE SP_survery_process_statistics(
) 
	BEGIN
		SELECT 
			(SELECT 
				COUNT(form_id) 
			FROM graduate
			WHERE form_id <> 0) AS 'survey_complited'
			,COUNT(form_id) AS 'total_surveier'
		FROM graduate
		;
END//
-- Reassign the original delimiter
DELIMITER ;