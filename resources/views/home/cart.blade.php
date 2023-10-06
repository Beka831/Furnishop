<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furnishop</title>
    {{asset('sintu/product-detail.css')}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="beki/Cart/stylecart.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
  <header>
    <a href="#" class="logo">Furni<span>shop</span></a>
      <div class="navbar-wrapper">
        <ul class="navbar">
        <li><a href="#home">Home</a></li>
        <li><a href="#products">Products</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#cart" class="cart"><i class='bx bxs-cart'></i></a></li>
        <li><a href="#account" class="account"><i class='bx bx-user'></i></a></li>
        </ul>
       </div>
    </header>
    <section class="h-100 h-custom" style="background-color:#0F2547;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
              <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                <div class="card-body p-0">
                  <div class="row g-0">
                    <div class="col-lg-8">
                      <div class="p-5">
                        <div class="d-flex justify-content-between align-items-center mb-5">
                          <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                          
                        </div>
                        @if(session()->has('message'))
                            <div class="text-center text-danger">
                                {{session()->get('message')}}
                            </div>
                        @endif
                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                          <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                            <h6 class="text-muted" style="margin-bottom: -20px; margin-left: 10px;">Image</h6>
                          </div>
                          <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <h6 class="text-muted" style="margin-bottom: -20px; margin-left: -80px;">Product Name</h6>
                          </div>
                          <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <h6 class="text-muted" style="margin-bottom: -20px; margin-left: -30px;">Quantity</h6>
                          </div>
                          <div class="col-12 col-sm-4 col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h6 class="text-muted" style="margin-bottom: -20px; margin-left: -50px;">Price</h6>
                          </div>
                        </div>
                        <hr class="my-4">
                        <?php  $total_amount=0 ?>
                        @foreach($cart as $cart)
                        <div>
                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                        <div class="col-md-2 col-lg-2 col-xl-2">
                            <img src="products/{{$cart->pro_image}}" class="img-fluid rounded-3" alt="Cotton T-shirt">
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-3">
                            
                            <h6 class="text-black mb-0">{{$cart->pro_name}}</h6>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            

                            <h6 class="text-black mb-0">{{$cart->pro_quantity}}</h6>

                           
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h6 class="mb-0">ETB {{$cart->pro_price}}</h6>
                        </div>
                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                            <a href="{{ url('delete_cart',$cart->id)}}" class="text-muted delete-row" onclick=" return confirm('Are You Sure to Delete This Item')">
                            <i class='bx bx-trash icon-large'></i>
                            </a>
                        </div>
                      </div>
                        <hr class="my-4">
                          
                        </div>
                        <?php $total_amount = $total_amount + $cart->pro_price ?>
                        @endforeach
                        
          
      
                        <div class="pt-5">
                          <h6 class="mb-0"><a href="{{url('index')}}" class="text-body"><i
                                class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                        </div>
                      </div>
                    </div>
                    <!-- summary -->
                    <div class="col-lg-4 bg-grey">
                      <div class="p-5">
                        <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                        <hr class="my-4">
      
                        <div class="d-flex justify-content-between mb-4">
                         <h5>Total Amount:</h5>
                          <h5>ETB {{$total_amount}}</h5>
                        </div>
      
                        <h5 class="text-uppercase mb-3">Shipping & Delivery</h5>
      
                        <div class="mb-4 pb-2">
                          <select class="select">
                            <option value="1">Standard-Delivery- ETB 200.00</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                          </select>
                        </div>
      
                       
      
                        <hr class="my-4">
      
                        <div class="d-flex justify-content-between mb-5">
                          <h5 class="text-uppercase">Total price</h5>
                          <h5>ETB {{$total_amount}}</h5>
                        </div>
      
                        <button type="button" class="btn btn-dark btn-block btn-lg"
                          data-mdb-ripple-color="dark">CHECKOUT -></button>
      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>