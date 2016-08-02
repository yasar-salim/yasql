<?php
//Author            :      Yasar Salim
//Company           :      Bytekat Technologies Private Limited
//Previous Versions :      nil
//Current Version   :      0.9


define('SERVER',"server_name");
define('USERNAME',"username");
define('PASSWORD',"password");
define('DATABASE',"database_name");



class yasql
{
  public function select_count($column,$table,$condition){
    $sql="select  max($column) from $table where $condition";
    $query=new response();
    return $query->select_math_queries($sql);
  }

  public function select_sum($column,$table,$condition){
    $sql="select  sum($column) from $table where $condition";
    $query=new response();
    return $query->select_math_queries($sql);
  }

  public function select_avg($column,$table,$condition){
    $sql="select  avg($column) from $table where $condition";
    $query=new response();
    return $query->select_math_queries($sql);
  }

  public function select_min($column,$table,$condition) {
    $sql="select  min($column) from $table where $condition";
    $query=new response();
    return $query->select_math_queries($sql);
  }

  public function select_max($column,$table,$condition) {
    $sql="select  max($column) from $table where $condition";
    $query=new response();
    return $query->select_math_queries($sql);
  }

  public function select_rows($column,$table,$condition){
      $sql="select  $column from $table where $condition";
      $query=new response();
      return $query->select_queries($sql);
  }

  public function delete($table,$condition){
      $sql="delete from $table where $condition";
      $query=new response();
      return $query->update_queries($sql);
  }

  public function update($table,$updation,$condition){
      $sql="update $table set $updation where $condition";
      $query=new response();
      return $query->update_queries($sql);
  }

  public function insert($table,$values){
      $sql="insert into $table set $values";
      $query=new response();
      return $query->update_queries($sql);
  }

}


class response
{
    public function select_math_queries($query){
        $db=new db();
        $conn=$db->connect();
        if(!$conn->connect_error){
            $result=$conn->query($query);
            if($result){
                $row= mysqli_fetch_array($result);
                $conn->close();
                return $row[0];
            }
            else{
                echo mysqli_error($conn);
            }
        }
        else {
            echo $conn->connect_error;
        }
        $conn->close();
    }

    public function select_queries($query){
        $db=new db();
        $conn=$db->connect();
        if(!$conn->connect_error){
            $result=$conn->query($query);
            if($result){
                while ($row[] = mysqli_fetch_array($result));
                $conn->close();
                return $row;
            }
            else{
                return mysqli_error($conn);
            }
        }
        else {
            echo $conn->connect_error;
        }
        $conn->close();
    }

    public function update_queries($query){
        $db=new db();
        $conn=$db->connect();
        if(!$conn->connect_error){
            if($conn->query($query)){
                $conn->close();
                return 1;
            }
            else{
                echo mysqli_error($conn);
            }
        }
        else {
            echo $conn->connect_error;
        }
        $conn->close();
    }
}

class db
{
    public function connect() {
      $conn = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
      return $conn;
    }
}
