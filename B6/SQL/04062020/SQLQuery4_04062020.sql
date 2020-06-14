SELECT salesorderid,SUM(linetotal) /*Επιλογή κλειδιών (salesorderid) , άθροισμα της linetotal */
FROM sales.salesorderdetail
GROUP BY salesorderid /* Επιλογή από τον πίνακα sales.SalesOrderDetail*/
/*¨Οποτε έχω ένα aggregate function ΟΛΑ τα πεδία που ΔΕΝ είναι aggregated πρέπει να μπουν σε Group.*/
