<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert a product</title>
</head>
<body>
    <h2>Insert a new product</h2>
    <form action="" method="post">
        @csrf
        <label for="">Product Name</label>
        <input type="text" name="name" placeholder="Product Name">
        <br>
        <label for="">Price</label>
        <input type="number" name="price" placeholder="Price of the Product">
        <br>
        <label for="">Stock name</label>
        <input type="text" name="Stock" placeholder="Stock">
        <br>
        <input type="submit" value="INSERT">
    </form>
</body>
</html>