<?php
function getAllNews()
{
    global $pdo;
    $sql = "SELECT id, title, category_id, image, created_date FROM news WHERE status = 1";
    $prepare = $pdo->prepare($sql);
    try {
        $prepare->execute();
        return $prepare->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $e){
        debug($e->getMessage(), 1);
    }
}

function getNews()
{
    global $pdo;
    $sql = "SELECT * FROM news";
    $prepare = $pdo->prepare($sql);
    try {
        $prepare->execute();
        return $prepare->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $e){
        debug($e->getMessage(), 1);
    }
}

function getNewId($id)
{
    global $pdo;
    $sql = "SELECT * FROM news WHERE id = $id";
    $prepare = $pdo->prepare($sql);
    try {
        $prepare->execute();
        return $prepare->fetch(PDO::FETCH_ASSOC);
    }catch (PDOException $e){
        debug($e->getMessage(), 1);
    }
}

function getNewCreated($title, $description, $body, $created_date, $category_id, $status)
{
    global $pdo;
    $sql = "INSERT INTO news (title, description, body, created_date, category_id, status) VALUES (:title, :description, :body, :created_date, :category_id, :status)";
    $prepare = $pdo->prepare($sql);

    $prepare->bindValue(':title', $title, PDO::PARAM_STR);
    $prepare->bindValue(':description', $description, PDO::PARAM_STR);
    $prepare->bindValue(':body', $body, PDO::PARAM_STR);
    $prepare->bindValue(':created_date',  date("Y-m-d H:i:s",strtotime($created_date)), PDO::PARAM_STR);
    $prepare->bindValue(':category_id', $category_id, PDO::PARAM_INT);
    $prepare->bindValue(':status', $status, PDO::PARAM_STR);

    try {
        $prepare->execute();
        return $pdo->lastInsertId();
    } catch (PDOException $e){
        debug($e->getMessage(), 1);
    }
}

function insertImage($fileName,$lastId)
{
    global $pdo;
    $sql = "UPDATE news SET image=:image WHERE id=:id";
    $prepare = $pdo->prepare($sql);
    $prepare->bindValue(':image', $fileName, PDO::PARAM_STR);
    $prepare->bindValue(':id', $lastId, PDO::PARAM_INT);
    try {
        $prepare->execute();
        return true;
    } catch (PDOException $e){
        debug($e->getMessage(), 1);
    }
}

function getNewUpdated($id,$title, $description, $body, $category_id, $status)
{
    global $pdo;
    $sql = "UPDATE news SET title = :title, description = :description, body = :body, category_id = :category_id, status = :status WHERE id = :id";
    $prepare = $pdo->prepare($sql);

    $prepare->bindParam(':title', $title, PDO::PARAM_STR);
    $prepare->bindParam(':description', $description, PDO::PARAM_STR);
    $prepare->bindParam(':id', $id,PDO::PARAM_INT);
    $prepare->bindParam(':body', $body, PDO::PARAM_STR);
    $prepare->bindParam(':category_id', $category_id, PDO::PARAM_INT);
    $prepare->bindParam(':status', $status, PDO::PARAM_STR);

    try {
        $prepare->execute();
        return true;
    } catch (PDOException $e){
        debug($e->getMessage(), 1);
    }
}

function getNewDelete($id)
{
    global $pdo;
    $sql = "Delete FROM news where id = $id";
    $prepare = $pdo->prepare($sql);
    try {
        $prepare->execute();
        return true;
    }catch (PDOException $e){
        debug($e->getMessage(), 1);
    }
}

function getNewsById($id){
    global $pdo;
    // id dagi ma'lumotlarni olib kelamiz
    $sql = "SELECT * FROM news WHERE status = 1 and id = $id";
    $prepare = $pdo->prepare($sql);
    $prepare->execute();
    return $prepare->fetch();
}

function update_seen_count($id)
{
    global $pdo;
    $sql = "Update news Set seen_count = seen_count+1 where id = $id";
    $prepare = $pdo->prepare($sql);
    $prepare->execute();
    return true;
}

function getCategoryBy($id)
{
    global $pdo;
    $sql = "SELECT * FROM news WHERE category_id = $id";
    $prepare = $pdo->prepare($sql);
    try {
        $prepare->execute();
        return $prepare->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $e){
        debug($e->getMessage(), 1);
    }
}
function getTagById($tag_id)
{
    global $pdo;
    $sql = "SELECT * FROM news WHERE category_id = $tag_id";
    $prepare = $pdo->prepare($sql);
    try {
        $prepare->execute();
        return $prepare->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $e){
        debug($e->getMessage(), 1);
    }
}
