<?
    include "1Lib.php";
    $query = "insert into memo(name, memo, regdate)
              values('hong', 'hi', '2021-07-23 18:18:00')";
              
    mysqli_query($connect, $query);
?>
