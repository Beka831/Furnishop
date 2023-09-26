<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin2/product.css">
    <script src="js.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>product</title>
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
                      @foreach($data as $data)
                      <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->pro_name}}</td>
                        <td>{{$data->pro_catagory}}</td>
                        <td>{{$data->pro_desc}}</td>
                        <td>{{$data->pro_price}}</td>
                        <td>
                            <img src="/products/{{$data->pro_image}}" alt="produc image" class="pro-image">
                        </td>
                        <td>{{$data->created_at}}</td>
                        <td><a class="edit">Edit</a><a class="delete" href="{{url('/delete_product',$data->id)}}" 
                        onclick=" return confirm('Are You Sure to Delete This Catagory')">Delete</a></td>
                        
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