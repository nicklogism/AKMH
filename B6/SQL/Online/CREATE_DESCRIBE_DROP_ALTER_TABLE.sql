 CREATE TABLE student (
     student_id INT, /* Δημιουργία Column ως INTeger Type */
     student_name VARCHAR(30), /* Δημιουργία Column ως VARCHAR Type με maximum 30 χαρακτήρες */
     student_major VARCHAR(20),
     PRIMARY KEY(student_id) /* Ορίζω το student_id column ως primary key*/
 );

 DESCRIBE student; /* Επιστρέφει τα χαρακτηριστικά του table student που μόλις έφτιαξα*/

 DROP TABLE student; /* Διαγράφει το table student*/

 ALTER TABLE student ADD gpa DECIMAL(3,2); /*Μετασχηματίζει το Table student προσθέτοντας άλλο ένα column τύπου DECIMAL με όνομα gpa*/
 
 ALTER TABLE student DROP COLUMN; /*Διαγράφει το gpa column*/