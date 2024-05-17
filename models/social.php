<?php

function socialLinks()
{
    global $pdo;
    $sql = "SELECT * FROM social Where status = 1";
    $prepare = $pdo->prepare($sql);
    try {
        $prepare->execute();
        return $prepare->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $e){
        debug($e->getMessage(), 1);
    }
}

function getAllSocial()
{
    global $pdo;
    $sql = "SELECT * FROM social";
    $prepare = $pdo->prepare($sql);
    try {
        $prepare->execute();
        return $prepare->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $e){
        debug($e->getMessage(), 1);
    }
}

function getSocial($id)
{
    global $pdo;
    $sql = "SELECT * FROM social WHERE id = $id";
    $prepare = $pdo->prepare($sql);
    try {
        $prepare->execute();
        return $prepare->fetch(PDO::FETCH_ASSOC);
    }catch (PDOException $e){
        debug($e->getMessage(), 1);
    }
}

function socialCreated($link, $icon, $status)
{
    global $pdo;
    $sql = "INSERT INTO social (link, icon, status) VALUES (:link, :icon, :status)";
    $prepare = $pdo->prepare($sql);
    $prepare->execute(['link' => $link, 'icon' => $icon, 'status' => $status]);
    return true;
}

function socialUpdate($id, $link, $icon, $status)
{
    global $pdo;
    $sql = "Update social SET link = :link, icon = :icon, status = :status WHERE id = $id";
    $prepare = $pdo->prepare($sql);
    $prepare->execute(['link' => $link, 'icon' => $icon, 'status' => $status]);
    return true;
}

function getSocialDelete($id)
{
    global $pdo;
    $sql = "DELETE FROM social WHERE id = $id";
    $prepare = $pdo->prepare($sql);
    try {
        $prepare->execute();
        return true;
    }catch (PDOException $e){
        debug($e->getMessage(), 1);
    }
}
