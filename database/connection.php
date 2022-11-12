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

        if ($preparedStatement) {
            $_SESSION['added'] = "Added with success !";
            header('location:index.php');

        }
    }
    public function DeleteNote($id)
    {
        $sql = "delete from notes where id=:id ";
        $preparedStatement = $this->db->prepare($sql);
        $preparedStatement->execute(['id' => $id,]);
        if ($preparedStatement) {
            $_SESSION['deleted'] = "Deleted with success !";
            header('location:index.php');
        }

    }
    public function UpdateNote($nom, $desc, $id)
    {
        $sql = "Update notes set name=:nom , description=:desc where id=:id";
        $preparedStatement = $this->db->prepare($sql);
        $preparedStatement->execute(['nom' => $nom, 'desc' => $desc, ':id' => $id]);
        if ($preparedStatement) {
            $_SESSION['updated'] = "Updated with success !";
            header('location:index.php');

        }

    }
    public function DisplayAllNotes()
    {
        $sql = "Select * from notes";
        $preparedStatement = $this->db->prepare($sql);
        $preparedStatement->execute();

        while ($note = $preparedStatement->fetch(PDO::FETCH_OBJ)) {


            echo "<tr>
            <td>$note->name</td>
            <td>$note->description</td>
            <td><button><a href='update.php?id=$note->id'>Update</a></button>
            <button><a href='delete.php?id=$note->id'>Supprimer</a></button>
            </tr> ";


        }

    }

    public function DisplayNote($id)
    {
        $sql = "Select * from notes where id=:id";
        $preparedStatement = $this->db->prepare($sql);
        $preparedStatement->execute(['id' => $id,]);

        return $note = $preparedStatement->fetch(PDO::FETCH_OBJ);


    }



}

?>