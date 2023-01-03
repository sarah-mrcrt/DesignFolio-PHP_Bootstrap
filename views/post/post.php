<!-- PROJET -->
<div class="col-sm-6 col-md-6 d-flex align-items-stretch">
    <!-- Card -->
    <div class="card w-100 wow ombre animate__fadeInUp" data-wow-duration=".8s" data-wow-delay="0.2s"
        data-bs-toggle="modal" data-bs-target="#p<?php echo $l['id'];?>"
        style="visibility: visible; animation-duration: 0.3s; animation-delay: 0.2s; animation-name: fadeInUp;">
        <div class="content h-100">
            <img src="./<?php echo $l['image'];?>" alt="<?php echo $l['title'];?>" class="card-img h-100">
            <!-- Image overlay -->
            <div class="card-img-overlay">
                <a href="<?php echo "index.php?action=mur&id=$id" ?>">
                    <img src="<?php echo $l['avatar'];?>" alt="<?php echo $l['login']; ?>" class="avatar img-rounded">
                </a>
                <a class="card-text" href="<?php echo "index.php?action=mur&id=$id"?>">
                    <?php echo $l['login']; ?>
                </a>

            </div>
            <!-- /. Image overlay -->
            <!-- Hover overlay -->
            <div class="content-overlay"></div>
            <div class="content-details">
                <h5 class="card-title"><?php echo $l['title'];?></h5>
            </div>
            <!-- /. Hover overlay -->
        </div>
    </div>
    <!-- ./Card -->
    <!-- Modal -->
    <div class="modal fade" id="p<?php echo $l['id'];?>" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo $l['title'];?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="card-text"><?php echo $l['description'];?></p>
                </div>
                <?php 
                if (isset($_SESSION['id'])) {
                    if($l['idAuteur'] == $_SESSION['id']) { 
                ?>
                <div class="modal-footer">
                    <a href="index.php?action=del-post&id=<?php echo $l['id']; ?>" class="btn btn-danger">Supprimer <i
                            class="fa-solid fa-trash"></i></a>
                    <a href="index.php?action=update-post&id=<?php echo $l['id']; ?>" class="btn btn-warning">Modifier <i
                            class="fa-solid fa-pen-to-square"></i></a>
                </div>
                <?php }} ?>
            </div>
        </div>
    </div>
    <!-- ./Modal -->
</div>
<!-- /.PROJET -->