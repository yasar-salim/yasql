yasql

yasql is mysql library using php language

How to use yasql?

Step 1 : Create yasql object

$object_name=new yasql();



Step 2 : Call function using object name

List of functions:

1 . insert query

Usage:

$object_name->insert($table,$values);
returns 1 if query successfully executed else display error
example:
$response=$object_name->insert("table_name"," col1 = 'abc' , col2 = '10'");

2. update query

Usage:

$object_name->update($table,$updation,$condition);
returns 1 if query successfully executed else display error
example:
$response=$object_name->update("table_name" , " col1 = 'abcd' " , "col2>10");
$response=$object_name->update("table_name" , " col1 = 'abcde' " , "1"); to update all rows

3 . delete query

Usage:

$object_name->delete($table,$condition);
returns 1 if query successfully executed else display error
example:
$response=$object_name->delete("table_name"," col1 > '10' ");
$response=$object_name->delete("table_name","1"); to delete all rows

4 . select rows

Usage:

$object_name->select_rows($column,$table,$condition);
returns resultset if query successfully executed else display error
example:
$response=$object_name->select_rows("col1","table_name"," col1 > '10' ");
$response=$object_name->select_rows("*","table_name"," col1 > '10' "); to fetch all columns

5 . select count of rows

Usage:

$object_name->select_count($column,$table,$condition);
returns resultset if query successfully executed else display error
example:
$response=$object_name->select_count("","table_name"," col1 > '10' ");
$response=$object_name->select_rows("","table_name"," 1 "); to count all rows

6 . select sum of rows

Usage:

$object_name->select_sum($column,$table,$condition);
returns resultset if query successfully executed else display error
example:
$response=$object_name->select_sum("col1","table_name"," col1 > '10' ");
$response=$object_name->select_rows("col1","table_name"," 1 "); to sum all rows

7 . select average of rows

Usage:

$object_name->select_avg($column,$table,$condition);
returns resultset if query successfully executed else display error
example:
$response=$object_name->select_sum("col1","table_name"," col1 > '10' ");
$response=$object_name->select_rows("col1","table_name"," 1 "); to average all rows

8 . select minimum value from a row

Usage:

$object_name->select_min($column,$table,$condition);
returns resultset if query successfully executed else display error
example:
$response=$object_name->select_min("col1","table_name"," 1 ");

9 . select maximum value from a row

Usage:

$object_name->select_max($column,$table,$condition);
returns resultset if query successfully executed else display error
example:
$response=$object_name->select_max("col1","table_name"," 1 ");
