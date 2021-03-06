<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JS and Stylesheet -->
    <script type="text/javascript" src="public/js/addproduct.js"></script>
    <link rel="stylesheet" type="text/css" href="public/css/main.css" />
    <title>Product Add</title>
</head>

<body>
    <header>
        <div class="container">
            <h1>Product Add</h1>
            <div class="btn-cnt">
                <button type="submit" form="product_form" class="btn">Save</button>
                <button type="button" onclick="location.href='/'" class="btn">Cancel</button>
            </div>
        </div>
    </header>
    <hr>
    <main>
        <form action="../app/controllers/create.php" method="post" id="product_form">
            <div class="label-input">
                <label for="sku">SKU</label>
                <input type="text" id="sku" name="sku" required>
            </div>
            <div class="label-input">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="label-input">
                <label for="price">Price ($)</label>
                <input type="number" id="price" name="price" step="any" required>
            </div>
            <div class="label-input">
                <label for="productType">Type Switcher</label>
                <select name="productType" id="productType" required>
                    <option selected disabled value="">Type Switcher</option>
                    <option value="DVD" id="DVD">DVD</option>
                    <option value="Furniture" id="Furniture">Furniture</option>
                    <option value="Book" id="Book">Book</option>
                </select>
            </div>
            <div id="dynamic_form"></div>
        </form>
    </main>
    <hr>
    <footer>
        <p>Scandiweb Test assigment</p>
    </footer>
</body>

</html>