CREATE TABLE test2
(
kodikos VARCHAR(10) NOT NULL PRIMARY KEY,
data INT NOT NULL,
fkey VARCHAR(10) NOT NULL FOREIGN KEY REFERENCES test1(kodikos) /* Δημιουργώ και Foreign Key συνδεδεμένο με το PK του πίνακα Test1 */
);
