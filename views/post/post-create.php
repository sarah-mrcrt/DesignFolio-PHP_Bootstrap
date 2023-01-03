<form action="index.php?action=new-post" method="POST" enctype="multipart/form-data" class="p-4">
    <div class="form-group mb-3">
        <label for="titre" class="form-label">Titre de votre projet*</label>
        <input type="text" name="titre" class="form-control" placeholder="Titre de votre projet" maxlength="30"
            required>
    </div>

    <div class="form-group mb-3">
        <label for="description">Description*</label>
        <textarea name="description" id="description" class="form-control" rows="4" maxlength="350"
            placeholder="Ecrire quelque chose ici ..." required></textarea>
    </div>

    <div class="form-group mb-3">
        <label for="fileToUpload" class="form-label">Choisir une image*</label>
        <input type='file' name='fileToUpload' class="form-control" id='fileToUpload'
            accept='image/png, image/jpeg, image/gif, image/jpg' required />
        <input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />
    </div>

    <div class="col-12 text-end">
        <button type="submit" class="btn btn-primary">Publier</button>
    </div>
</form>