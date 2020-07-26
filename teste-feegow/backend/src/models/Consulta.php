<?php

class Consulta extends Model {
    protected static $tableName = 'consultas';
    protected static $columns = [
        'id',
        'specialty_id',
        'professional_id',
        'name',
        'cpf',
        'source_id',
        'birthdate',
        'date_time'
    ];

    public function insert() {
        return parent::insert();
    }

    public function update() {
        return parent::update();
    }

    private function validate() {
        $errors = [];

        if(!$this->name) {
            $errors['name'] = 'Nome é um campo obrigatório';
        }

        if(!$this->cpf) {
            $errors['cpf'] = 'CPF é um campo obrigatório';
        }

        if(!$this->nascimento) {
            $errors['birthdate'] = 'Nascimento é um campo obrigatório';
        }

        if(count($errors) > 0) {
            throw new ValidationException($errors);
        }
    }

}