<?php
$this->assign('title', 'Pagina inicial')
?>
<!-- Importa Bootstrap e home.css -->
<?= $this->Html->css('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css') ?>
<?= $this->Html->css('home') ?>
 
<div class="container d-flex justify-content-center align-items-center" style="min-height: 40vh;">
    <div class="text-center">
        <h1 class="mb-5">Controle de Estoque</h1>

<div class="sidebar">
  <h4>Menu</h4>
  <a href="#">🏠 Inicio</a>
  <a href="#">📦 Items</a>
  <a href="#">⚙️ Movimentação de Estoque</a>
</div>        

          <!-- Botão azul: Gerenciar Items -->
        <a href="<?= $this->Url->build(['controller' => 'Items', 'action' => 'index']) ?>" 
           class="btn btn-primary btn-lg mb-3 w-100" style="width: 300px; font-size: 1.5rem;">
            Gerenciar Items
        </a>
        <br>

          <!-- Botão verde: Movimentação de Estoque -->
        <a href="<?= $this->Url->build(['controller' => 'Transactions', 'action' => 'index']) ?>" 
           class="btn btn-success btn-lg w-100" style="width: 300px; font-size: 1.5rem;">
            Movimentação de Estoque
        </a>
    </div>
</div>