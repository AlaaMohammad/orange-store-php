<?php


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net" rel="preconnect" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/boosted.min.css" rel="stylesheet" integrity="sha384-Di/KMIVcO9Z2MJO3EsrZebWTNrgJTrzEDwAplhM5XnCFQ1aDhRNWrp6CWvVcn00c" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Orange Jordan - Eshop </title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://boosted.orange.com/docs/5.1/assets/brand/orange-logo.svg" width="50" height="50" role="img" alt="Boosted" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <h1>Mobile Phone</h1>
    <div class="row">
        <div class="col-3">
            <ul class="list-group">
                <li class="list-group-item active" aria-current="true">An active item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item">And a fifth one</li>
            </ul>
        </div>
        <div class="col-9">
            <div class="row">
                <?php foreach ($_SESSION['phones'] as $phone){?>
                <div class="col-3">
                    <div class="card item-box">
                        <div class="picture">
                                <img alt="Infinix Smart 5" src="<?php echo $phone['img_url']?>" title="Show details for Infinix Smart 5">
                        </div>
                        <div class="card-body">
                            <div class="brand-name">Infinix</div>
                            <h5 class="card-title"><?php echo $phone['name']?></h5>
                            <p class="card-text fw-bold">Caption</p>
                        </div>
                        <div class="details">
                            <div class="rev-height">
                                <div class="product-review-box" title="0 review(s)">
                                    <div class="rating">
                                        <div style="width: 0%">
                                        </div>
                                    </div>
                                    <div class="rating-count">(0)</div>
                                </div>
                            </div>

                            <div class="view-and-compare">
                                <a value="Details" class="button-1 product-box-detail-button" onclick="setLocation('/devices-accessories/mobile-phone/infinix-smart-5',event)"><span>View Details</span><i class="fas fa-chevron-right"></i></a>
                                <a value="Add to compare list" title="Add to compare list" class="button-2 compare-button" onclick="fnCheckProductWhileAddToCompare(746,'/compareproducts/add/746',event)"><span>Compare</span><i></i></a>
                            </div>


                            <div class="prices">
                                <div class="prices-flex">
                                    <div class="prices-list">
                        <span class="price actual-price">
                            <span>JOD</span> 81.<span>00</span>
                            <span class="pad-top15 startFormMonth" id="productBoxMonth"> / month</span>
                        </span>


                                    </div>
                                </div>
                            </div>
                            <div class="add-info">

                                <div class="buttons add-to-cartbutton">
                                    <a value="Buy Now" class="btn btn-primary btn btn-block lg flex-v" href="/devices-accessories/mobile-phone/infinix-smart-5">Buy Now</a>
                                    <button type="button" value="Buy Now" class="btn btn-outline-dark button-2 product-box-add-to-cart-button lg" onclick="AjaxCart.addproducttocart_catalog('/addproducttocart/catalog/746/1/1');return false;"><i></i></button>
                                </div>
                                <div class="buttons add-to-compare cmp-sm">
                                    <button type="button" value="Add to Compare" class="btn btn-primary btn btn-block lg" onclick="fnCheckProductWhileAddToCompare(746,'/compareproducts/add/746'+'?isAddedFromPopup=true',event)">Add to Compare</button>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer pt-2">
                            <a class="btn btn-secondary">Button</a>
                        </div>
                    </div>
                </div>
             <?php } ?>
            </div>
        </div>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/js/boosted.bundle.min.js" integrity="sha384-5thbp4uNEqKgkl5m+rMBhqR+ZCs+3iAaLIghPWAgOv0VKvzGlYKR408MMbmCjmZF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/js/boosted.min.js" integrity="sha384-mBRgv/ye1bG9U6wfppOiHvHVz1KlD7VdRcVZLfOCoQkohsL9P61pQxzobjI4XxNr" crossorigin="anonymous"></script>
</html>
<script>
    function validateForm() {
        let x = document.forms["myForm"]["fname"].value;
        if (x == "") {
            alert("Name must be filled out");
            return false;
        }
    }
</script>