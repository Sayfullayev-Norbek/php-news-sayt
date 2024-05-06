<?php

function getCategoryById($id)
{
    global $pdo;

    $sql = "SELECT id, title, status FROM category WHERE id = :id and status = 1";
    $prepare = $pdo->prepare($sql);
    try {
        //$prepare->bindParam(':categoryId', $categoryId, PDO::PARAM_INT);
        $prepare->execute(['id'=> $id]);
        return $prepare->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $e){
        debug($e->getMessage(), 1);
    }
}
