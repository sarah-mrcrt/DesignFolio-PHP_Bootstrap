<?php if (!isset($_SESSION['id'])) { ?>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex ombre">
                    <div class="img d-none d-md-inline" style="background-image: url(assets/images/registration.jpg);">
                    </div>
                    <div class="login-wrap p-4 p-md-5">
                        <h3 class="mb-4">Se connecter</h3>
                        <form action="index.php?action=inscription" method="POST" enctype='multipart/form-data'
                            class="signin-form">
                            <div class="form-group mb-3">
                                <label for="login" class="form-label">Pseudo*</label>
                                <input type="text" name="login" class="form-control" placeholder="Jojo" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="email" class="form-label">Email*</label>
                                <input type="email" name="email" class="form-control" placeholder="john.doe@gmail.com"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="fileToAvatar" class="form-label">Choisir un avatar*</label>
                                <input name='fileToAvatar' type="file" class="form-control" id='fileToAvatar'
                                    accept='image/png, image/jpeg, image/gif, image/jpg' />
                            </div>
                            <div class="form-group mb-4">
                                <label for="mdp" class="form-label">Mot de passe*</label>
                                <input type="password" name="mdp" class="form-control" placeholder="******" required>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit"
                                    class="form-control btn btn-primary rounded submit px-3">Inscription</button>
                            </div>
                        </form>
                        <p class="mt-3">Vous êtes membre ?
                            <a data-toggle="tab" href="index.php?action=login">Se connecter</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>