<?php
/*include_once '../scripts/connection.php';*/
class Migrations
{
    private $conn;

    public function execute_query($sql)
    {
        $this->drop_results();
        return $this->conn->query($sql);
    }

    public function execute_multi_query($sql)
    {
        $this->drop_results();
        return $this->conn->multi_query($sql);
    }

    public function set_connection($connection)
    {
        $this->conn = $connection;
    }

    private function drop_results()
    {
        while($this->conn->next_result()) $this->conn->store_result();
    }
}
?>