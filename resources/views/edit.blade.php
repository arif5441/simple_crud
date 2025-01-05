<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Product</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.min.css" />
</head>
<body>
    <section>
        <div class="container-fluid px-4  py-4">
            <div class="row">
                <div class="col-8 col-sm-8 offset-1">
                    <h3 class="text-center m-3">Update Product</h3>

                    @if(session('meassage'))
                    <div class="alert alert-success">{{ session('meassage') }}</div>
                    @endif

                    <form action="{{route('product.update',['id'=>$product->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                          <label  class="form-label">Name</label>
                          <input type="string" class="form-control" name="name" value="{{$product->name}}" placeholder="Enter the Name of product">
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Category Name</label>
                                <select class="form-control" name="category_id" id="categoryId">
                                    <option value="" disabled selected>.......Select the Category......</option>
                                       @foreach ($categories as $category )
                                       <option value="{{$category->id}}" {{$category->id == $product->category_id? 'selected':''}}>{{$category->name}}</option>
                                       @endforeach
                                </select>
                              @error('name')
                                  <span class="text-danger">{{$message}}</span>
                              @enderror
                          </div>
                        <div class="mb-3">
                            <label  class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" value="{{$product->description}}"  placeholder="Enter the description">
                          </div>
                        <div class="mb-3">
                          <label  class="form-label">Price</label>
                          <input type="float" class="form-control" name="price" value="{{$product->price}}"  placeholder="Enter the price">
                        </div>
                        <div class="mb-3">
                          <label  class="form-label">Image</label>
                          <input type="file" class="form-control" name="image">
                          <img src="{{asset($product->image)}}" alt="" height="60" width="80">
                        </div>
                        <button type="submit" class="btn btn-primary">Update Product </button>
                      </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
