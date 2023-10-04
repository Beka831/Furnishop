<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Furnishop</title>
    <link rel="stylesheet" href="sintu/css.css">
    <script src="javas.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
    <header>
        <a href="#" class="logo">Furni<span>shop</span></a> 
        @if (Route::has('login'))
  @auth
  <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <button type="submit" class="btn btn-danger">
                    <i class="fa-solid fa-right-from-bracket">Logout</i>
                    </button>
                </form>
        @else
        <li><a href="{{ route('login') }}">login</a></li>
        <li><a href="{{ route('register') }}">register</a></li> 
        
    @endauth
   @endif 
        <div class="navbar-wrapper">
          <ul class="navbar">
            <li><a href="{{url('index')}}">Home</a></li>
            <li><a href="{{url('link')}}" >Products </a></li>
              
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#cart" class="cart"><i class='bx bxs-cart'></i></a></li>
            <li><a href="#account" class="account"><i class='bx bx-user'></i></a></li>
          </ul>
        </div>
      </header>
      <div class="container">
        <p class="category-heading">All Categories<br><br></p>
        <hr class="line0">
        <ul class="furniture-list">
            <li>
              <a href="#container3sofa">
                <i class="fas fa-couch"></i>
                <span>Sofa</span>
              </a>
            </li>
            <li>
              <a href="#container4lamp">
                <i class="fas fa-lightbulb"></i>
                <span>Lamp</span>
              </a>
            </li>
            <li>
              <a href="#container5table">
                <i class="fas fa-table"></i>
                <span>Table</span>
              </a>
            </li>
            <li>
              <a href="#container6bed">
                <i class="fas fa-bed"></i>
                <span>Bed</span>
              </a>
            </li>
            <li>
              <a href="#container7chair">
                <i class="fas fa-chair"></i>
                <span>Chair</span>
              </a>
        </ul>
      </div>

      <!-- latest products -->
      <div class="container2">
      <div class="latest-product">Latest Products</div>
      @foreach($latest as $latest)
        <div class="card">
          
            <img src="products/{{$latest->pro_image}}" alt="Card 1" class="card3-image">
              
            <div class="card3-description">
            </div>

          
        </div>
        @endforeach
    </div>
   
      <div class="allproducts">
  
        <h3>All Products</h3>
        <hr class="line">
      </div>
      <section id="container3sofa">
      <!-- sofa -->

      <div class="container3sofa">
        <h2 class="Couch">Sofa</h2>
        @foreach($sofa as $sofa)
       
        <div class="card3">
          
          <img src="products/{{$sofa->pro_image}}" alt="Card 1" class="card3-image">
          <div class="card3-description">
            <h4>{{$sofa->pro_name}}</h4>
            <p>{{$sofa->pro_desc}}</p>
            <a href=""><i class="fa fa-shopping-cart"></i></a>
            
          </div>
          
        </div>
        
        @endforeach

        <section class="section" id="products">
          <div class="col-lg-12">
              <div class="pagination">
                  <ul>
                      <li class="active">
                          <a href="#">1</a>
                      </li>
                      <li >
                          <a href="#">2</a>
                      </li>
                      <li>
                          <a href="#">3</a>
                      </li>
                      <li>
                          <a href="#">4</a>
                      </li>
                      <li>
                          <a href="#">></a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  </section>
      
      </div>
      
      <hr class="line2">
    </section>

    <section id="container4lamp">

        <!-- lamp -->
      <div class="container3sofa">
        <h2 class="Couch">Lamp</h2>
        @foreach($lamp as $product)
       
        <div class="card3">
          <img src="products/{{$product->pro_image}}" alt="Card 1" class="card3-image">
          <div class="card3-description">
            <h4>{{$product->pro_name}}</h4>
            <p>{{$product->pro_desc}}</p>
            <a href=""><i class="fa fa-shopping-cart"></i></a>
          </div>
        </div>
       
        @endforeach
    
        <section class="section" id="products">
          <div class="col-lg-12">
              <div class="pagination">
                  <ul>
                      <li class="active">
                          <a href="#">1</a>
                      </li>
                      <li >
                          <a href="#">2</a>
                      </li>
                      <li>
                          <a href="#">3</a>
                      </li>
                      <li>
                          <a href="#">4</a>
                      </li>
                      <li>
                          <a href="#">></a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  </section>
      </div>
      <hr class="line2">
    </section>
    <section id="container5table">


      <div class="container3sofa">
        <h2 class="Couch">Table</h2>
        @foreach($table as $table)
        <div class="card3">
          <img src="products/{{$table->pro_image}}" alt="Card 1" class="card3-image">
          <div class="card3-description">
            <h4>{{$table->pro_name}}</h4>
            <p></p>
            <a href=""><i class="fa fa-shopping-cart"></i></a>
          </div>
        </div>
         @endforeach
       
        <section class="section" id="products">
          <div class="col-lg-12">
              <div class="pagination">
                  <ul>
                      <li class="active">
                          <a href="#">1</a>
                      </li>
                      <li >
                          <a href="#">2</a>
                      </li>
                      <li>
                          <a href="#">3</a>
                      </li>
                      <li>
                          <a href="#">4</a>
                      </li>
                      <li>
                          <a href="#">></a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  </section>
       
      
      </div>
      <hr class="line2">
    </section>
    <section id="container6bed">
      <!-- Bed -->

      <div class="container3sofa">
        <h2 class="Couch">Bed</h2>
        @foreach($bed as $bed)
        <div class="card3">
          <img src="products/{{$bed->pro_image}}" alt="Card 1" class="card3-image">
          <div class="card3-description">
            <h4>{{$bed->pro_name}}</h4>
            <p>Description of Card 1</p>
            <a href=""><i class="fa fa-shopping-cart"></i></a>
          </div>
        </div>
      
        @endforeach
        
        <section class="section" id="products">
          <div class="col-lg-12">
              <div class="pagination">
                  <ul>
                      <li class="active">
                          <a href="#">1</a>
                      </li>
                      <li >
                          <a href="#">2</a>
                      </li>
                      <li>
                          <a href="#">3</a>
                      </li>
                      <li>
                          <a href="#">4</a>
                      </li>
                      <li>
                          <a href="#">></a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  </section>

      
      
      </div>
      <hr class="line2">
    </section>
    <section id="container7chair">
      <!-- chair -->

      <div class="container3sofa">
         <h2 class="Couch">Chair</h2>
         @foreach($chair as $chair)
         <div class="card3">
          <img src="products/{{$chair->pro_image}}" alt="Card 1" class="card3-image">
          <div class="card3-description">
            <h4>{{$chair->pro_name}}</h4>
            <p>Description of Card 1</p>
            <a href=""><i class="fa fa-shopping-cart"></i></a>
          </div>
        </div>
        @endforeach
        <section class="section" id="products">
          <div class="col-lg-12">
              <div class="pagination">
                  <ul>
                      <li class="active">
                          <a href="#">1</a>
                      </li>
                      <li >
                          <a href="#">2</a>
                      </li>
                      <li>
                          <a href="#">3</a>
                      </li>
                      <li>
                          <a href="#">4</a>
                      </li>
                      <li>
                          <a href="#">></a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  </section>

       
      
      </div>
      <hr class="line2">
    </section>

</body>
</html>