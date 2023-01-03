<section>
    <div class="container">
        <div class="row justify-content-center">
            <form action="index.php?action=update-post" method="post">
                <div class="form-group mb-3">
                    <label for="id" class="form-label">ID*</label>
                    <input type="text" name="id" class="form-control" placeholder="id de votre projet"
                        value="<?php echo $_GET['id']?>" required>
                </div>

                <div class="form-group mb-3">
                    <label for="title" class="form-label">Titre de votre projet*</label>
                    <input type="text" name="title" class="form-control" placeholder="Titre de votre projet"
                        maxlength="30" required>
                </div>

                <div class="form-group mb-3">
                    <label for="description">Description*</label>
                    <textarea name="description" id="description" class="form-control" rows="4" maxlength="350"
                        placeholder="Ecrire quelque chose ici ..." required></textarea>
                </div>

                <div class="col-12 text-end">
                    <button type="submit" name="update" class="btn btn-primary">Modification</button>
                </div>
            </form>
        </div>
    </div>
</section>