<?php
    function debug($var, $die = false)
    {
        if(!$die){
            echo "<pre>";
            print_r($var);
        }else{
            echo "<pre>";
            print_r($var);
            die();
        }
    }

function getImage($tablename, $id, $image){
    $file = '/upload/' . $tablename . '/' . $id . '/' . $image;
    if(is_file($file)){
        return $file;
    }else{
        return UPLOADS . "/default/img.png";
    }
}

function deleteImage($tablename, $id, $image)
{
    $fileTo = __DIR__ . '/upload/' . $tablename . '/' . $id . '/' . $image;
    if(is_file($fileTo)){
        unlink($fileTo);
        return true;
    }else{
        return true;
    }
}
function getImageUpdate($tablename, $id, $image){
    $file = '/upload/' . $tablename . '/' . $id . '/' . $image;

    if(is_file($file)){
        return $file;
    }else{
        return UPLOADS . "/default/img.png";;
    }
}
function saveImage($id,$tableName,$file){
    $format = '';
    $type = $file['type'];
    $fileFrom = $file['tmp_name'];
    $fileName = md5($file['name']);

    switch ($type){
        case 'image/jpeg': $format = 'jpg'; break;
        case 'image/png': $format ='png'; break;
        case 'image/png': $format ='pdf'; break;
        default:$format = false;break;
    }
    if(!empty($format)){
        $dir = __DIR__ . UPLOADS . '/' . $tableName . '/' . $id ;
        if(!is_dir($dir)){
            mkdir($dir,0777,true);
        }
        $fileTo = $dir . '/' .$fileName . '.' . $format;
        move_uploaded_file($fileFrom,$fileTo);
        return $fileName . '.' . $format;
    }
    return false;
}

