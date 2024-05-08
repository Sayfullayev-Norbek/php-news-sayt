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
    $row = $prepare->fetch();

    if ($row){
        // o'sha id dagi seen count ga har safar 1 qiymatini qo'shamiz va bazaga saqlaymiz
        $seen_count = $row['seen_count']+1;
        $update = $pdo->prepare("UPDATE news SET seen_count = $seen_count WHERE id = $id");
        $update->execute();
        // saqlangan ma'lumotni chaqirib olib return qilamiz.
        $my_sql = $sql;
        $prepare = $pdo->prepare($my_sql);
        $prepare->execute();
        $result = $prepare->fetch();
        return $result;
    }else{
        echo "ERROR!";
    }
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
