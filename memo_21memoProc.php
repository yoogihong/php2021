<?
    include "1Lib.php";

    $a = $_GET['name'];
    $b = $_GET['memo'];
    $c = date("Y-m-d H:i:s");
    
    $query = "insert into memo(name, memo, regdate)
    values('$a', '$b', '$c')";
    mysqli_query($connect, $query);
?>

<script>
    location.href='2memo.php';
</script>
