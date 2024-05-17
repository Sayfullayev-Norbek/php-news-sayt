<?php

function getParentMenus()
{
    global $pdo;

    $sql = "Select * from menu WHERE status = 1 AND parent_id = 0 Order by order_by asc";
    $prepare = $pdo->prepare($sql);
    try {
        $prepare->execute();
        return $prepare->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $e){
        debug($e->getMessage(), 1);
    }
}

// Menu Read
function getMenuById($id)
{
    global $pdo;
    $sql = "Select * from menu where id = $id";
    $prepare = $pdo->prepare($sql);
    try {
        $prepare->execute();
        return $prepare->fetch(PDO::FETCH_ASSOC);
    }catch (PDOException $e){
        debug($e->getMessage(), 1);
    }
}

// Menu Delete
function getMenuDelete($id)
{
    global $pdo;
    $sql = "Delete FROM menu where id = $id";
    $prepare = $pdo->prepare($sql);
    try {
        $prepare->execute();
        return true;
    }catch (PDOException $e){
        debug($e->getMessage(), 1);
    }
}

// Menu hammasi
function getAllMenus()
{
    global $pdo;
    $sql = "Select * from menu";
    $prepare = $pdo->prepare($sql);
    try {
        $prepare->execute();
        return $prepare->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $e){
        debug($e->getMessage(), 1);
    }
}

function getMenuUpdate($id, $title, $parent_id, $order_by, $position, $status)
{
    global $pdo;
    $sql = "Update menu Set title= :title, parent_id = :parent_id, order_by = :order_by, position = :position, status = :status WHERE id = :id";
    $prepare = $pdo->prepare($sql);
    $prepare->bindParam(':title', $title, PDO::PARAM_STR);
    $prepare->bindParam(':id', $id, PDO::PARAM_INT);
    $prepare->bindParam(':parent_id', $parent_id, PDO::PARAM_INT);
    $prepare->bindParam(':order_by', $order_by, PDO::PARAM_INT);
    $prepare->bindParam(':position', $position, PDO::PARAM_INT);
    $prepare->bindParam(':status', $status, PDO::PARAM_INT);
    try {
        $prepare->execute();
        return true;
    } catch (PDOException $e){
        debug($e->getMessage(), 1);
    }
}

function getChildMenus($parent_id)
{
    global $pdo;
    $sql = "SELECT * FROM menu WHERE position = 1 AND status = 1 AND parent_id = $parent_id ORDER BY order_by";
    $prepare = $pdo->prepare($sql);

    try {
        $prepare->execute();
        return $prepare->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $e){
        debug($e->getMessage(), 1);
    }
}
