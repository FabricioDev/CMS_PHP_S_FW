<?php

if (resolve('/')) {
    echo 'HOME';
} elseif (resolve('/contato')) {
    echo 'Página de Contato';
} else {
    echo 'Página não encontrada';
}