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
            <h1>Résultats de votre recherche : <?php echo $recherche; ?></h1>
            <!-- Profil -->
            <?php
            while($personne = $q->fetch()){
                $id = $personne['id'];
            ?>
            <div class="col-lg-4 col-md-7 mt-md-5 mb-3">
                <a href="<?php echo "index.php?action=mur&id=$id" ?>">
                    <div class="user-profil text-center p-3 rounded ombre">
                        <img src="<?php echo $personne['avatar']?>" alt="<?php echo $personne['login']?>"
                            class="img-rounded">
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