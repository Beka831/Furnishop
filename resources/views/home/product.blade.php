<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Furnishop</title>
    <link rel="stylesheet" href="sintu/css.css">
    <script src="javas.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
     <!-- Tailwind CSS CDN -->
     <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">

    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="stylesheet" href="{{asset('beki/Landing/stylehomee.css')}}">


    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <script src="https://kit.fontawesome.com/0998aad7b4.js" crossorigin="anonymous"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
    <!-- header -->
    @include('home.header');
      <div class="container scrollable-container">
        <p class="category-heading">All Categories<br><br></p>
        <hr class="line0">
        <ul class="furniture-list">
          @foreach($catagory as $catagory)
            <li>
              <a href="#container3sofa">
                <span>{{$catagory->catagories_title}}</span>
              </a>
            </li>
           @endforeach
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
        <h2 class="Couch">sofa</h2>
        @foreach($sofa as $sofa)
       
        <div class="card3">
          
          <img src="products/{{$sofa->pro_image}}" alt="Card 1" class="card3-image">
          <div class="card3-description">
            <h4>{{$sofa->pro_name}}</h4>
            <p>{{$sofa->pro_desc}}</p>
           
            <a href="{{url('product_detail',$sofa->id)}}"><i class="fa fa-shopping-cart"></i></a>
          
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
        @foreach($lamp as $lamp)
       
        <div class="card3">
          <img src="products/{{$lamp->pro_image}}" alt="Card 1" class="card3-image">
          <div class="card3-description">
            <h4>{{$lamp->pro_name}}</h4>
            <p>{{$lamp->pro_desc}}</p>
            <a href="{{url('product_detail',$lamp->id)}}"><i class="fa fa-shopping-cart"></i></a>
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

  <!-- table -->
      <div class="container3sofa">
        <h2 class="Couch">Table</h2>
        @foreach($table as $table)
        <div class="card3">
          <img src="products/{{$table->pro_image}}" alt="Card 1" class="card3-image">
          <div class="card3-description">
            <h4>{{$table->pro_name}}</h4>
            <p>{{$table->pro_desc}}</p>
            <a href="{{url('product_detail',$table->id)}}"><i class="fa fa-shopping-cart"></i></a>
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
            <p>{{$bed->pro_desc}}</p>
            <a href="{{url('product_detail',$bed->id)}}"><i class="fa fa-shopping-cart"></i></a>
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
            <p>{{$chair->pro_desc}}</p>
            <a href="{{url('product_detail',$chair->id)}}"><i class="fa fa-shopping-cart"></i></a>
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
      @include('home.footer')
</body>
</html>