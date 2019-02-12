<?php

$route -> get("/", "Index@index");

$route -> get("/login", "Login@index");

$route -> get("/cadastro", "Index@cadCliente");

$route -> get("/editar", "Index@editCliente");