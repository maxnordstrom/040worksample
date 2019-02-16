<?php

// Bootstrap the database
include('db.php');


// Get "static" user input
$courseID =         $_POST['course_id'] ?? '';
$courseDate =       $_POST['course_date'] ?? '';
$companyName =      $_POST['company_name'] ?? '';
$companyPhone =     $_POST['company_phone'] ?? '';
$companyEmail =     $_POST['company_email'] ?? '';

// Check that there is no empty value


// Change database table depending on courseID
$tableName = 'course' . $courseID;


$i = 1;
while(isset($_POST['participant_name_' . $i])) {

  // Get the "dynamic" user input
  $participantName =  $_POST['participant_name_' . $i] ?? '';
  $participantPhone = $_POST['participant_phone_' . $i] ?? '';
  $participantEmail = $_POST['participant_email_' . $i] ?? '';

  // Check that value is not empty

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

// Success or fail message

