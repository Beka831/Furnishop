<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin2/product.css">
    <script src="js.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>product Description</title>
</head>
<body class="body">
    @include('admin/new.nav')
    <section class="main">
       @include('admin/new.side')
        <a href="{{ url('page_product')}}" class="add_btn" >ADD PRODUCT</a>
        <main class="table">
            <section class="table_header">
                <h1>Our Products</h1>
            </section>
            @if(session()->has('message'))
                <div class="text-center text-danger">
                    {{session()->get('message')}}
                </div>
            @endif
            <section class="table_body">
                <table>
                    <thead>
                        <tr>
                          <th >id</th>
                          <th >Product Name</th>
                          <th >Catagory</th>
                          <th >Description</th>
                          <th >Price</th>
                          <th >Product Image</th>
                          <th >Entry Date</th>
                          <th >Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($product as $product)
                      <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->pro_name}}</td>
                        <td>{{$product->pro_catagory}}</td>
                        <td>{{$product->pro_desc}}</td>
                        <td>{{$product->pro_price}}</td>
                        <td>
                            <img src="/products/{{$product->pro_image}}" alt="produc image" class="pro-image">
                        </td>
                        <td>{{$product->created_at}}</td>
                        <td><a class="edit" href="{{url ('/edit_product',$product->id)}}">Edit</a>
                        <a class="delete" href="{{url('/delete_product',$product->id)}}" 
                        onclick=" return confirm('Are You Sure to Delete This Product')">Delete</a>
                        </td>
                        
                      @endforeach
                      
                      </tbody>
                    </table>
                  </table>
            </section>
        </main> 
        
    </section>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/sales.js"></script>
    <script src="assets/js/orders.js"></script>
    <script src="assets/js/products.js"></script>
    <script src="assets/js/customers.js"></script>
    <script src="assets/js/tarsale.js"></script>
</body>
</html>