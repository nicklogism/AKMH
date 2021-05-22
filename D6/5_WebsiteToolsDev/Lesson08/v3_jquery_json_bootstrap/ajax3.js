// JavaScript Document
var currentVal='';
function getVal(elem){
	currentVal= $("#"+elem).val();
}

function setVal(elem) {
	thisVal=$("#"+elem).val();
	if(currentVal != thisVal){
		var elemSplit=elem.split("-");
		var last  = elemSplit.length-1;
		var dbId  = elemSplit[last];
		var dbCol = elemSplit[0];
		//var querystring = "?id=" + thisId + "&val="+thisVal;
		//var url = "dataUpdate.php"+querystring;
		var url = "dataUpdate.php";
		console.log(url);
		/*
		$.post(url, 
			{
			"id" : dbId,
			"col": dbCol,
			"val":thisVal
			},
		function(data){
			ajaxShowFunction(); 
		});
		*/
	}
}

function ajaxShowFunction(){
	var querystring="sex="+$("#sex").val()+"&age="+$("#age").val()+"&score="+$("#score").val();
	var url="ajaxJsonShow.php?"+querystring;
	
	$.getJSON(url, function(data){
		console.log(data);
		
		
		var cities = data['cities'];
		var records = data['records'];
		
		/*
		console.log($.type(cities));
		console.log($.type(cities[0]));
		console.log($.type(cities[0].id));
		console.log($.type(cities[0].name));
		console.log(cities[0].name);
		
		console.log($.type(records));
		console.log($.type(records[0]));
		console.log($.type(records[0].id));
		console.log($.type(records[0].name));
		console.log(records.length);
		console.log(records[0].name);
		*/

		$("#json_tbl tbody").empty();
		
		var tr;
		var input_start = "<input type='text' class='form-control flat' value='";
		var input_end   = "' onfocus='getVal(this.id)' onblur='setVal(this.id)'>";
		
		for (var i = 0; i < records.length; i++) {
			tr = $('<tr/>');
			var id = records[i].id;
			tr.append("<td>"+input_start + id              + "' id='id-"   + id + input_end+"</td>");
			tr.append("<td>"+input_start + records[i].name + "' id='name-" + id + input_end+"</td>");
			tr.append("<td>"+input_start + records[i].age  + "' id='age-"  + id + input_end+"</td>");
			tr.append("<td>"+input_start + records[i].sex  + "' id='sex-"  + id + input_end+"</td>");
			tr.append("<td>"+input_start + records[i].score+ "' id='score-"+ id + input_end+"</td>");
			var td=$('<td/>');
			var sel = $('<select class="form-control flat">').appendTo(td);
			$.each(cities, function () {
				sel.append($("<option>").attr('value',this.id).text(this.name));
    		});
			tr.append(td);
			
			
			$('#json_tbl tbody').append(tr);
		}
		
	})
}