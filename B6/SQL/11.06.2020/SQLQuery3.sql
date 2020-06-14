/* Ορίζουμε τη myvar ως πίνακα */

DECLARE @myvar TABLE (firstname nvarchar(50), lastname nvarchar(50));

INSERT INTO @myvar SELECT firstname,lastname FROM person.Person WHERE LastName like 'I%';

SELECT * FROM @myvar; 
