select firstname,middlename,lastname,JobTitle,MaritalStatus,EmailAddress
from HumanResources.Employee
join person.Person
on humanresources.Employee.BusinessEntityID=Person.person.BusinessEntityID
join Person.EmailAddress
on HumanResources.Employee.BusinessEntityID = Person.emailaddress.BusinessEntityID