<!--Pull page head via php-->
<?php
    $path = './';
    include $path.'../assets/inc/header.php';
?>

<!--Pull page nav bar via php-->
<?php
    $path = './';
    include $path.'../assets/inc/navigation.php';
?>

<!--Connect to DB and pull in page content-->
<?php
    $page='linuxinstall';
    require $path.'../../../../dbConnect.inc';
    $sql = "SELECT content FROM zestypenguin WHERE page='$page'";
    $result = $mysqli->query($sql);
    
    if($result->num_rows > 0){
        while($row = $result->FETCH_ASSOC()){
            echo $row['content'];
        }
    }
    else{
        echo "0 results, check code for error";
    }
?>

<!--Pull footer content via php-->
<?php 
    include $path.'../assets/inc/footer.php';
?>