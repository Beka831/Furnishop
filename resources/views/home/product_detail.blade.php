<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
       <title>product-detail</title> 
       <link rel="stylesheet" href="{{asset('sintu/product-detail.css')}}">
       <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,700;1,300;1,400&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet"> 
       
       <script src="https://kit.fontawesome.com/0998aad7b4.js" crossorigin="anonymous"></script>
    </head>

    <body >

        
         <!-- header section strats -->
    <header class="header_section">
      
    </header>
    <!-- end header section -->

   <!---------------single product details---------------->
<div class=" container">

    <div class="box">
    <h1>Product Detail</h1>
        @if(session()->has('message'))
    <div class="message">
            {{session()->get('message')}}
    </div>
         @endif
        <img src="{{ asset('products/'.$product->pro_image) }}" id="productimg">
         <div class="text">
         <form action="{{url('add_cart',$product->id)}}" method="POST">
                @csrf
            <h4>Product Name: {{$product->pro_name}}</h4>
            <h4>Product Price: {{$product->pro_price}}ETB</h4>
            <h4>Quantity:<input type="number" value="{{$product->pro_quantity}}" min="1" name="quantity">
            </h4>
            <h4>Product Description: {{$product->pro_desc}}</h4>
         
            <!-- add to cart -->
            
            <input type="submit" value="Add To cart" class="btn">

            </form>

        </div>
        </a>
    </div>
</div>

</body>
</html>