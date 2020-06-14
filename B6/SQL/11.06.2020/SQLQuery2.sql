DECLARE @myvar INT;

/* Ορίζω στη μεταβλητή μια εντολή */
SET @myvar = (select AVG(orderqty) from sales.SalesOrderDetail WHERE datepart(mm,modifieddate) = 6 AND datepart(yyyy,modifieddate) = 2003);

SELECT @myvar;
