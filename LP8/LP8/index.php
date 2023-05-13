<?php
include 'header.php';
require('database.php');
require('employee_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'search_employee';
    }
}
if ($action == 'search_employee') {
    include('search_lastname.php');
} else if ($action == 'run_search') {
    $last_name = filter_input(INPUT_POST, 'last_name');
    $employees = search_employee($last_name);
    include('search_lastname.php');
}
if ($action == 'field') {
    include('search2.php');
}

include 'footer.php';


