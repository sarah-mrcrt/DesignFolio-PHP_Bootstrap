<section>
    <div class="container">
        <div class="row g-3">
            <h1>ddd</h1>
            <?php
            $sql = "SELECT ecrit.*,user.login, user.avatar FROM ecrit JOIN user ON idAuteur=user.id ORDER BY ecrit.id DESC LIMIT 6 ";
            $req = $pdo->query($sql);
            
            while($l = $req->fetch()) {
                $id = $l['idAuteur'];
                include ('views/post/post.php');
            }
            ?>
        </div>
    </div>
</section>