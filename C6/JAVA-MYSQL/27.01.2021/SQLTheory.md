**Derived Tables**:
Οι Derived Tables είναι subqueries που μπορούν να χρησιμοποιηθούν σαν πίνακες όταν τους δώσουμε ένα alias και τους βάλουμε σε παρένθεση μέσα σε ένα `JOIN`. 
<br>
Παράδειγμα: <br>

```
select distinct rear.AccountNumber, rear.Name
from
(select sc.CustomerID cust, sc.AccountNumber, sst.Name, pp.Name ProductName
 from sales.SalesOrderHeader soh
 join sales.SalesOrderDetail sod
   on soh.SalesOrderID = sod.SalesOrderID
 join Production.Product pp
   on sod.ProductID = pp.ProductID
 join sales.Customer sc
   on soh.CustomerID = sc.CustomerID
 join sales.SalesTerritory sst
   on sc.TerritoryID = sst.TerritoryID
) as rear
join
(select sc.CustomerID cust, sc.AccountNumber, sst.Name, pp.Name ProductName
 from sales.SalesOrderHeader soh
 join sales.SalesOrderDetail sod
   on soh.SalesOrderID = sod.SalesOrderID
 join Production.Product pp
   on sod.ProductID = pp.ProductID
 join sales.Customer sc
   on soh.CustomerID = sc.CustomerID
 join sales.SalesTerritory sst
   on sc.TerritoryID = sst.TerritoryID
) as front
on rear.cust = front.cust
where rear.ProductName = 'HL Mountain Rear Wheel'
    and front.ProductName = 'HL Mountain Front Wheel'
```

**CTEs Common Table Expressions**
Τα CTEs είναι κάτι κοντινό σε Derived Table το οποίο δηλώνεται πρώτο αντί να μπει inline όπως μπαίνει ένας derived table. Αυτό σημαίνει πως ο κώδικας οργανώνεται καλύτερα ώστε να είναι ευκολότερο να διαβαστεί και ταυτόχρονα, έχουμε όλες τις δυνατότητες ενός derived table.
Για να φτιάξουμε ένα CTE, ξεκινάμε με την εντολή `WITH`.
Η σύνταξη ενός CTE, είναι η ακόλουθη:<br>

```
WITH <όνομα CTE> AS
(CTE query)
<κανονικό Query>
```

Παράδειγμα: <br>

```
WITH mycte AS
(select sc.CustomerID, sc.AccountNumber, sst.Name, pp.Name ProductName
 from sales.SalesOrderHeader soh
 join sales.SalesOrderDetail sod
   on soh.SalesOrderID = sod.SalesOrderID
 join Production.Product pp
   on sod.ProductID = pp.ProductID
 join sales.Customer sc
   on soh.CustomerID = sc.CustomerID
 join sales.SalesTerritory sst
   on sc.TerritoryID = sst.TerritoryID
)
select distinct rear.AccountNumber, rear.Name
from mycte Rear
join mycte Front
  on rear.CustomerID = Front.CustomerID
  where rear.ProductName = 'HL Mountain Rear Wheel'
    and front.ProductName = 'HL Mountain Front Wheel'
```

**Η εντολή EXISTS**
Η εντολή EXISTS μας επιστρέφει τις γραμμές που υπάρχουν σύμφωνα με μία συνθήκη που βάζουμε μέσα στην εντολή `WHERE`. Κατά κάποιο τρόπο, η EXISTS είναι μία εντολή που "φιλτράρει" τις γραμμές που επιστρέφονται από ένα query.
Παράδειγμα: <br>

```
select BusinessEntityID, LastName  + ' , '+ firstname as name
from person.person pp
where EXISTS
     (select BusinessEntityID
	   from HumanResources.Employee hre
	      where hre.BusinessEntityID = pp.BusinessEntityID)

```

Είναι αντίστοιχο με

```
select pp.Businessentityid, lastname +' , ' firstname as name
from person.person pp
join humanresources.employee hre
on pp.businessentityid = hre.businessentityid
```

**To EXISTS μέσα σε μία if:**

```
IF EXISTS
   ( select * from sys.objects
     where OBJECT_NAME(object_id) = 'foo'
	    and SCHEMA_NAME (schema_id) = 'dbo'
	    and OBJECTPROPERTY(object_id,'IsUserTable') = 1)
BEGIN
   drop table dbo.foo;
   PRINT 'Table foo has been dropped'
END
ELSE
BEGIN
create table dbo.foo
(column1 int,
  column2 varchar(20) )
END
```

O πίνακας sys.objects περιέχει όλα τα objects που βρίσκονται στις DB μου, συμπεριλαμβανομένων και των objects του συστήματος. Εκεί μπορούμε να βρούμε πίνακες, functions, κλειδιά (constraints) κλπ.
