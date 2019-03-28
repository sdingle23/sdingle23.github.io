<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Zesty Penguin</title>
    
    <link rel="icon" type="image/png" href="assets/images/logo2.png">
    <link rel="icon" type="image/gif" href="assets/images/logo2.png">
    <link rel="icon" type="image/jpeg" href="assets/images/logo2.png">
    <link rel="icon" type="image/vnd.microsoft.icon" href="assets/images/logo2.png">
    
    <link rel="stylesheet" href="/assets/css/zesty.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $path;?>/assets/css/zesty.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,900" rel="stylesheet">
    <script src="assets/js/menuhider.js"></script> 
    <script src="<?php echo $path;?>assets/js/menu_hide.js"></script> 
    <script src="<?php echo $path;?>assets/js/dropdown.js"></script> 
    <script src="assets/js/menu_hide.js"></script> 
    <script src="assets/js/dropdown.js"></script> 
    <script>
        window.onscroll = function(){
            console.log("send help");
            var count = 300;
            var main = document.getElementById('main');
            var x = main.scrollTop;
            console.log(x);
            if (count < x) {
                    document.getElementById(mainText).style.color="blue";
                    console.log("Does this if work");
            }
        }
        
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("quickTop").style.display = "block";
                document.getElementById("head").style.backgroundColor = "white";
                document.getElementById("headColor").style.opacity = 0;
                document.getElementById("head").style.borderBottom= "solid"; 
                document.getElementById("head").style.borderColor = "orange";
                
                var list = document.getElementsByTagName("UL")[0];
                
                
                var listArray = list.getElementsByTagName("A");
                
                for( var i = 0; i < listArray.length; i++){
                    
                   listArray[i].style.color = "black";
                    
                    if(listArray[i].matches('.active')){
                        listArray[i].style.borderColor = "black";
                    }//end if statement
                }//End for loop
            } 
            else {
                document.getElementById("quickTop").style.display = "none";
                document.getElementById("head").style.background = "none";
                document.getElementById("head").style.border= "none";
                document.getElementById("head").style.backgroundColor = "";
                document.getElementById("headColor").style.opacity = 0.6;  
                
                var list = document.getElementsByTagName("UL")[0];
                var listArray = list.getElementsByTagName("A");
                
                for(var i = 0; i < listArray.length; i++){
                    
                    listArray[i].style.color = "white";
                    if(listArray[i].matches('.active')){
                        listArray[i].style.borderColor = "white";
                    }//end if statement
                }//end for loop
            }
        }
    </script>
</head>
