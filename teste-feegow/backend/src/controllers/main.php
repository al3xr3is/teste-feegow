<?php
session_start();

$req_especialidade_id = $_POST['select'];

$especialidades = xhtmlRequests("{$baseApi}/specialties/list");
$profissionais = xhtmlRequests("{$baseApi}/professional/list?especialidade_id=$req_especialidade_id");

loadView('main', [
    'especialidades' => $especialidades,
    'profissionais' => $profissionais
]);