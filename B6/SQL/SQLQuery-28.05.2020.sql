SELECT FirstName,MiddleName,LastName
FROM person.person
WHERE LastName='smith' AND FirstName BETWEEN 'John' AND 'phillip';

ή

WHERE LastName='smith' AND FirstName LIKE '%A%I%';



