/*
Να γραφεί Query που να εμφανίζει το όνομα του τμήματος, 
και το μέσο όρο μισθών (το rate * 880) των εργαζομένων που ανήκουν στο συγκεκριμένο τμήμα. 

Πίνακες: Humanresources.Employeepayhistory, Humanrecources.Employee.DepartmentHistory, Humanresources.Department

*/

SELECT DISTINCT Name AS DepartmentName, Rate*880 AS SalaryAVG
FROM HumanResources.EmployeePayHistory HREPH
JOIN HumanResources.EmployeeDepartmentHistory HREDH ON HREPH.BusinessEntityID = HREDH.BusinessEntityID
JOIN HumanResources.Department HRD ON HREDH.DepartmentID = HRD.DepartmentID
ORDER BY SalaryAVG;
