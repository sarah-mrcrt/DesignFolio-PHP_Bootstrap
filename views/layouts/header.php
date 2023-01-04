<nav id="ma_navbar" class="navbar fixed-top navbar-expand-md navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php?action=accueil">DesignFolio</a>
        <!-- Menu burger -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Menu PC -->
        <!-- Collapse = elemet qui disparait -->
        <div class="collapse navbar-collapse pt-3 pt-md-0" id="navbarSupportedContent">
            <!-- Recherche -->
            <form action='index.php?action=recherche' method='POST' class="col-md-7 ms-auto">
                <div class="input-group">
                    <input type='search' class="form-control" placeholder='Rechercher des designers' name='recherche'
                        aria-label="Recherche" aria-describedby="basic-addon1">
                    <button type="submit" class="btn btn-primary" action="index.php?action=accueil">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>
            <!-- /.Recherche -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item my-auto">
                    <a class="nav-link" aria-current="page" href="index.php?action=accueil">Accueil</a>
                </li>
                <!-- ----------  Connexion -->
                <?php if (!isset($_SESSION['id'])) { ?>
                <li class="nav-item">
                    <a href='index.php?action=login' class="nav-link">Connexion</a>
                </li>
                <?php } ?>
                <!-- ----------  /.Connexion -->
                <!-- ---------- Profil -->
                <?php if (isset($_SESSION['id'])) { ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="<?php echo  $_SESSION['avatar']; ?>" alt="<?php echo $_SESSION['login']?>"
                            class="avatar avatar-sm">
                        <?php echo  $_SESSION['login']; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- Mon compte -->
                        <li>
                            <a href="index.php?action=mur&id=<?php echo $_SESSION['id']; ?>" class="dropdown-item">
                                Mon profil
                            </a>
                        </li>
                        <!-- /. Mon compte -->
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <!-- Déconnexion -->
                            <a href='index.php?action=deconnexion' class="dropdown-item">Déconnexion</a>

                            <!-- /.Déconnexion -->
                        </li>
                    </ul>
                </li>
                <?php } ?>
            </ul>
            <!-- ----------  /.Profil -->
        </div>
    </div>
</nav>