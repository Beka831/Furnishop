<!DOCTYPE html>
<html lang="en">
  @include('admin.css');
  <style>
    /* CSS styling for the form */
    .form-container {
      width: 480px;
      margin: 0 auto;
      padding: 20px;
      background-color: green;
      border-radius: 5px;
      font-family: Arial, sans-serif;
    }

    .form-container label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }

    .form-container input[type="text"],
    .form-container input[type="number"],
    .form-container textarea {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 16px;
    }

    .form-container input[type="file"] {
      margin-bottom: 16px;
    }

    .form-container button {
      background-color: black;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      
    }

    .form-container button:hover {
      background-color: white;
      color:black;
    }
    .font-s{
        font-size: 30px;
    }
    #name{
        color: black;
    }
  </style>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        
      @include('admin.side')
      @include('admin.navbar')
    
           
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="text-center">
          @if(session()->has('message'))
                <div class="text-center center text-success">
                    {{session()->get('message')}}
                </div>
            @endif
          
          <h2 class="text-center font-s">Add Products</h2>
          <div class="form-container">
          
            <form action="{{ url('/add_product')}}" method="POST" enctype="multipart/form-data">
          
             @csrf
            <label for="product-name">Product Name</label>
            <input type="text" id="name" name="name" placeholder="product name"required="">

            <label for="product-category">Product Category</label>
                <select id="name" name="pro_catagory">
                    <option value="">Select a Catagory</option>
                    
                    @foreach($pro_catagory as $pro_catagory)
                    
                    <option value="{{$pro_catagory->catagories_title}}">{{$pro_catagory->catagories_title}}</option>
                    
                    @endforeach
                </select>

            <label for="product-description">Product Description</label>
            <textarea id="name" name="desc"placeholder="product Description" required=""></textarea>

            <label for="product-quantity">Product Quantity</label>
            <input type="number" id="name" name="quantity"placeholder="product Quantity"required="">

            <label for="product-price">Product Price</label>
            <input type="number" id="name" name="price" step="0.01"placeholder="product Price"required="">

            <label for="product-image">Product Image</label>
            <input type="file" id="name" name="pro_image"accept="image/*">

            <button type="submit">Add Product</button>
            </form>
            </div>
            </div>
          </div>
        </div>
     
        <!-- partial -->
       
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
    <!-- End custom js for this page -->
  

  </body>
</html>