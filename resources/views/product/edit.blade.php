<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
</head>
<body>
    
    <div class="container mt-4">
 
         <h1 class="text-center">Edit Product</h1><br/>

         <form action="{{ route('product.update',$product->id) }}" method="post">
            @csrf
            <label><b>Product Name</b></label>
            <input type="text" name="prodname" class="form-control" value="{{ $product->name }}" placeholder="Enter Product Name" required/><br/>

            <label><b>Product Price</b></label>
            <input type="text" name="prodprice" class="form-control" value="{{ $product->price }}" placeholder="Enter Product Price" required/><br/>

            <label><b>Product Color</b></label>
            <select name="prodcol" class="form-control">
                  <option>---Choose Color---</option>
                  <option value="red" {{ $product->color == 'red' ? 'selected' : '' ;}}>Red</option>
                  <option value="green" {{ $product->color == 'green' ? 'selected' : '' ;}}>Green</option>
                  <option value="blue" {{ $product->color == 'blue' ? 'selected' : '' ;}}>Blue</option>
                  <option value="black" {{ $product->color == 'black' ? 'selected' : '' ;}}>Black</option>
            </select><br/>
            <label><b>Product Size</b></label>
            <select name="prodsize" class="form-control">
                <option>---Choose Size---</option>
                <option value="small" {{ $product->size == 'small' ? 'selected' : '' ;}}>S</option>
                <option value="medium" {{ $product->size == 'medium' ? 'selected' : '' ;}}>M</option>
                <option value="large" {{ $product->size == 'large' ? 'selected' : '' ;}}>L</option>
                <option value="excel" {{ $product->size == 'excel' ? 'selected' : '' ;}}>XL</option>
                <option value="double excel" {{ $product->size == 'double excel' ? 'selected' : '' ;}}>XXL</option>
            </select><br/>
            <input type="submit" value="Update" class="btn btn-success"/>
         </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>