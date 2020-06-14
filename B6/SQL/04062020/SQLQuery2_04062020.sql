SELECT FirstName, MiddleName, LastName /*Επιλογή μόνο των FirstName, MiddleName, LastName*/
FROM person.person /*από πίνακα person.person */
WHERE LastName IN ('Todd' , 'Syamala' , 'Cheng'); /* Φέρνει ότι είναι μέσα στη παρένθεση(ακριβώς)*/
