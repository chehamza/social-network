<?php

abstract class PostRepository extends Db{
    public static function request($request){
        // Connect to the database and execute the query
        $result = self::getInstance()->query($request);
        // Disconnect from the database
        self::disconnect();
        // Return the result of the query
        return $result;
    }

    public static function getPosts(){
        return self::request("SELECT * FROM post")->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getPostById($id){
        return self::request("SELECT * FROM post WHERE id=$id")->fetch(PDO::FETCH_ASSOC);
    }

    public static function getPostByUser($authorId){
        return self::request("SELECT * FROM post WHERE athor_id='$authorId'")->fetch(PDO::FETCH_ASSOC);
    }

    public static function insertIntoDb(Post $post){
     

        return self::request("INSERT INTO post (title , content,athor_id) VALUES(
            '" . $post->getTitle() . "' ,
        '" . $post->getContent() . "', 
        '" . $post->getAuthorId(). "')");
    }
public static function deletPost($id){
    return self::request("DELETE FROM post where id = $id");
}

 
} 
