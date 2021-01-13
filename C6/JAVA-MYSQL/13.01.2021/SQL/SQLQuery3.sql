SELECT * FROM HumanResources.Employee
WHERE OrganizationNode is NULL

/* Εάν γράψουμε 
WHERE OrganizationNode = NULL
δεν επιστρέφει κανένα αποτέλεσμα, χωρίς όμως να είναι συντακτικά λάθος
*/
