<?php

function getCategoryById($id)
{
    global $pdo;

    $sql = "SELECT id, title, status FROM category WHERE id = :id and status = 1";
    $prepare = $pdo->prepare($sql);
    try {
        $prepare->execute(['id'=> $id]);
        return $prepare->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $e){
        debug($e->getMessage(), 1);
    }
}

function getAllCategories(){
    global $pdo;
    $sql = "SELECT * FROM category";
    $prepare = $pdo->prepare($sql);
    try {
        $prepare->execute();
        return $prepare->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $e){
        debug($e->getMessage(), 1);
    }
}

function getCategoryId($id)
{
    global $pdo;
    $sql = "SELECT * FROM category WHERE id = :id";
    $prepare = $pdo->prepare($sql);
    try {
        $prepare->execute(['id' => $id]);
        return $prepare->fetch();
    }catch (PDOException $e){
        debug($e->getMessage(), 1);
    }
}

function getCategoryUpdate($id, $title,$status)
{
    global $pdo;
    $sql = "UPDATE category SET title = :title, status = :status WHERE id = :id";
    $prepare = $pdo->prepare($sql);
    $prepare->bindParam(':title', $title, PDO::PARAM_STR);
    $prepare->bindParam(':id', $id, PDO::PARAM_INT);
    $prepare->bindParam(':status', $status, PDO::PARAM_INT);
    try {
        $prepare->execute();
        return true;
    } catch (PDOException $e){
        debug($e->getMessage(), 1);
    }
}

function getCategoryCreate($title,$status)
{
    global $pdo;
    $sql = "INSERT INTO category (title, status) VALUES (:title, :status)";
    $prepare = $pdo->prepare($sql);
    $prepare->bindParam(':title', $title, PDO::PARAM_STR);
    $prepare->bindParam(':status', $status, PDO::PARAM_INT);
    try {
        $prepare->execute();
        return true;
    } catch (PDOException $e){
        debug($e->getMessage(), 1);
    }
}

?>
