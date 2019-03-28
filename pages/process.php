<!--Pull page head via php-->
<?php
    $path = './';
    include $path.'../assets/inc/header.php';

	function test_input($data) 
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$visName = test_input($_POST['visName']);
	$visProf = test_input($_POST['visProf']);
	$feedback = test_input($_POST['feedback']);
	$reason = test_input($_POST['reason']);
	$rating = test_input($_POST['rating']);
	$learned = test_input($_POST['learned']);
    if(isset($_POST['otherBox'])){
        $reason = test_input($_POST['otherBox']);
    }

	$destination_email = "scp1910@rit.edu";
    
    //$destination_email = "RITISTprofessor@gmail.com";
	
    $email_subject = "Zesty Penguin - Site Visitor";
	$email_body = "Visitor Name: $visName\n";
	$email_body .= "Visitor Profession: $visProf\n";
	$email_body .= "Reason For Visiting: $reason\n";
	$email_body .= "Feedback About Site: $feedback\n";
	$email_body .= "Visitor Rating: $rating\n";
	$email_body .= "What They Learned: $learned\n";

	mail($destination_email, $email_subject, $email_body);
	
	require $path.'../../../../dbConnect.inc';
	
	$stmt=$mysqli->prepare('INSERT INTO zestysurvey (name, profession, feedback, reason, rating, learned) VALUES (?,?,?,?,?,?)');
							
	$stmt->bind_param("ssssis", $visName, $visProf, $feedback, $reason, $rating, $learned);

	$stmt->execute();

	$stmt->close();
	
?>

<!--Pull page nav bar via php-->
<?php
    $path = './';
    include $path.'../assets/inc/navigation.php';
?>


<div id="hero">
            <div id="heroText">
                <h1>
                    Thank You!
                </h1>
            </div>
        </div>
    <div id="back"></div>
    <div id="main">
        <div id="mainText">
        <h1>
            Thank you for your feedback!
        </h1>
	<a href="survey.php">Back To Survey</a>
	<br>
	<br>
        <p class="surveyRep">We will use your feedback for our knowledge and for improving our site.</p>

        </div>
    </div>

<!--Pull footer content via php-->
<?php
    $page='process';
    include $path."../assets/inc/footer.php";
?>
                
