/*
Να γραφεί Query που να εμφανίζει το Firstname,Lastname,Emailaddress από τους
πίνακες Person.Person και Person.EmailAddress
*/

SELECT firstname,lastname,EmailAddress
FROM Person.Person
JOIN Person.EmailAddress
ON Person.Person.BusinessEntityID=Person.EmailAddress.BusinessEntityID
