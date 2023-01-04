<!-- PROJET -->
<div class="col-sm-6 col-md-6 d-flex align-items-stretch">
    <!-- Card -->
    <div class="card w-100"
        data-bs-toggle="modal" data-bs-target="#p<?php echo $l['id'];?>"
        style="visibility: visible; animation-duration: 0.3s; animation-delay: 0.2s; animation-name: fadeInUp;">
        <div class="content h-100">
            <img src="./<?php echo $l['image'];?>" alt="<?php echo $l['title'];?>" class="card-img h-100">
            <!-- Image overlay -->
            <div class="card-img-overlay overlay-img">
                <a href="<?php echo "index.php?action=mur&id=$id" ?>">
                    <img src="<?php echo $l['avatar'];?>" alt="<?php echo $l['login']; ?>" class="avatar avatar-sm">
                </a>
            </div>
            <div class="card-img-overlay overlay-text">
                <div>
                    <h2 class="card-title"><?php echo $l['title'];?></h2>
                </div>
            </div>
            <!-- /. Image overlay -->>
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
                <div class="modal-footer justify-content-start">
                    <a href="index.php?action=del-post&id=<?php echo $l['id']; ?>" class="btn btn-danger">Supprimer <i
                            class="fa-solid fa-trash"></i></a>
                    <a href="index.php?action=update-post&id=<?php echo $l['id']; ?>"
                        class="btn btn-warning mx-sm-4 mx-2">Modifier <i class="fa-solid fa-pen-to-square"></i></a>
                </div>
                <?php }} ?>
            </div>
        </div>
    </div>
    <!-- ./Modal -->
</div>
<!-- /.PROJET -->