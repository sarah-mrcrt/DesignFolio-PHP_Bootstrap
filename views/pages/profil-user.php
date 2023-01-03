<?php
  $sql = "SELECT * FROM user where id=?";
  $q = $pdo->prepare($sql);
  $q->execute(array($_GET['id']));
  $personne = $q->fetch();
?>

<section>
  <div class="container">
    <div class="row g-3">
      <!-- Profil -->
      <div class="col-md-3 mt-md-5 mb-3">
        <div class="user-profil text-center p-3 rounded ombre">
          <img src="<?php echo $personne['avatar']?>" alt="<?php echo $personne['login']?>" class="img-rounded">
          <p class="my-3"><?php echo $personne['login']?></p>
        </div>
      </div>
      <!-- /.Profil -->
      <!-- Composants : TABS -->
      <div class="col-md-9">
        <!-- Onglets -->
        <div class="d-flex justify-content-center">
          <ul class="nav nav-tabs" id="myTab">
            <li class="nav-item">
              <a href="#activity" class="nav-link active" data-bs-toggle="tab">Travaux</a>
            </li>
            <li class="nav-item">
              <?php 
            if (isset($_SESSION['id'])) {
              if($_GET['id'] == $_SESSION['id']) {
          ?>
              <a href="#post" class="nav-link" data-bs-toggle="tab">Publier</a>
            </li>
            <?php } } ?>
            <li class="nav-item">
              <a href="#profil" class="nav-link" data-bs-toggle="tab">Profil</a>
            </li>
          </ul>
        </div>
        <!-- /.Onglets -->
        <!-- Content -->
        <div class="tab-content p-3 rounded ombre">
          <!-- PUBLICATION -->
          <div class="tab-pane fade show active" id="activity">
            <div class="row g-3">
              <?php
              $sql = "SELECT ecrit.*,user.login, user.avatar FROM ecrit JOIN user ON idAuteur=user.id ORDER BY ecrit.id desc";
              $req = $pdo->query($sql);
              
              while($l = $req->fetch()) {
                $id = $l['idAuteur'];
                if( $_GET['id'] == $id) {
                include ('views/post/post.php');
                }
              }
            ?>
            </div>
          </div>
          <!-- /.PUBLICATIONS -->
          <!-- PUBLIER -->
          <?php 
            if (isset($_SESSION['id'])) {
              if($_GET['id'] == $_SESSION['id']) {
          ?>
          <div class="tab-pane fade" id="post">
            <?php
              include ('views/post/post-create.php');
            ?>
          </div>
          <?php } }?>
          <!-- /.PUBLIER -->
          <!-- PROFIL -->
          <div class="tab-pane fade" id="profil">
            <div class="row wrap">
              <table class="table table-responsive d-flex justify-content-center">
                <tbody>
                  <tr>
                    <th>Pseudo</th>
                    <td class="text-muted"><?php echo $personne['login']?></td>
                  </tr>
                  <tr>
                    <th>Adresse mail</th>
                    <td class="text-muted"><?php echo $personne['email']?></td>
                  </tr>
                  <tr>
                    <th>Facebook</th>
                    <td class="text-muted">@<?php echo $personne['login']?></td>
                  </tr>
                  <tr>
                    <th>Instagram</th>
                    <td class="text-muted">@<?php echo $personne['login']?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.PROFIL -->
        </div>
      </div>
    </div>
    <!-- /.Content -->
  </div>
  <!-- /. Composants Tabs -->
  </div>
</section>