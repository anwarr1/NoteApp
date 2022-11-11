<?php
class Database
{

    private $url = "mysql:host=localhost;dbname=noteapp";
    private $username = "root";
    private $mdp = "";
    private $db;
    public function __construct()
    {
        $this->db = new PDO($this->url, $this->username, $this->mdp);

        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    public function addNote($nom, $desc)
    {
        $sql = "insert into notes (name,description,DateCreated) values(:nom,:desc,now()) ";
        $preparedStatement = $this->db->prepare($sql);
        $preparedStatement->execute(['nom' => $nom, 'desc' => $desc]);


    }

}

?>