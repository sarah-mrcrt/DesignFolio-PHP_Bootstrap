<?php if (!isset($_SESSION['id'])) { ?>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="login d-md-flex">
                    <div class="img d-none d-md-inline" style="background-image: url(assets/images/login.jpg);">
                    </div>
                    <div class="login-wrap p-4 p-md-5">
                        <h1 class="mb-4">Se connecter</h1>
                        <form action="index.php?action=connexion" method="POST" class="signin-form">
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email*</label>
                                <input type="text" name="email" class="form-control" placeholder="john.doe@gmail.com"
                                    value="john.doe@gmail.com" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="mdp" class="form-label">Mot de passe*</label>
                                <input type="password" name="mdp" class="form-control" placeholder="******" required>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit"
                                    class="form-control btn btn-primary rounded submit px-3">Connexion</button>
                            </div>
                        </form>
                        <p class="mt-3">Vous n'êtes pas membre ?
                            <a data-toggle="tab" href="index.php?action=registration">S'inscrire</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
