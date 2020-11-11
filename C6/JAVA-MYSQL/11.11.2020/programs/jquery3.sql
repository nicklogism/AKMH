select firstname,middlename,lastname,JobTitle
from HumanResources.Employee
right join person.Person
on humanresources.Employee.BusinessEntityID=Person.person.BusinessEntityID