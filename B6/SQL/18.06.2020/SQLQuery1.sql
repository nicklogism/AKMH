CREATE TABLE test2
(
kodikos VARCHAR(10) NOT NULL PRIMARY KEY,
data INT NOT NULL,
fkey VARCHAR(10) NOT NULL FOREIGN KEY REFERENCES test1(kodikos) /* ��������� ��� Foreign Key ����������� �� �� PK ��� ������ Test1 */
);