<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Gerenciador-Autopeças';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
     <!-- Bootstrap -->
    <?= $this->Html->css('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css') ?>
    <?= $this->Html->script('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js') ?>
    <!-- Seu CSS global -->
    <?= $this->Html->css('home') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake']) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

    <!-- Botão hamburguer (fica sempre visível) -->
    <button class="btn btn-dark" id="toggleSidebar" type="button">☰</button>

    <!-- Sidebar -->
    <div id="sidebar" class="sidebar">
        <h4>Menu</h4>
        <?= $this->Html->link('🏠 Início', ['controller' => 'Pages', 'action' => 'display', 'home'], ['class' => 'd-block mb-2']) ?>
        <?= $this->Html->link('📦 Items', ['controller' => 'Items', 'action' => 'index'], ['class' => 'd-block mb-2']) ?>
        <?= $this->Html->link('⚙️ Movimentação de Estoque', ['controller' => 'Transactions', 'action' => 'index'], ['class' => 'd-block']) ?>
    </div>

    <!-- Conteúdo -->
    <div id="content">
        <main class="flex-fill">
            <div class="container py-4">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
        </main>
    </div>

    <!-- Rodapé -->
    <footer class="bg-dark text-white text-center py-3 fixed-bottom">
        <p class="mb-0">© <?= date('Y') ?> - Sistema de Controle de Estoque</p>
    </footer>

    <!-- JS: liga/desliga a sidebar -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleBtn = document.getElementById('toggleSidebar');
        const sidebar   = document.getElementById('sidebar');
        const content   = document.getElementById('content');

        toggleBtn.addEventListener('click', function () {
            sidebar.classList.toggle('hidden');
            content.classList.toggle('full');
        });
    });
    </script>
</body>
</html>