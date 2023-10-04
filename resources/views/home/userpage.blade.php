<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furnishop</title>
    <link rel="stylesheet" href="home/stylehome.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
  .container {
  position: relative;
  bottom: -10px;
  left: -200px;
  max-width: 1000px;
  margin: 50px auto;
  background-color: #FFFFFF;
  padding: 60px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}
@media (max-width: 1200px) {
  .container {
    position: relative;
    bottom: 20px;
    left: auto;
    max-width: 100%;
    margin: 20px;
    padding: 40px;
    box-shadow: none;
  }
}
  .of {
      text-align: center;
      margin-bottom: 20px;
      color:black;
  }
      label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
  }
  
      input[type="text"],
      input[type="email"],
      select,
      textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #CCCCCC;
        border-radius: 4px;
        margin-bottom: 10px;
      }
  
      select {
        height: 40px;
      }
  
      textarea {
        resize: vertical;
      }
  
  .btnn {
    position: relative;
    top: 40px;
      background-color: black;
      color: white;
      border-radius: 100px;
      text-align: center;
      padding: 10px 20px;
 }
.btnn:hover {
      background-color: #183561;
      }
  .text-center {
      text-align: center;
      }
      .firstt {
  position: relative;
  color: white;
  font-size: 40px;
  left: 400px;
  bottom: -30px;
}
@media (max-width: 1200px) {
  .firstt {
    position: static;
    font-size: 30px;
    left: auto;
    bottom: auto;
  }
}
  .upload{
    position: relative;
    right: 54px;
  
      background-color: black;
      color: white;
      border-radius: 20px;
      text-align: center;
      padding: 5px 15px;
  }
  .upload:hover{
    background-color: #183561;
  }
  </style>
</head>
<body>
  <header>
    <a href="#" class="logo">Furni<span>shop</span></a>
      <div class="navbar-wrapper">
        <ul class="navbar">
        <li><a href="#home">Home</a></li>
        <li class="dropdown">
          <a href="#products" class="dropbtn">Products <i class='bx bx-caret-down'></i></a>
          <div class="dropdown-content">
            <a href="{{url('conecterone')}}">All</a>
            <a href="#">Sofa</a>
            <a href="#">Lamp</a>
            <a href="#">Table</a>
            <a href="#">Bed</a>
            <a href="#">Chair</a>
          </div>
        </li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#cart" class="cart"><i class='bx bxs-cart'></i></a></li>
        <li><a href="#account" class="account"><i class='bx bx-user'></i></a></li>
        </ul>
       </div>
    </header>
  <section class="home" id="home">
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
      <div class="home-text">
          <h1><span>Creative Furniture for your<br>House</h1></span>
          <p>Welcome to Furnishop, where quality meets comfort! We are your trusted destination<br> for all your furniture needs. With years of experience in the industry, we pride ourselves<br> on offering a wide selection of stylish and durable furniture pieces<br> to enhance your home or office space.</p>
          <a href="shop" class="btn">Shop Now</a>
          <a href="#" class="bbtn">
      </div>
  </section>

  <div class="b">
    <div class="btxt">
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Well<br>&nbsp;&nbsp;&nbsp;&nbsp;Known<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Experience</p>
    </div>
    <div class="tbar"></div>
    <div class="bbtxt">
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Have<br>&nbsp;&nbsp;&nbsp;&nbsp;Trusted<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Leagcy</p>
    </div>
    <div class="ttbar"></div>
    <div class="bbbtxt">
      <p>&nbsp;&nbsp;&nbsp;&nbsp;Assisting<br>&nbsp;&nbsp;&nbsp;&nbsp;Furnishing<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Satisfying</p>
    </div>
    <div class="tttbar"></div>
    <div class="bbbbtxt">
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sourcing<br>&nbsp;&nbsp;&nbsp;&nbsp;Styling<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Delivering</p>
    </div>
    <div class="ttttbar"></div>
  </div>
  
  <div class="pt"><p>our-catagory</p></div>

  <div class="cards1">
    <a href="#"><img src="home/beki/sofa.png" alt="Description of the image" width="#" height="#" class="card1" id="image-id"></a>
  </div>

  <div class="cards2">
    <a href="#"><img src="home/beki/tvstand.png" alt="Description of the image" width="#" height="#" class="card2" id="image-id"></a>
  </div>
  <div class="cards3">
    <a href="#"><img src="home/beki/chair.png" alt="Description of the image" width="#" height="#" class="card3" id="image-id"></a>
  </div>

  <div class="cards4">
    <a href="#"><img src="home/beki/lamp.png" alt="Description of the image" width="#" height="#" class="card4" id="image-id"></a>
  </div>

  <div class="cards5">
    <a href="#"><img src="home/beki/bed.png" alt="Description of the image" width="#" height="#" class="card5" id="image-id"></a>
  </div>

  <div class="cards6">
    <a href="#"><img src="home/beki/t&ch.png" alt="Description of the image" width="#" height="#" class="card6" id="image-id"></a>
  </div>
  

  <div class="image">
    <img src="home/beki/imagebbb.jpg" alt="Description of the image" width="#" height="#" class="image" id="image-id">
  </div>
  <div class="imagetxt">
    <p>We will make your<br> house look better</p>
    </div>
    <div class="homei"><i class='bx bx-home-smile' ></i>
      <div class="homeit"><p>Online Presence</p></div>
      <div class="homei2"><i class='bx bx-home-smile' ></i></div>
      <div class="homeit2"><p>Showroom Experience</p></div>
      <div class="homei3"><i class='bx bx-home-smile' ></i></div>
      <div class="homeit3"><p>Warranty and After-<br>Sales Support</p></div>
      <div class="homei4"><i class='bx bx-home-smile' ></i></div>
      <div class="homeit4"><p>Customization<br> Options</p></div>   
  </div>


  <div class="blue">

  <div class="firstt"><p>You Can Order your product that YOU WANT...</p></div>
<div class="container">
    <div class="of">
        <h1>Place Your Order Here </h1></div>
      <form>
        <label for="name">Name:</label>
        <input id="name" name="name" type="text" placeholder="Enter your name" required>
  <label for="email">Email:</label>
        <input id="email" name="email" type="email" placeholder="Enter your email" required>
  <label for="product">Product:</label>
        <select id="product" name="product" required>
          <option value="">Select a product</option>
          <option value="chair">Chair</option>
          <option value="sofa">Sofa</option>
          <option value="table">Table</option>
          <option value="bed">Bed</option>
        </select>
   <label for="quantity">Quantity:</label>
        <input id="quantity" name="quantity" type="number" min="1" placeholder="Enter the quantity" required>
  <label for="Special description"><br><br>Special Description:</label>
        <textarea id="message" name="message" placeholder="Enter your description"></textarea>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
          <label for="image">Select an image:</label>
          <input type="file" id="image" name="image" accept="image/*" required>
              <input type="submit" class="upload" value="Upload">
        </form>
        <div class="text-center">
          <button type="submit" class="btnn">Submit Order</button>
        </div>
      </form>
  </div>
  </div>

  <div class="review"><p>Our Reviews</p></div>
  
<div class="rev"></div>
<div class="rev2"></div>
<div class="rev3"></div>
<div class="rev4"></div>
<div class="blue2">
  <div class="furnishop">Furni<span>shop</span></div>
  <div class="quote">"Furnish your dreams with our<br> exquisite furniture collection."</div>
</div>
<ul class="socme">
  <li><a href="#instagram"><i class='bx bxl-instagram' ></i></a></li>
  <li><a href="#linkedin"><i class='bx bxl-linkedin' ></i></a></li>
  <li><a href="#pinterest"><i class='bx bxl-pinterest' ></i></a></li>
</ul>

<div class="comp">The Company</div>

<div class="footer">
  <a href="#aboutus">About us</a><br><a href="#companyprofile">Company Profile</a><br><a href="ourservice">Our Service</a><br><a href="licenceandcer">Licence and Certificates</a><br><a href="ourteam">Our Team</a><br><a href="contactus">Contact us</a><br>
    </div>

<div class="comp2">The Company</div>

<div class="footer2">
  <a href="#aboutus">About us</a><br><a href="#companyprofile">Company Profile</a><br><a href="ourservice">Our Service</a><br><a href="licenceandcer">Licence and Certificates</a><br><a href="ourteam">Our Team</a><br><a href="contactus">Contact us</a><br>
</div>

<div class="comp3">The Company</div>

<div class="footer3">
  <a href="#aboutus">About us</a><br><a href="#companyprofile">Company Profile</a><br><a href="ourservice">Our Service</a><br><a href="licenceandcer">Licence and Certificates</a><br><a href="ourteam">Our Team</a><br><a href="contactus">Contact us</a><br>
</div>
<div class="footerr">
  <p>&copy; 2023 Furnishop |. All rights reserved. | Developed by Group 3
  </p>
</div>
</body>