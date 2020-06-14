/* Ορίζουμε τη myvar ως πίνακα */

DECLARE @myvar table (firstname nvarchar(50), lastname nvarchar(50));

INSERT INTO @myvar VALUES ('chris','stav'),('joe','mercury'); /* Προσοχή στη σύνταξη, ('FirstName','LastName) */

SELECT * FROM @myvar;      
