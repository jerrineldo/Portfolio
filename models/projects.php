<?php

class Project {

    public function getallProjects($db){
        $sql = "SELECT * FROM projects";
        $pst = $db->prepare($sql);
        $pst->execute();
        $projects = $pst->fetchAll(\PDO::FETCH_OBJ);
        return $projects;
    }
}
?>