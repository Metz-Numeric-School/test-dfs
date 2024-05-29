<div class="container py-5">
    <h1><?= $title ?></h1>
    <div class="row">
        <?php foreach ($meals as $indice => $meal) : ?>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100" data-aos="fade-down">
                    <img data-src="<?= $meal['photo'] ?>" class="card-img-top" alt="<?= $meal['name'] ?>">
                    <div class="card-body">
                        <h3><?= $meal['name'] ?></h3>
                        <p><?= $meal['price'] ?> €</p>
                    </div>
                    <div class="card-footer">
                        <a href="/?controller=meal&action=show&id=<?= $meal['id_meal'] ?>" class="btn btn-primary">Voir details</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>