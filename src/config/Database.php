<?php
/**
 * Configuración y conexión a la base de datos.
 */
class Database {
    private string $host = 'localhost';
    private string $db_name = 'tasks';
    private string $username = 'root';
    private string $password = '';
    public ?PDO $conn = null;

    /**
     * Obtiene la conexión a la base de datos.
     *
     * @return PDO|null
     */
    public function getConnection(): ?PDO {
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
