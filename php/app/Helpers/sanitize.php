<?php

function sanitizarTexto(string $valor): string
{
    return trim($valor);
}

function sanitizarHtml(string $valor): string
{
    return htmlspecialchars(trim($valor), ENT_QUOTES, 'UTF-8');
}