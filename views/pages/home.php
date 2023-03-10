<section>
    <div class="container">
        <div class="p-5 jumbotron wow animate__fadeInDown">
            <h1 class="display-5 fw-bold">Bienvenue sur DesignFolio</h1>
            <p class="col-md-10 fs-4">Plateforme où les créatifs du monde entier peuvent présenter leurs projets.
                Développer votre image de marque personnelle et, si vous le faites correctement, vous pouvez attirer de
                nouveaux clients.</p>
            <?php if (!isset($_SESSION['id'])) { ?>
            <a href="index.php?action=registration" class="btn btn-primary btn-lg text-end" type="button">S'inscrire</a>
            <?php } ?>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row g-3 mt-4 wow animate__fadeInUp">
            <h2 class="wow animate__bounceInLeft">Les derniers projets postés</h2>
            <?php
            $sql = "SELECT projet.*,user.login, user.avatar FROM projet JOIN user ON idAuteur=user.id ORDER BY projet.id DESC LIMIT 4 ";
            $req = $pdo->query($sql);
            
            while($l = $req->fetch()) {
                $id = $l['idAuteur'];
                include ('views/post/post.php');
            }
            ?>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row g-3 mt-4 wow animate__fadeInUp">
            <h2 class="wow animate__bounceInLeft">Le designer de la semaine</h2>
            <?php
            $sql = "SELECT projet.*,user.login, user.avatar FROM projet JOIN user ON 47=user.id ORDER BY projet.id ASC LIMIT 4 ";
            $req = $pdo->query($sql);

            while($l = $req->fetch()) {
                $id = $l['idAuteur'];
                include ('views/post/post.php');
            }
            ?>
        </div>
    </div>
</section>