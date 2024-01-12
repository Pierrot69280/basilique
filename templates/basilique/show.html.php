<div class="card">
    <div class="card-body">
        <h1 class="card-title"><?= $basilique->getName() ?></h1>
        <h4 class="card-subtitle mt-3"><?= $basilique->getDescription() ?></h4>
        <h5 class="card-subtitle mt-3"><?= $basilique->getTaille()?> mètres</h5>
        <a href="?type=basilique&action=index" class="btn btn-outline-secondary mt-3">Retour</a>
    </div>
</div>
