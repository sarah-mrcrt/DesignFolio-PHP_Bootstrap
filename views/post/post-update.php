<?php
$sql = "SELECT * FROM ecrit  where id=?";
$q = $pdo->prepare($sql);
$q->execute(array($_GET['id']));
$projet = $q->fetch();
?>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="login d-md-flex">
                    <div class="img d-none d-md-inline" style="background-image: url(<?php echo $projet['image']?>);">
                    </div>
                    <div class="login-wrap p-4 p-md-5">
                        <h1 class="mb-4">Modifier</h1>
                        <form action="index.php?action=update-post" method="post">
                            <div class="form-group mb-3">
                                <label for="id" class="form-label">ID du projet*</label>
                                <input type="text" name="id" class="form-control disabled"
                                    placeholder="id de votre projet" value="<?php echo $_GET['id']?>" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="title" class="form-label">Titre de votre projet*</label>
                                <input type="text" name="title" class="form-control" placeholder="Titre de votre projet"
                                    maxlength="30" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="description">Description*</label>
                                <textarea name="description" id="description" class="form-control" rows="4"
                                    maxlength="350" placeholder="Ecrire quelque chose ici ..." required></textarea>
                            </div>

                            <div class="form-group mb-3 text-end">
                                <button type="submit" name="update" class="btn btn-primary">Modification</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>