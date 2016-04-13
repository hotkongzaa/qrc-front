<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require './EmailContent.php';
require './SendingEmail.php';

$iniConfiguration = parse_ini_file("configuration.ini");


$contactName = (string) filter_input(INPUT_GET, 'name');
$contactEmail = (string) filter_input(INPUT_GET, 'email');
$contactPhone = (string) filter_input(INPUT_GET, 'phone');
$contactSubject = (string) filter_input(INPUT_GET, 'subject');
$contactMessage = (string) filter_input(INPUT_GET, 'message');

$emailContent = new EmailContent();
$emailBody = $emailContent->getEmailContentContact($contactName, $contactSubject, $contactMessage, $contactPhone);
$sendingEmail = new SendingEmail($iniConfiguration['email.host'], $iniConfiguration['email.username'], $iniConfiguration['email.password'], $iniConfiguration['email.official'], "Email Contact: " . $contactSubject, $emailBody, $contactEmail, $contactName);
echo $sendingEmail->sendingEmail();


