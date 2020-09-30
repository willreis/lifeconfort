<?php $paginaCorrente = basename($_SERVER['SCRIPT_NAME']);?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <form action="#" class="searchform order-lg-last">
            <div class="form-group d-flex">
                <input type="text" class="form-control pl-3" placeholder="Search">
                <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
            </div>
        </form>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li <?php if($paginaCorrente == 'index.php') {echo 'class="nav-item active"';}else{echo 'class="nav-item"';}?>><a href="index.php" class="nav-link">Home</a></li>
                <li <?php if($paginaCorrente == 'sobre-nos.php') {echo 'class="nav-item active"';}else{echo 'class="nav-item"';}?>><a href="sobre-nos.php" class="nav-link">Sobre Nós</a></li>
                <li class="nav-item"><a href="team.html" class="nav-link">Team</a></li>
                <li class="nav-item"><a href="project.html" class="nav-link">Case Studies</a></li>
                <li <?php if($paginaCorrente == 'servicos.php') {echo 'class="nav-item active"';}else{echo 'class="nav-item"';}?>><a href="servicos.php" class="nav-link">Serviços</a></li>
                <li <?php if($paginaCorrente == 'contato.php') {echo 'class="nav-item active"';}else{echo 'class="nav-item"';}?>><a href="contato.php" class="nav-link">Contato</a></li>
            </ul>
        </div>
    </div>
</nav> 

    