<?php
abstract class UserRepository extends Db
{
    private static function prepareAndExecute($query, $params = [])
    {
        $stmt = self::getInstance()->prepare($query);
        $stmt->execute($params);
        return $stmt;
    }
    public static function getUserByMail($mail)
    {
        $query = "SELECT * FROM user WHERE mail = :mail";
        $params = ['mail' => $mail];
        return self::prepareAndExecute($query, $params)->fetch(PDO::FETCH_ASSOC);
    }
    public static function getUserById($id)
    {
        $query = "SELECT * FROM user WHERE id = :id";
        $params = ['id' => $id];
        return self::prepareAndExecute($query, $params)->fetch(PDO::FETCH_ASSOC);
    }
    public static function insertIntoDb(User $user)
    {
        $query = "INSERT INTO user (name, firstname, password, mail) VALUES (:name, :firstname, :password, :mail)";
        $params = [
            'name' => $user->getName(),
            'firstname' => $user->getFirstname(),
            'password' => $user->getPassword(),
            'mail' => $user->getMail()
        ];
        return self::prepareAndExecute($query, $params);
    }
}
?>
