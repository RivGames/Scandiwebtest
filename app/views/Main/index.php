<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom mx-5">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"></svg>
        <span class="fs-4">Product List</span>
    </a>
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="/addproduct" class="nav-link active">ADD</a></li>
        <form action="delete" method="POST">
            <button type="submit" class="btn btn-danger">MASS DELETE</button>
        </form>
    </ul>
</header>
<div class="card col-sm-2 mx-5">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    </div>
    <div class="card-body text-center">
        <?php foreach ($products as $product): ?>
            <?= $product['name'] ?>
            <br>
            <?= $product['sku'] ?>
            <br>
            <?= $product['price'] ?> $
            <br>
            Weight:<?= $product['weight'] ?>KG
            <br>
            Size:<?= $product['size'] ?> MB
            <br>
            <?= $product['height'] ?>x
            <?= $product['width'] ?>x
            <?= $product['length'] ?>
        <?php endforeach; ?>
    </div>
</div>
