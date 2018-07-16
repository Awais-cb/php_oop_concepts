<?php
include 'functions.php';

$customer = new Customer();
echo $customer->getEmail();

$student = new Student();
echo $student->getEmail();
