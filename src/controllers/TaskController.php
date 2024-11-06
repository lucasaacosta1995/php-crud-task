<?php
require_once '../config/Database.php';
require_once '../models/Task.php';

/**
 * Controlador para manejar las tareas.
 */
class TaskController {
    private PDO $db;
    private Task $task;

    public function __construct() {
        $this->db = (new Database())->getConnection();
        $this->task = new Task($this->db);
    }

    /**
     * Crea una nueva tarea.
     *
     * @param string $title Título de la tarea.
     * @param string $description Descripción de la tarea.
     * @return void
     */
    public function createTask(string $title, string $description): void {
        $this->task->title = $title;
        $this->task->description = $description;
        if ($this->task->create()) {
            echo json_encode(['message' => 'Task created successfully']);
        } else {
            echo json_encode(['message' => 'Failed to create task']);
        }
    }
}
