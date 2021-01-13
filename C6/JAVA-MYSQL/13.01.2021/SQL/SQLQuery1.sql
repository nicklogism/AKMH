/* Με JOIN */

SELECT firstname, lastname
FROM Person.Person pp
JOIN HumanResources.Employee hre
ON pp.BusinessEntityID = hre.BusinessEntityID
WHERE MaritalStatus = 'M'
ORDER BY LastName

/* Με subquery */ 

SELECT firstname, lastname
FROM Person.Person
WHERE BusinessEntityID IN (	SELECT BusinessEntityID 
							FROM HumanResources.Employee
							WHERE MaritalStatus ='M')
ORDER BY LastName
