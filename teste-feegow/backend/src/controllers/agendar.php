<?php
session_start();

$list_sources = xhtmlRequests("{$baseApi}/patient/list-sources");

loadView('agendar', [
    'list_sources' => $list_sources
]);