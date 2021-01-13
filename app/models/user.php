<?php


class User extends Model
{
    /**
     * @return array
     */
    public function all()
    {
        $this->query("SELECT * FROM users");
        return $this->fetchAll();
    }

    public function find($id)
    {
        $this->query('SELECT * FROM users WHERE id = :id');
        $this->bind(':id', $id, PDO::PARAM_INT);
        return $this->single();
    }

}
