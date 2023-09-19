<!DOCTYPE html>
<html lang="en"><head>
  @include('admin.css')
  <style type="text/css">
    .center{
        text-align:center;
        margin: auto;
        width: 100%;
        text-align: center;
        border: 3px solid blue;
    }
    .gaza{
        font-size:30px;

    }
    .pro-image{
        width:80px;
        height:80px;
    }
    th{
        background-color:blue;
    }
  </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        
      @include('admin.side')
      @include('admin.navbar')
          
    <div class="main-panel">
        <div class="content-wrapper">
        <div class="text-center gaza">
            <h1>All Products</h1>
        </div>
        <table class="center">
            <tr>
                <tr>
                    <th>Product Name</th>
                    <th>Product Quantity</th>
                    <th>Product Price</th>
                    <th>Product Description</th>
                    <th>Product Catagory</th>
                    <th>Created Date</th>
                    <th>Product Image</th>
                </tr>
                @foreach($data as $data)
                <tr>
                    <td>{{$data->pro_name}}</td>
                    <td>{{$data->pro_quantity}}</td>
                    <td>{{$data->pro_price}}</td>
                    <td>{{$data->pro_desc}}</td>
                    <td>{{$data->pro_catagory}}</td>
                    <td>{{$data->created_at}}</td>
                    <td>
                        <img src="/products/{{$data->pro_image}}" alt="produc image" class="pro-image">
                    </td>
                    
                </tr>
                @endforeach
            </tr>
        </table>
        </div>

        </div>
     
        <!-- partial -->
       
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.js')
    <!-- End custom js for this page -->
  

  </body>
</html>