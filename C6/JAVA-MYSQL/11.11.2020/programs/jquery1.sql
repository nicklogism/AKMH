DECLARE @mytab table (timologio varchar(6),average int)

insert into @mytab 
select SalesOrderID,avg(OrderQty) from sales.SalesOrderDetail
group by SalesOrderID

declare @var int

set @var = (select max(average) from @mytab) 

select * from @mytab
  where average = @var
--aggregate