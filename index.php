<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'templates/header.html';
?>

<header class="bg-dark py-5">
<link href="css/styles.css" rel="stylesheet" />
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">SAÉ DevOps</h1>
                                <p class="lead fw-normal text-white-50 mb-4">Passez en revue les 23 rooms qui ont été faits par le groupe composé de Hugo, Quentin, Théo, et Gaëtan</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Comment on s'est organisé</a>
                                    <a class="btn btn-outline-light btn-lg px-4" href="#!">Présentation du groupe</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /></div>
                    </div>
                </div>
            </header>
            <!-- Features section-->
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">Les pages complémentaires</h2></div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                                    <h2 class="h5">Présentation Firebase</h2>
                                    <p class="mb-0">Une page présentant une description brève et synthétique des services Firebase utilisés (au
                                    minimum Hosting et Cloud Storage).</p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                                    <h2 class="h5">Structure des pages</h2>
                                    <p class="mb-0">Une page présentant une description brève et synthétique de la structure de page que vous
                                    avez réalisé (appuyée par les parties de code concernées).</p>
                                </div>
                                <div class="col mb-5 mb-md-0 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                    <h2 class="h5">Organisation de la SAÉ</h2>
                                    <p class="mb-0">Une page présentant votre organisation de groupe et la manière dont vous avez géré cette
                                    SAE.</p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                    <h2 class="h5">Mise en place du VPN</h2>
                                    <p class="mb-0">Une page présentant la mise en place de de la connexion VPN sur votre environnement
                                    permettant l’utilisation des connexions via RDP avec les machines THM.</p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                    <h2 class="h5">Living off the land</h2>
                                    <p class="mb-0">Une page où vous présenterez ce que vous avez compris du sujet “Living Off The Land”.</p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                    <h2 class="h5">Man in the middle</h2>
                                    <p class="mb-0">Une page où vous présenterez ce que vous avez compris du sujet “Man In The Middle”.</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial section-->
            <div class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog preview section-->
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">Les pages de l'équipe</h2></div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <h2 class="h5">Hugo</h2>
                                    <p class="mb-0">La room que Hugo a préféré ainsi que ce qu'il a aimé sur TryHackMe.</p>
                                    <a class="btn btn-primary mt-2" href="special-pages/membres/hugo.php">Voir la page de Hugo</a>
                                </div>
                                <div class="col mb-5 h-100">
                                    <h2 class="h5">Quentin</h2>
                                    <p class="mb-0">La room que Quentin a préféré ainsi que ce qu'il a aimé sur TryHackMe.</p>
                                    <a class="btn btn-primary mt-2" href="special-pages/membres/quentin.php">Voir la page de Quentin</a>
                                </div>
                                <div class="col mb-5 mb-md-0 h-100">
                                    <h2 class="h5">Gaëtan</h2>
                                    <p class="mb-0">La room que Gaëtan a préféré ainsi que ce qu'il a aimé sur TryHackMe.</p>
                                    <a class="btn btn-primary mt-2" href="special-pages/membres/gaetan.php">Voir la page de Gaëtan</a>
                                </div>
                                <div class="col mb-5 h-100">
                                    <h2 class="h5">Théo</h2>
                                    <p class="mb-0">La room que Théo a préféré ainsi que ce qu'il a aimé sur TryHackMe.</p>
                                    <a class="btn btn-primary mt-2" href="special-pages/membres/theo.php">Voir la page de Théo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>


<?php
include 'templates/footer.html';
?>