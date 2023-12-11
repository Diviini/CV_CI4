<main>
    <div class="container">

        <h1> <?= $projet['titre'] ?> </h1>

        <div class="img-section">
            <img src="../<?= $projet['img'] ?>" alt="<?= $projet['titre'] ?>">
        </div>

        <div class="cv-p">
            <p><?= $projet['texte'] ?></p>
        </div>


    </div>
</main>