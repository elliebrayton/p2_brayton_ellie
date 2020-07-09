<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'elliebrayton@icloud.com' // Put you mail domain here
	,
	'Project1_Brayton_Ellie' // Put your site name / form name here
	,
	'elliebrayton@icloud.com' // Where will the form notification be sent?
	,
	'noreply@elliebrayton.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
