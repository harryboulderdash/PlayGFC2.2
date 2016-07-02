CREATE DEFINER=`gfc`@`localhost` PROCEDURE `sp_getUserBankBalanceCalculated`(IN uid integer)
BEGIN

SELECT 
	SUM(val.field_transaction_value_value) as credit_balance
FROM 
	PlayGFC7.node bl
JOIN
	PlayGFC7.field_data_field_transaction_value val
ON
	bl.vid = val.revision_id
JOIN
	PlayGFC7.field_data_field_transaction_user usr
ON
	bl.vid = usr.revision_id
JOIN
	PlayGFC7.field_data_field_transaction_type trtype
ON
	bl.vid = trtype.revision_id
WHERE
	bl.type = 'user_bank_ledger'
AND    
    usr.field_transaction_user_target_id = uid;

END