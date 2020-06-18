/* Αλλάζουμε τη τιμή data στον πίνακα Test1 στη γραμμή kodikos AAB, σε 349 */
/* Προσοχή να ορίσουμε το WHERE αλλιώς θα αλλάξει όλα τα columns */

UPDATE Test1 SET data = 349
WHERE  kodikos = 'AAB'; 
