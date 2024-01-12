<h1>Voici mes basiliques :</h1>

<hr>

<?php foreach ($basilique as $basilique): ?>
    <div class="card mt-5">
        <div class="card-body">
            <h1 class="card-title"><?= $basilique->getName() ?></h1>
            <h4 class="card-subtitle mt-3"><?= $basilique->getDescription() ?></h4>
            <h5 class="card-subtitle mt-3"><?= $basilique->getTaille()?> mètres</h5>
            <a href="?type=basilique&action=show&id=<?= $basilique->getId() ?>" class="btn btn-success mt-3">Voir</a>
            <a href="?type=basilique&action=delete&id=<?= $basilique->getId() ?>" class="btn btn-danger mt-3">Supprimer</a>
        </div>
    </div>


<?php endforeach; ?>
