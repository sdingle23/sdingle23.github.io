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
    <div id="hero">
            <div id="heroImg"></div>
            <div id="heroText">
                <h1>
                    Reference
                </h1>
            </div>
    </div>
    <div id="back"></div>
    <div id="main">
        <?php
            $page='reference';
            require $path.'../../../../dbConnect.inc';
            $sql = 'SELECT website,lastUpdate,useOnSite,Image FROM `ZestyPenguinReference`';
              $res=$mysqli->query($sql);
              if($res){
                $tableID = "referenceTable";
                $sourceId = "refSource";
                $updateId = "refUpdate";
                $useId = "refUse";
                $imageId = "refImgHold";
                echo "<table id = $tableID>";
                echo "<tr>";
                echo "<th id=$sourceId>Source</th>";
                echo "<th id=$updateId>Last Updated</th>";
                echo "<th id=$useId>Use</th>";
                echo "<th id=$imageId>Image</th>";
                echo "</tr>";
                while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
                    $records[] = $rowHolder;
                    echo "<tr>";
                    
                    $source = $rowHolder['website'];
                    echo "<td id=$sourceId>$source</td>";
                    
                    $lastUpdate = $rowHolder['lastUpdate'];
                    echo "<td id=$updateId>$lastUpdate</td>";
                    
                    $use = $rowHolder['useOnSite'];
                    echo "<td id=$useId>$use</td>";
                    
                    $image = $rowHolder['Image'];
                    echo "<td id=$imageId>".'<img id="refImg" src="data:image/jpeg;base64,'.base64_encode($image).'"/> </td>';
                    
                    echo "</tr>";
                }
                echo "</table>";
              }
        ?>
</div>

<!--Pull footer content via php-->
<?php 
    include './../assets/inc/footer.php';
?>