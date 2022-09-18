<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom mx-5">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"></svg>
        <span class="fs-4">Product List</span>
    </a>
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="/addproduct" class="nav-link active">ADD</a></li>
        <form id="delete" action="/" method="POST">
            <button type="submit" class="btn btn-danger" id="delete_product_btn">MASS DELETE</button>
        </form>
    </ul>
</header>
<div class="container">
    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="card col-sm-2 mx-5 mb-4">
                <div class="form-check">
                    <!--                        <input type="hidden" class="form-check-input">-->
                    <input form="delete" class="delete-checkbox" type="checkbox" name="id[]" value="<?= $product['id'] ?>">
                </div>
                <div class="card-body text-center">
                    <?= $product['name'] ?>
                    <br>
                    <?= $product['sku'] ?>
                    <br>
                    <?= $product['price'] ?> $
                    <br>
                    <?php if ($product['weight'] != 0): ?>
                        Weight <?= $product['weight'] ?> KG
                    <?php endif ?>
                    <?php if ($product['size'] != 0): ?>
                        <br>
                        Size <?= $product['size'] ?> MB
                    <?php endif ?>
                    <?php if ($product['height'] != 0): ?>
                        <br>
                        Dimensions <?= $product['height'] ?>x<?= $product['width'] ?>x<?= $product['length'] ?>
                    <?php endif ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>