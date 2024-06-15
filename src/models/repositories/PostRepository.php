<?php
abstract class PostRepository extends Db
{
    private static function prepareAndExecute($query, $params = [])
    {
        $stmt = self::getInstance()->prepare($query);
        $stmt->execute($params);
        return $stmt;
    }
    public static function getPosts()
    {
        $query = "SELECT * FROM Post";
        return self::prepareAndExecute($query)->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function getPostById($id)
    {
        $query = "SELECT * FROM Post WHERE id = :id";
        $params = ['id' => $id];
        return self::prepareAndExecute($query, $params)->fetch(PDO::FETCH_ASSOC);
    }
    public static function insertIntoDb(Post $post)
    {
        $query = "INSERT INTO post (title, message, author) VALUES (:title, :message, :author)";
        $params = [
            'title' => $post->getTitle(),
            'message' => $post->getMessage(),
            'author' => $post->getAuthor()
        ];
        return self::prepareAndExecute($query, $params);
    }
    public static function updatePost(Post $post)
    {
        $query = "UPDATE post SET title = :title, message = :message WHERE id = :id";
        $params = [
            'title' => $post->getTitle(),
            'message' => $post->getMessage(),
            'id' => $post->getId()
        ];
        return self::prepareAndExecute($query, $params);
    }
    public static function deletePost(Post $post)
    {
        $query = "DELETE FROM Post WHERE id = :id";
        $params = ['id' => $post->getId()];
        return self::prepareAndExecute($query, $params);
    }
}
?>
