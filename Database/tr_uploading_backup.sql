
DELIMITER //
-- Creating the stored procedure
CREATE TRIGGER tr_upload_delete_graduate_information
BEFORE DELETE ON graduate
FOR EACH ROW
 BEGIN 
	 INSERT INTO graduate_backup(
		graduate_id
        , form_id
        , k_number
        , first_name
        , middle_name
        , last_name
        , email
        )
	 VALUES (
		OLD.graduate_id
        , OLD.form_id
        , OLD.k_number
        , OLD.first_name
        , OLD.middle_name
        , OLD.last_name
        , OLD.email
        );
END //
-- Reassign the original delimiter
DELIMITER ;