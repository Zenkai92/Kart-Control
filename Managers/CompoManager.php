<?php
class CompoManager
{


    private PDO $db;

    public function __construct()
    {
        $dbName = "kart_control";
        $port = 3306;
        $userName = "root";
        $password = "root";
        try {
            $this->setDb(new PDO("mysql:host=localhost;dbname=$dbName;port=$port;charset=utf8mb4", $userName, $password));
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }


    public function setDb($db): void
    {
        $this->db = $db;
    }

    public function create(Compo $compo)
    {
        $req = $this->db->prepare("INSERT INTO compo (bodies, tires, gliders, drivers, user_id) VALUES (:bodies, :tires, :gliders, :drivers, :user_id)");
        $req->bindValue(":bodies", $compo->getBodies(), PDO::PARAM_STR);
        $req->bindValue(":tires", $compo->getTires(), PDO::PARAM_STR);
        $req->bindValue(":gliders", $compo->getGliders(), PDO::PARAM_STR);
        $req->bindValue(":drivers", $compo->getDrivers(), PDO::PARAM_STR);
        $req->bindValue(":user_id", $compo->getUserId(), PDO::PARAM_INT);


        $req->execute();
    }

    public function getByID(int $id)
    {
        $req = $this->db->prepare("SELECT * FROM compo WHERE id = :id");
        $req->bindValue(":id", $id, PDO::PARAM_INT);
        $req->execute();
        $data = $req->fetch();
        $compo = new Compo($data);
        return $compo;
    }


    public function getAll()
    {
        $compos = [];
        $req = $this->db->prepare("SELECT * FROM compo ORDER BY id");
        $req->execute();
        $datas = $req->fetchALL();
        foreach ($datas as $data) {
            $compo = new Compo($data);
            $compos [] = $compo;
        }
        return $compos ;
    }


    public function update(Compo $compo)
    {
        $req = $this->db->prepare("UPDATE compo SET bodies = :bodies, tires =:tires, gliders = :gliders, drivers = :drivers, user_id = :user_id) WHERE id = :id");

        $req->bindValue(":id", $compo->getId(), PDO::PARAM_INT);
        $req->bindValue(":bodies", $compo->getBodies(), PDO::PARAM_STR);
        $req->bindValue(":tires", $compo->getTires(), PDO::PARAM_STR);
        $req->bindValue(":gliders", $compo->getGliders(), PDO::PARAM_STR);
        $req->bindValue(":drivers", $compo->getDrivers(), PDO::PARAM_STR);
        $req->bindValue(":user_id", $compo->getDrivers(), PDO::PARAM_INT);

        $req->execute();
    }

    public function delete(int $id)
    {
        $req = $this->db->prepare("DELETE FROM compo WHERE id = :id");
        $req->bindValue(":id", $id, PDO::PARAM_INT);
        $req->execute();
    }

}