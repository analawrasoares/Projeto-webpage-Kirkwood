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