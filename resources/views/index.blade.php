<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.min.css" />
    <title>CRUD</title>
</head>
<body>

    <section>
        <div class="container-fluid px-4  py-4">
            <div class="row">
                <div class="col-8 col-sm-8 offset-1">
                    <h3 class="text-center m-3">Add Category</h3>

                    @if(session('msg'))
                    <div class="alert alert-success">{{ session('msg') }}</div>
                    @endif

                    <form action="{{route('category.add')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                          <label  class="form-label">Name</label>
                          <input type="string" class="form-control" name="name" placeholder="Enter the Name of Category">
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Add Category</button>
                      </form>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            @if(session('meassage'))
                    <div class="alert alert-success">{{ session('meassage') }}</div>
                    @endif
            <div class="row mt-5">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">rice</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$product->name}}</td>
                            <td>{{$product->category->name}}</td>
                            <td>{{$product->description}}</td>
                            <td><img src="{{asset($product->image)}}"  width="100"  height="80"></td>
                            <td>${{$product->price}}</td>
                            <td>
                                <a href="{{route('product.edit',['id'=>$product->id])}}" class="btn btn-success btn-sm">
                                   Update <i class="ti-reddit"></i>
                                </a>
                                <a href="{{route('product.delete',['id'=>$product->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this')">
                                   Delete
                                </a>
                            </td>
                          </tr>
                        @endforeach

                    </tbody>
                  </table>
            </div>

        </div>

    </section>

    <section>
        <div class="container-fluid px-4  py-4">
            <div class="row">
                <div class="col-8 col-sm-8 offset-1">
                    <h3 class="text-center m-3">Add Product</h3>

                    @if(session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                    @endif

                    <form action="{{route('product.add')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                          <label  class="form-label">Name</label>
                          <input type="string" class="form-control" name="name" placeholder="Enter the Name of product">
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Category Name</label>
                                <select class="form-control" name="category_id" id="categoryId">
                                    <option value="" disabled selected>.......Select the Category......</option>
                                       @foreach ($categories as $category )
                                       <option value="{{$category->id}}">{{$category->name}}</option>
                                       @endforeach
                                </select>
                              @error('name')
                                  <span class="text-danger">{{$message}}</span>
                              @enderror
                          </div>
                        <div class="mb-3">
                            <label  class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" placeholder="Enter the description">
                            @error('description')
                            <span class="text-danger">{{$message}}</span>
                           @enderror
                        </div>
                        <div class="mb-3">
                          <label  class="form-label">Price</label>
                          <input type="float" class="form-control" name="price" placeholder="Enter the price">
                          @error('price')
                          <span class="text-danger">{{$message}}</span>
                      @enderror
                        </div>
                        <div class="mb-3">
                          <label  class="form-label">Image</label>
                          <input type="file" class="form-control" name="image">
                          @error('image')
                          <span class="text-danger">{{$message}}</span>
                      @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Add Product</button>
                      </form>
                </div>
            </div>
        </div>
    </section>



</body>
</html>
