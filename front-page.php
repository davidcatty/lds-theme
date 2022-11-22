<?php get_header(); ?>

<div class="d-flex justify-content-evenly align-self-center align-items-center bg-dark">
    <a class="text-uppercase" href="#calendar">Calendrier</a>
    <img src="https://via.placeholder.com/150" alt="">
    <a class="text-uppercase" href="#form">Formulaire</a>
</div>

<div class="container">
    <div class="text-center">
        <h2 class="text-uppercase">Calendrier</h2>

        <img id="calendar" class="img-fluid" width="70%" src="/wp-content/uploads/2022/11/calendrier-face_calendrier_vue1-copie.png" alt="" usemap="#calendarmap">

        <map name="calendarmap">
            <area shape="rect" coords="106,124,449,1234" type="button" data-bs-toggle="modal" data-bs-target="#case-28" alt="Case 28">
            <area shape="rect" coords="522,125,1235,949" type="button" data-bs-toggle="modal" data-bs-target="#case-29" alt="Case 29">
            <area shape="rect" coords="1317,125,1825,496" type="button" data-bs-toggle="modal" data-bs-target="#case-31" alt="Case 31">
            <area shape="rect" coords="1315,566,1824,951" type="button" data-bs-toggle="modal" data-bs-target="#case-26" alt="Case 26">
            <area shape="rect" coords="105,1294,447,1824" type="button" data-bs-toggle="modal" data-bs-target="#case-27" alt="Case 27">
            <area shape="rect" coords="522,1013,1825,1825" type="button" data-bs-toggle="modal" data-bs-target="#case-30" alt="Case 30">
        </map>

        <div class="alert alert-secondary" role="alert">
            Il est proposé à 25€ - les produits séparément ont une valeur de 32€ !
        </div>

        <a href="#form" type="button" class="btn btn-danger">Être prévenu</a>

        <h2 class="text-uppercase">Formulaire</h2>

        <form id="form" class="text-start">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
                <input type="email" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Téléphone</label>
                <input type="tel" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-danger">S’enregistrer</button>
            </div>

        </form>
    </div>
</div>

<div class="modal fade" id="case-28" tabindex="-1" aria-labelledby="case-28-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="case-28-label">Case 28</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Un échantillon de 5 sachets de thé détox Plantasia. Allié bien-être, il favorise l'élimination des toxines et la digestion pour retrouver un corps sain après les fêtes !
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="case-29" tabindex="-1" aria-labelledby="case-29-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="case-29-label">Case 29</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Une pochette de sport qui se met autour du poignet pour y glisser des clés ou de la monnaie - pour aller se dégourdir les jambes, prendre l’air, souffler, remettre notre système digestif en marche et d’éliminer en douceur les calories accumulées pendant les fêtes.
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="case-31" tabindex="-1" aria-labelledby="case-31-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="case-31-label">Case 31</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Un échantillon de 4 sachets de soupe au potimarron Natali bio pour manger équilibré, léger et sain, et rééquilibrer son corps.
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="case-26" tabindex="-1" aria-labelledby="case-26-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="case-26-label">Case 26</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Un masque relaxant à l’argile verte qui se place sur le front pour se détendre - ou aider à lutter contre les migraines de lendemain de soirée ;).
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="case-27" tabindex="-1" aria-labelledby="case-27-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="case-27-label">Case 27</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Une bouillotte sèche Green Clothes à mettre sur votre foie pour l’aider à travailler et éliminer les toxines au lendemain d’une soirée bien arrosée.
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="case-30" tabindex="-1" aria-labelledby="case-30-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="case-30-label">Case 30</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Un échantillon de 4 pastilles Hydratis goût citron et fleur de sureau pour prévenir la gueule de bois du réveillon : 2 pastilles dans un verre d’eau avant d’aller vous coucher, et vous serez méga hydraté et prêt à affronter le lendemain.
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>