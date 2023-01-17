<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Model.php';

class user extends Model {
    protected static $tableName = 'users';
    protected static $columns = [
        'nome',
        'email',
        'senha',
        'ativo',
        'data_cadastro',
        'ultimo_login'
    ];

    public static function getActiveUsersCount() {
        return static::getCount(['raw' => 'end_date IS NULL']);
    }

    public function insert() {
        $this->validate();
        $this->is_admin = $this->is_admin ? 1 : 0;
        if(!$this->end_date) $this->end_date = null;
        return parent::insert();
    }

    public function update() {
        $this->validate();
        $this->is_admin = $this->is_admin ? 1 : 0;
        if(!$this->end_date) $this->end_date = null;
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        return parent::update();
    }

    private function validate() {
        $errors = [];

        if(!$this->name) {
            $errors['name'] = 'Nome é um campo abrigatório.';
        }

        if(!$this->email) {
            $errors['email'] = 'Email é um campo abrigatório.';
        } elseif(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email inválido.';
        }


        if(!$this->password) {
            $errors['password'] = 'Senha é um campo abrigatório.';
        }

        if(!$this->confirm_password) {
            $errors['confirm_password'] = 'Confirmação de Senha é um campo abrigatório.';
        }

        if($this->password && $this->confirm_password 
            && $this->password !== $this->confirm_password) {
            $errors['password'] = 'As senhas não são iguais.';
            $errors['confirm_password'] = 'As senhas não são iguais.';
        }

        if(count($errors) > 0) {
            throw new ValidationException($errors);
        }
    }
}