<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom mx-5">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"></svg>
        <span class="fs-4">Product List</span>
    </a>
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="/addproduct" class="nav-link active">ADD</a></li>
        <button form="delete_form" type="submit" class="btn btn-danger" id="delete_product_btn">MASS DELETE</button>
    </ul>
</header>
<div class="container">
    <div class="row">
        <?php foreach ($dvds as $dvd): ?>
            <div class="card col-sm-2 mx-5 mb-4">
                <div class="form-check">
                        <input class="delete-checkbox" type="checkbox" name="id" value="<?= $dvd['id'] ?>">
<!--                        <input type="hidden">-->
<!--                        <form action="" id="delete_form" method="POST">-->
<!--                            <input class="form-check-input" type="checkbox" name="id" value="--><?//= $dvd['id'] ?><!--"-->
<!--                                   id="flexCheckDefault">-->
<!--                        </form>-->
                </div>
                <div class="card-body text-center">
                    <?= $dvd['name'] ?>
                    <br>
                    <?= $dvd['sku'] ?>
                    <br>
                    <?= $dvd['price'] ?> $
                    <br>
                    Size:<?= $dvd['size'] ?> MB
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php foreach ($books as $book): ?>
            <div class="card col-sm-2 mx-5 mb-4">
                <div class="form-check">
                    <div class="delete-checkbox">
                        <form action="" id="delete_form" method="POST">
                            <input class="form-check-input" type="checkbox" name="id" value="<?= $book['id'] ?>"
                                   id="flexCheckDefault">
                        </form>
                    </div>
                </div>
                <div class="card-body text-center">
                    <?= $book['name'] ?>
                    <br>
                    <?= $book['sku'] ?>
                    <br>
                    <?= $book['price'] ?> $
                    <br>
                    Weight:<?= $book['weight'] ?>KG
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php foreach ($furniture as $item): ?>
            <div class="card col-sm-2 mx-5 mb-4">
                <div class="form-check">
                    <div class="delete-checkbox">
                        <form action="" id="delete_form" method="POST">
                            <input class="form-check-input" type="checkbox" name="id" value="<?= $item['id'] ?>"
                                   id="flexCheckDefault">
                        </form>
                    </div>
                </div>
                <div class="card-body text-center">
                    <?= $item['name'] ?>
                    <br>
                    <?= $item['sku'] ?>
                    <br>
                    <?= $item['price'] ?> $
                    <br>
                    <?= $item['height'] ?>x
                    <?= $item['width'] ?>x
                    <?= $item['length'] ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
