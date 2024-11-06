<?php
require_once 'src/controllers/TaskController.php';

$taskController = new TaskController();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['action'] === 'create') {
    $taskController->createTask($_POST['title'], $_POST['description']);
}
