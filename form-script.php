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

print_r($courseID);

$sql = 'INSERT INTO course1(course_id, course_date, company_name, company_phone, company_email, participant_name, participant_phone, participant_email) VALUES(:course_id, :course_date, :company_name, :company_phone, :company_email, :participant_name, :participant_phone, :participant_email)';
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







// $stmt = $pdo->query('SELECT * FROM course1');

// Fetch as array
// while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//   echo $row['course_date'] . '<br>';
// }


// Fetch as object
// while($row = $stmt->fetch(PDO::FETCH_OBJ)){
//   echo $row->course_date . '<br>';
// }


// User Input
// $participantName = 'Foo Bar';

// Positional Params
// $sql = 'SELECT * FROM course1 WHERE participant_name = ?';
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$participantName]);
// $posts = $stmt->fetchAll(PDO::FETCH_OBJ);


// // Named Params
// $sql = 'SELECT * FROM course1 WHERE participant_name = :participant_name';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['participant_name' => $participantName]);
// $posts = $stmt->fetchAll(PDO::FETCH_OBJ);

// // var_dump($posts);

// foreach($posts as $post) {
//   echo $post->course_date . '<br>';
// }

// Insert Data
// $title = 'Post Five';
// $body = 'This is post five';
// $author = 'Max';



// $sql = 'INSERT INTO
// course1(course_date, company_name, company_phone, company_email, participant_name, participant_phone, participant_email)
// VALUES(:course_date, :company_name, :company_phone, :company_email, :participant_name, :participant_phone, :participant_email)';
// $stmt = $pdo->query($sql);
// $stmt->execute([
//                 'course_date'   => $courseDate,
//                 'company_name'  => $companyName,
//                 'company_phone' => $companyPhone,
//                 'company_email' => $companyEmail,
//                 'participant_name'  => $participantName,
//                 'participant_phone' => $participantPhone,
//                 'participant_email' => $participantEmail
//               ]);