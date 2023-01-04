<section>
    <div class="container">
        <div class="row g-3">
            <?php
            $recherche = $_POST['recherche'];
            if (isset($_POST['recherche'])) {
                $sql = "SELECT * FROM user WHERE login LIKE '$recherche%'";
                $q = $pdo->prepare($sql);
                $q->execute(array($_POST['recherche']));
            ?>
            <h1 class="animate__animated animate__pulse">Résultats de votre
                recherche : <span><?php echo $recherche; ?></span></h1>

            <!-- Profil -->
            <?php
            while($personne = $q->fetch()){
                $id = $personne['id'];
            ?>
            <div class="col-lg-3 col-md-4 col-sm-6 wow animate__fadeInUp" data-wow-duration=".8s" data-wow-delay="0.2s">
                <a href="<?php echo "index.php?action=mur&id=$id" ?>">
                    <div class="user-profil text-center p-3 rounded">
                        <img src="<?php echo $personne['avatar']?>" alt="<?php echo $personne['login']?>"
                            class="avatar">
                        <p class="my-3"><?php echo $personne['login']?></p>
                    </div>
                </a>
            </div>
            <!-- /.Profil -->
            <?php
            }
        }
        ?>
        </div>
    </div>
</section>