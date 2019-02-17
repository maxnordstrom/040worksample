<?php

// Bootstrap the database
include('db.php');


// Get "static" user input
$courseID =         $_POST['course_id'] ?? false;
$courseDate =       $_POST['course_date'] ?? false;
$companyName =      $_POST['company_name'] ?? false;
$companyPhone =     $_POST['company_phone'] ?? false;
$companyEmail =     $_POST['company_email'] ?? false;


// Change database table depending on courseID
$tableName = 'course' . $courseID;

$i = 1;
while(isset($_POST['participant_name_' . $i])) {

  // Get the "dynamic" user input
  $participantName =  $_POST['participant_name_' . $i] ?? false;
  $participantPhone = $_POST['participant_phone_' . $i] ?? false;
  $participantEmail = $_POST['participant_email_' . $i] ?? false;


  // Insert user input to database
  $sql = 'INSERT INTO ' . $tableName . '(course_id, course_date, company_name, company_phone, company_email, participant_name, participant_phone, participant_email) VALUES(:course_id, :course_date, :company_name, :company_phone, :company_email, :participant_name, :participant_phone, :participant_email)';
  $stmt = $pdo->prepare($sql);
  $stmt->execute([
                  'course_id'     => $courseID,
                  'course_date'   => $courseDate,
                  'company_name'  => $companyName,
                  'company_phone' => $companyPhone,
                  'company_email' => $companyEmail,
                  'participant_name'  => $participantName,
                  'participant_phone' => $participantPhone,
                  'participant_email' => $participantEmail
                ]);

  $i++;
}

// Redirect to startpage
$url='http://localhost:8888/040worksample/';
echo '<META HTTP-EQUIV=REFRESH CONTENT="4; '.$url.'">';

