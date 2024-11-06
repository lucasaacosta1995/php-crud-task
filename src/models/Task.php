<?php
/**
 * Clase Task que representa una tarea en el sistema.
 */
class Task {
    private PDO $conn;
    private string $table_name = "tasks";

    public int $id;
    public string $title;
    public string $description;
    public string $created_at;

    /**
     * Constructor de Task.
     *
     * @param PDO $db Conexión a la base de datos.
     */
    public function __construct(PDO $db) {
        $this->conn = $db;
    }

    /**
     * Crea una nueva tarea en la base de datos.
     *
     * @return bool
     */
    public function create(): bool {
        $query = "INSERT INTO {$this->table_name} (title, description) VALUES (:title, :description)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':description', $this->description);
        return $stmt->execute();
    }
}
