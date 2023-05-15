<?php

class Db
{
    /** @var Db */
    private static $instance;

    /** @var \PDO */
    private $pdo;

    private function __construct()
    {

        $this->pdo = new \PDO('mysql:host='. '' .';dbname=' . '',
            '',
            ''
        );
        $this->pdo->exec('SET NAMES UTF8');

    }

    /**
     * @param string $sql
     * @param array $param
     * @param string $className
     * @return array|null
     */
    public function query(string $sql, array $param = [], string $className = 'stdClass'): ?array
    {
        $stmt = $this->pdo->prepare($sql);
        $result = $stmt->execute($param);

        if ($result === false) return null;

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * @return Db
     */
    public static function getInstance(): Db
    {
        if (self::$instance === null) self::$instance = new self();

        return self::$instance;
    }

    /**
     * @return int
     */
    public function getLastInsertId(): int
    {
        return (int) $this->pdo->lastInsertId();
    }

}


function getCard()
{
    $db = Db::getInstance();

    $sql = "SELECT * FROM `card`";

    return $db->query($sql);

}