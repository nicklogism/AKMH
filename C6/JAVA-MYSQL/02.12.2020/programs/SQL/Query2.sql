/*
Βρες το κοινό κλειδί (ή τα κοινά κλειδιά) μεταξύ των πινάκων EmailAddress & Person
*/
SELECT COLUMN_NAME
FROM INFORMATION_SCHEMA.KEY_COLUMN_USAGE
WHERE OBJECTPROPERTY(OBJECT_ID(CONSTRAINT_SCHEMA + '.' +
QUOTENAME(CONSTRAINT_NAME)), 'IsPrimaryKey') = 1
AND TABLE_NAME = 'EmailAddress' AND TABLE_SCHEMA = 'Person'