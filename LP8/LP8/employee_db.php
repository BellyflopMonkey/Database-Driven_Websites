<?php
function search_employee($last_name)
{
    global $db;
    $query = 'SELECT * FROM `employees` WHERE lastname LIKE "%"+:last_name+"%"';
    $statement = $db->prepare($query);
    $statement->bindValue(':last_name', $last_name);
    $statement->execute();
    $employees = $statement->fetchAll();
    $statement->closeCursor();
    return $employees;
}

function select_employee($last_name)
{
    global $db;
    $query = 'SELECT * FROM employees WHERE lastname = :last_name';
    $statement = $db->prepare($query);
    $statement->bindValue(':last_name', $last_name);
    $statement->execute();
    $employee = $statement->fetch();
    $statement->closeCursor();
    return $employee;
}

function selectField() {
    global $db;
    if (isset($_POST['field']))

        if ($_POST['field'] == "lastname") {
            $query = 'SELECT firstname, lastname, email FROM employees WHERE lastname like ?';
            $statement = $db->prepare($query);
            return $statement;
        if ($_POST['field'] == "email") {
                $query = 'SELECT firstname, lastname, email FROM employees WHERE email like ?';
                $statement = $db->prepre($query);
                $statement->bind_param('s', $_POST['keyword']);
                $statement->execute();
                $statement->store_result();
                if ($statement->num_rows > 0) {
                    $statement->bind_results($firstname, $lastname, $email);
                    while ($statement->fetch())
                        printf("%s, %s (%s)<br>", $lastname, $firstname, $email);
                } else {
                    echo "No results found.";
                }
            }
        }
}