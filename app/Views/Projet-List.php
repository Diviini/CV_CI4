<main>
    <div class="container">
        <h1>Mes différents projets</h1>
        <section id="projets">
            <div class="card-list">
                <?php foreach ($projets as $projet): ?>
                    <div class="case-projet">
                        <a href="<?= base_url($projet['lien']) ?>">
                            <img src="<?= base_url($projet['img']) ?>" alt="<?= $projet['titre'] ?>">
                            <p><?= $projet['titre'] ?></p>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
</main>
