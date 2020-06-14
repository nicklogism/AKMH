 CREATE TABLE student (
     student_id INT, /* Δημιουργία Column ως INTeger Type */
     student_name VARCHAR(30), /*	Δημιουργία Column ως VARCHAR Type με maximum 
									30 χαρακτήρες */
     student_major VARCHAR(20),
     PRIMARY KEY(student_id) /* Ορίζω το student_id column ως primary key*/
 );
 
 /* Προσθέτουμε(INSERT) τιμές(VALUES) στον πίνακα student.
	Προσοχή! Οι τιμές προστίθενται με την ίδια σειρά που έχουμε φτιάξει τα 
	Columns. 
	πχ. Πρώτα student_id, μετά student_name κλπ. Οι τιμές πρέπει να είναι 
	ακριβώς όσα και τα Columns.
	Τα strings τα βάζουμε σε μονά ειαγωγικά
*/

 INSERT INTO student VALUES(
     1, 'Jack', 'Biology'
 );
 
 /*
 Εδώ χρησιμοποιούμε παραμέτρους ώστε να ορίσουμε ποιες ακριβώς στήλες(columns) 
 θέλουμε να επηρεάσουμε. πχ. Ένας μαθητής με όνομα Mark δεν έχει 
 ειδικότητα(major). Θα δημιουργηθεί ένα row στον πίνακα με τη τελευταία τιμή να
 είναι NULL.
 */
 
 INSERT INTO student(student_id, student_name) VALUES(
     3, 'Mark'
 );
 
 /* Δεν μπορώ να προσθέσω τιμές με το ίδιο PK! Μπορώ όμως να προσθέσω με 
	διαφορετικό */

INSERT INTO student VALUES(
     4, 'Mark', 'Archeology'
 );
 
 /*
 Βλέπουμε τα αποτελέσματα με τη παρακάτω εντολή
 */
 
 SELECT * FROM student; /* Φέρε μου τα πάντα(*) από τον πίνακα student */