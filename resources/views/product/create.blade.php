<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
</head>
<body>
    
    <div class="container mt-4">
 
         <h1 class="text-center">Add Product</h1><br/>

         <form action="{{ route('product.store') }}" method="post">
            @csrf
            <label><b>Product Name</b></label>
            <input type="text" name="prodname" class="form-control" placeholder="Enter Product Name" required/><br/>

            <label><b>Product Price</b></label>
            <input type="text" name="prodprice" class="form-control" placeholder="Enter Product Price" required/><br/>

            <label><b>Product Color</b></label>
            <select name="prodcol" class="form-control">
                  <option>---Choose Color---</option>
                  <option value="red">Red</option>
                  <option value="green">Green</option>
                  <option value="blue">Blue</option>
                  <option value="black">Black</option>
            </select><br/>
            <label><b>Product Size</b></label>
            <select name="prodsize" class="form-control">
                <option>---Choose Size---</option>
                <option value="small">S</option>
                <option value="medium">M</option>
                <option value="large">L</option>
                <option value="excel">XL</option>
                <option value="double excel">XXL</option>
            </select><br/>
            <input type="submit" value="Save" class="btn btn-success"/>
         </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>