<body>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom mx-5">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"></svg>
        <span class="fs-4">Product Add</span>
    </a>

    <ul class="nav nav-pills">
        <button form="product_form" class="btn btn-outline-success" type="submit">Save</button>
        <li class="nav-item"><a href="/" class="nav-link active">Cancel</a></li>
    </ul>
</header>
<form class="form-control-sm" id="product_form" method="POST" action="/addproduct">
    <div class="row">
        <div class="col-md-3">
            <div class="mb-3 mx-5 col-xs-2">
                <label class="form-label" for="sku">SKU</label>
                <input type="text" class="form-control" id="sku" name="sku">
            </div>
            <div class="mb-3 mx-5 col-xs-2">
                <label class="form-label" for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3 mx-5 col-xs-2">
                <label class="form-label" for="price">Price($)</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3 mx-5 col-xs-2">
                <label class="form-label" for="productType">Type Switcher</label>
                <select name="productType" class="form-select" id="productType">
                    <option value="">Type Switcher</option>
                    <option value="dvd" id="DVD">DVD</option>
                    <option value="furniture" id="Furniture">Furniture</option>
                    <option value="book" id="Book">Book</option>
                </select>
            </div>
            <div class="mb-3 mx-5" id="place">

            </div>
        </div>
    </div>

</form>
<script>
    let productType = document.querySelector('#productType');
    let div = document.querySelector('#place');

    productType.addEventListener('change', function test(event) {
        let type = productType.value;
        if (type === 'book') {
            div.innerHTML = '';
            let label = document.createElement('label');

            label.className = "form-label";
            label.textContent = "Weight(KG)";

            let input = document.createElement('input');

            input.type = 'number';
            input.id = 'weight';
            input.name = 'weight';
            input.className = 'form-control'

            let description = document.createElement('p');

            description.className = 'font-monospace';
            description.textContent = 'Product description';

            div.append(label, input, description);
        } else if (type === 'dvd') {
            div.innerHTML = '';
            let label = document.createElement('label');

            label.className = "form-label";
            label.textContent = "Size(MB)";

            let input = document.createElement('input');

            input.type = 'number';
            input.id = 'size';
            input.name = 'size';
            input.className = 'form-control'

            let description = document.createElement('p');

            description.className = 'font-monospace';
            description.textContent = 'Product description';

            div.append(label, input, description);
        } else {
            div.innerHTML = '';
            let labelHeight = document.createElement('label');

            labelHeight.className = "form-label";
            labelHeight.textContent = "Height(CM)";

            let labelWidth = document.createElement('label');

            labelWidth.className = "form-label";
            labelWidth.textContent = "Width(CM)";

            let labelLength = document.createElement('label');

            labelLength.className = "form-label";
            labelLength.textContent = "Length(CM)";

            let inputHeight = document.createElement('input');

            inputHeight.type = 'number';
            inputHeight.id = 'height';
            inputHeight.name = 'height';
            inputHeight.className = 'form-control';

            let inputWidth = document.createElement('input');

            inputWidth.type = 'number';
            inputWidth.id = 'width';
            inputWidth.name = 'width';
            inputWidth.className = 'form-control';

            let inputLength = document.createElement('input');

            inputLength.type = 'number';
            inputLength.id = 'length';
            inputLength.name = 'length';
            inputLength.className = 'form-control';

            let description = document.createElement('p');

            description.className = 'font-monospace';
            description.textContent = 'Product description';

            div.append(labelHeight, inputHeight, labelWidth, inputWidth, labelLength, inputLength, description);
        }
        console.log(div);
    });
</script>