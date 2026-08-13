<?php

$produtoId = $_GET['id'] ?? null;

$cliente = $_SESSION['clientes'][1];

$_SESSION['cliente'] = $cliente;
$produto = $_SESSION['produtos'][$produtoId];

$cliente->registrarCompra($produto);