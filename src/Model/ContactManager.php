<?php

namespace App\Model;

use PDO;

class ContactManager extends AbstractManager
{
    public const TABLE = 'contact';

    public function insert(array $contact): bool
    {
        $query = 'INSERT INTO ' . self::TABLE . ' (firstname, lastname, email, subject, content) VALUES (:firstname, :lastname, :email, :subject, :content)';
        $statement = $this->pdo->prepare($query);
        $statement->bindValue(':firstname', $contact['firstname'], PDO::PARAM_STR);
        $statement->bindValue(':lastname', $contact['lastname'], PDO::PARAM_STR);
        $statement->bindValue(':email', $contact['email'], PDO::PARAM_STR);
        $statement->bindValue(':subject', $contact['subject'], PDO::PARAM_STR);
        $statement->bindValue(':content', $contact['content'], PDO::PARAM_STR);

        return $statement->execute();
    }
}
