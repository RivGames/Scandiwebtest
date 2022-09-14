<?php
//echo "<pre>";
//print_r($_GET);
//echo "</pre>";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Product list</title>
</head>
<body>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"></svg>
        <span class="fs-4">Product list</span>
    </a>

    <ul class="nav nav-pills">
        <li class="nav-item"><a href="addproduct.html" class="nav-link active">ADD</a></li>
        <form class="d-flex" role="search">
            <button class="btn btn-outline-danger" type="submit">MASS DELETE</button>
        </form>
    </ul>
</header>
<div class="card col-sm-2">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Default checkbox
        </label>
    </div>
    <div class="card-body">
        This is some text within a card body.
    </div>
</div>
</body>
</html>
