DELIMITER //
-- Creating the stored procedure
CREATE PROCEDURE sp_get_last_uploaded_value(
						  
)
BEGIN 	
	SELECT graduate_id
    FROM graduate
    ORDER BY graduate_id DESC
    limit 1;
END //
-- Reassign the original delimiter
DELIMITER ;