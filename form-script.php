<?php

// Bootstrap the database
include('db.php');

// Get user input
$courseID =         $_POST['course_id'] ?? '';
$courseDate =       $_POST['course_date'] ?? '';
$companyName =      $_POST['company_name'] ?? '';
$companyPhone =     $_POST['company_phone'] ?? '';
$companyEmail =     $_POST['company_email'] ?? '';
$participantName =  $_POST['participant_name'] ?? '';
$participantPhone = $_POST['participant_phone'] ?? '';
$participantEmail = $_POST['participant_email'] ?? '';


// Change table depending on courseID
$tableName = 'course' . $courseID;


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

