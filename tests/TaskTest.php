<?php

use PHPUnit\Framework\TestCase;

require_once 'src/models/Task.php';
require_once 'src/config/Database.php';

/**
 * Clase de prueba para el modelo Task.
 */
class TaskTest extends TestCase {
    private PDO $db;
    private Task $task;

    protected function setUp(): void {
        $this->db = (new Database())->getConnection();
        $this->task = new Task($this->db);
    }

    /**
     * Prueba de creación de una tarea.
     */
    public function testCreateTask(): void {
        $this->task->title = 'Test Task';
        $this->task->description = 'This is a test description';
        $this->task->status = 'pending';

        $result = $this->task->create();
        $this->assertTrue($result);
    }

    /**
     * Prueba de obtención de todas las tareas.
     */
    public function testReadAllTasks(): void {
        $tasks = $this->task->readAll();
        $this->assertIsArray($tasks);
    }

    /**
     * Prueba de actualización del estado de una tarea.
     */
    public function testUpdateStatus(): void {
        $this->task->id = 1;
        $this->task->status = 'completed';

        $result = $this->task->updateStatus();
        $this->assertTrue($result);
    }
}
