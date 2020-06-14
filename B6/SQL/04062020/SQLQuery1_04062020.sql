SELECT FirstName, MiddleName, LastName /*Επιλογή μόνο των FirstName, MiddleName, LastName*/
FROM person.person /*από πίνακα person.person */
WHERE LastName like 'sy%'; /*Που είναι(Φέρε) όλα τα αποτελέσματα με επώνυμο που αρχίζει από sy*/
