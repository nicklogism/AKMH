SELECT FirstName, MiddleName, LastName /*Επιλογή μόνο των FirstName, MiddleName, LastName*/
FROM person.person /*από πίνακα person.person */
WHERE LastName LIKE '%s';  /* Φέρνει όσα τελειώνουν σε s . Όσα ξεκινάνε από s θα τα ζητάγαμε με s% */
