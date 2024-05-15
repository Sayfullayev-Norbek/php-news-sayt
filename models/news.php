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
