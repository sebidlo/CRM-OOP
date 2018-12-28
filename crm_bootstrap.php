<h1>Aktywności</h1>

<?php

include_once 'model/Activity.php';
include_once 'model/Salesman.php';
include_once 'model/Company.php';
include_once 'logic/ActivityGenerator.php';

$salesman = new Salesman(1, "Jan Kowalski");
$salesman2 = new Salesman(2, "Jakis facet");
$salesman3 = new Salesman(3, "Anna AAA");

$company = new Company(1, "Firma AAAA");
$company2 = new Company(2, "Firma 2");
$company3 = new Company(3, "Firma 3");


$activities = array (
new Activity(1, "Nawiązanie kontaktu", new DateTime("2018-02-01 13:00"), $company, $salesman, ActivityType::PHONE, ActivityStatus::CLOSED, "notatka"),
new Activity(2, "Nawiązanie kontaktu", new DateTime("2018-03-01 14:00"), $company2, $salesman2, ActivityType::METTONG, ActivityStatus::CLOSED, "notatka JALDANDNADA"),
new Activity(3, "Nawiązanie kontaktu", new DateTime("2018-03-01 14:00"), $company3, $salesman3, ActivityType::EMAIL, ActivityStatus::IN_PROGRES, "notatka JALDANDNADA")
);

//echo $activity->getInfo();

$myActivity = $activities[0];

$activityGenerator = new ActivityGenerator();
$activityGenerator->generate($activities);
