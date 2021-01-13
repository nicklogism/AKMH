/* Με Collerated Queries */

SELECT soh.customerid, min(soh.orderdate) AS Odrerdate
INTO #MinOrderdate
FROM Sales.SalesOrderHeader soh
GROUP BY soh.customerid

SELECT soh.customerid, soh.salesorderid, soh.orderdate
FROM sales.SalesOrderHeader soh
JOIN #MinOrderdate t
ON soh.CustomerID = t.CustomerID AND soh.OrderDate = t.Odrerdate 
ORDER BY soh.CustomerID

/* Με SubQuery */

SELECT soh.customerid, soh.salesorderid, soh.orderdate
FROM sales.SalesOrderHeader soh
JOIN (	SELECT soh.customerid, min(soh.orderdate) AS Odrerdate
		FROM Sales.SalesOrderHeader soh
		GROUP BY soh.customerid) t
ON soh.CustomerID = t.CustomerID AND soh.OrderDate = t.Odrerdate 
ORDER BY soh.CustomerID
