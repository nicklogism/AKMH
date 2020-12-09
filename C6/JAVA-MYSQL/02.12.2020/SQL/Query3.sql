/*
Να γραφεί query που να εμφανίζει το Όνομα, Επώνυμο, ώρες ασθένειας (Sickleavehours), 
το κόστος των ωρών (sickleavehours*rate), τις ώρες διακοπών (vacationhours) 
το κόστος των ωρών (vacationhours*rate) και το όνομα του department που εργάζεται ένας εργαζόμενος, 
για όσους εργαζόμενους έχουν salariedflag = 1

Πίνακες: Person.Person, Humanresources.Employee, Humanresources.Employeepayhistory, 
Humanrecources.Employee.DepartmentHistory, Humanresources.Department
*/

SELECT DISTINCT PP.FirstName,
				PP.LastName,
				HRE.SickLeaveHours,
				HRE.SickLeaveHours*Rate AS SickLeaveHoursCost,
				HRE.VacationHours,
				HRE.VacationHours*Rate AS VacationHoursCost,
				HRD.Name AS DepartmentName
FROM Person.Person PP 
JOIN HumanResources.Employee HRE ON PP.BusinessEntityID = HRE.BusinessEntityID
JOIN Humanresources.Employeepayhistory HREPH ON HRE.BusinessEntityID = HREPH.BusinessEntityID
JOIN HumanResources.EmployeeDepartmentHistory HREDH ON HREPH.BusinessEntityID = HREDH.BusinessEntityID
JOIN HumanResources.Department HRD ON HREDH.DepartmentID = HRD.DepartmentID
WHERE SalariedFlag = 1
ORDER BY FirstName, LastName;