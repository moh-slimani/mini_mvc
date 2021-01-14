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

    public function register($data)
    {
        if ($data->email == '' || $data->name == '' || $data->password == '') {

        } else {
            $this->query("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
            $this->bind(':name', $data->name);
            $this->bind(':email', $data->email);
            $this->bind(':password', $data->password);

            $this->execute();

            $id = $this->lastInsrtedId();

            if ($id) {
                $_SESSION['is_loged_in'] = 1;
                $_SESSION['user_data'] = [
                    'id' => $id,
                    'name' => $data->name,
                    'email' => $data->email,
                ];

                header('Location:' . URL);
            }
        }
    }

    public function login($data)
    {
        $this->query("SELECT * from users WHERE email = :email AND password = :password");
        $this->bind(':email', $data->email);
        $this->bind(':password', $data->password);

        $user = $this->single();

        if ($user) {
            $_SESSION['is_loged_in'] = 1;
            $_SESSION['user_data'] = [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
            ];
        }

        header('Location:' . URL);
    }

    public function logout()
    {
        unset($_SESSION['is_loged_in']);
        unset($_SESSION['user_data']);

        session_destroy();
        header('Location:' . URL . 'users/login');

    }

}
