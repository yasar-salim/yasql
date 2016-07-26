<h1>yasql</h1>
<p>yasql is mysql library using php language</p>
<h2>How to use yasql?</h2>
<h3>Step 1 : Create yasql object</h3>
<p> $object_name=new yasql();</p>
<br/>
<h3>Step 2 : Call function using object name</h3>
<h4>List of functions:</h4>

<h5> 1 . insert query</h5>
<p>Usage: </p>
$object_name->insert($table,$values);<br>
returns 1 if query successfully executed else display error<br>
example:<br>
$response=$object_name->insert("table_name"," col1 = 'abc' , col2 = '10'");

<h5>2. update query</h5>
<p>Usage:</p>
$object_name->update($table,$updation,$condition);<br>
returns 1 if query successfully executed else display error<br>
example:<br>
$response=$object_name->update("table_name" , " col1 = 'abcd' " , "col2>10");<br>
$response=$object_name->update("table_name" , " col1 = 'abcde' " , "1");        to update all rows

<h5> 3 . delete query</h5>
<p>Usage: </p>
$object_name->delete($table,$condition);<br>
returns 1 if query successfully executed else display error<br>
example:<br>
$response=$object_name->delete("table_name"," col1 > '10' ");<br>
$response=$object_name->delete("table_name","1"); to delete  all rows

<h5> 4 . select rows</h5>
<p>Usage: </p>
$object_name->select_rows($column,$table,$condition);<br>
returns resultset if query successfully executed else display error<br>
example:<br>
$response=$object_name->select_rows("col1","table_name"," col1 > '10' ");<br>
$response=$object_name->select_rows("*","table_name","  col1 > '10' "); to fetch  all columns

<h5> 5 . select count of rows</h5>
<p>Usage: </p>
$object_name->select_count($column,$table,$condition);<br>
returns resultset if query successfully executed else display error<br>
example:<br>
$response=$object_name->select_count("*","table_name"," col1 > '10' ");<br>
$response=$object_name->select_rows("*","table_name"," 1 "); to count  all rows

<h5> 6 . select sum of rows</h5>
<p>Usage: </p>
$object_name->select_sum($column,$table,$condition);<br>
returns resultset if query successfully executed else display error<br>
example:<br>
$response=$object_name->select_sum("col1","table_name"," col1 > '10' ");<br>
$response=$object_name->select_rows("col1","table_name"," 1 "); to sum  all rows
