<?php

namespace App\Models\site;

use AcarajeTech\DataSave\DataSave;

class User extends DataSave
{
    protected string $table = 'users';

    public function hasUser(array $data): bool
    {
        $password = $data['password'];
        unset($data['password']);

        $response = $this->find('mail=:mail', $data);
        return password_verify($password, $response->password);
    }

    public function find(?string $where = null, array $values, ?string $fields = '*'): ?\stdClass
    {
        try {
            $sql = "SELECT {$fields} FROM {$this->table} WHERE {$where}";
            $this->statement = $this->pdo->prepare($sql);

            foreach ($values as $key => $value) {
                $this->statement->bindValue(":$key", $value);
            }
            $this->statement->execute();

            return (object)$this->statement->fetch();

        } catch (\PDOException $exception) {
            $this->error = $exception;
            return null;
        }

    }

}