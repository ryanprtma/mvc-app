<?php

namespace Ryanprtma\MvcApp\Model;

use Ryanprtma\MvcApp\Base\Model;

class User extends Model
{
    public string $id;
    public string $name;
    public string $username;
    public string $password;

    public function save(): User
    {
        $statement = $this->connection->prepare("INSERT INTO users(id, name, username, password) VALUES (?, ?, ?, ?)");
        $statement->execute([
            $this->id, $this->name, $this->username, $this->password
        ]);
        return $this;
    }

    public function updateProfile(): User
    {
        $statement = $this->connection->prepare("UPDATE users SET name = ?, username = ? WHERE id = ?");
        $statement->execute([
            $this->name, $this->username, $this->id
        ]);
        return $this;
    }

    public function update(): User
    {
        $statement = $this->connection->prepare("UPDATE users SET name = ?, password = ? WHERE id = ?");
        $statement->execute([
            $this->name, $this->password, $this->id
        ]);
        return $this;
    }


    public function findById(string $id): ?User
    {
        $statement = $this->connection->prepare("SELECT id, name, username, password FROM users WHERE id = ?");
        $statement->execute([$id]);

        try {
            if ($row = $statement->fetch()) {
                $this->id = $row['id'];
                $this->name = $row['name'];
                $this->username = $row['username'];
                $this->password = $row['password'];
                return $this;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    public function findByUsername(string $username): ?User
    {
        $statement = $this->connection->prepare("SELECT id, name, username, password FROM users WHERE username = ?");
        $statement->execute([$username]);

        try {
            if ($row = $statement->fetch()) {
                $this->id = $row['id'];
                $this->name = $row['name'];
                $this->username = $row['username'];
                $this->password = $row['password'];
                return $this;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }
}