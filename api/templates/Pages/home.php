<<?php
$this->assign('title', 'Pagina inicial')
?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 40vh;">
    <div class="text-center">
        <h1 class="mb-5">Controle de Estoque</h1>

          <!-- Botão azul: Gerenciar Items -->
        <a href="<?= $this->Url->build(['controller' => 'Items', 'action' => 'index']) ?>" 
           class="btn btn-primary btn-lg mb-3" style="width: 300px; font-size: 1.5rem;">
            Gerenciar Items
        </a>
        <br>

        