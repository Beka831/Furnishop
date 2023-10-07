<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furnishop</title>

    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0998aad7b4.js" crossorigin="anonymous"></script>
    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('beki/Landing/stylehomee.css')}}">
    
    
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="js.js"></script>

    <!-- Additional CSS or JS files -->

</head>

<body>

<!-- Header Section -->
    @include('home.header');
  
 <!-- header part  -->
  

<!-- 1st -->
<section class="h-screen flex items-center justify-center bg-cover bg-center"
         style="background-image: url('beki/Landing/1st.jpg')">
    <div class="text-white text-center">
        <h1 class="text-7xl font-extrabold mb-8">Creative Furniture for your House</h1>
        <p class="text-2xl  mb-8">Welcome to Furnishop, where quality meets comfort! We are your trusted destination for all your<br> furniture needs. With years of experience in the industry, we pride ourselves on offering a wide selection of stylish and durable<br> furniture pieces to enhance your home or office space.</p>
        
        <a href="{{ url('link')}}" class="px-8 py-4 bg-gray-500 hover:bg-gray-600 rounded-full text-white uppercase tracking-wide">Shop Now</a>
    </div>
</section>


    
<div class="section py-8 max-w-6xl mx-auto rounded-full" style="height: 250px; margin-top: -130px; opacity: 0.8; background-color: #0F2547; box-shadow: 0px 3px 6px #000000;">
    <div class="grid grid-cols-4 gap-2 ml-20 mt-4">
      <div class="col flex items-center fade-in-sm">
        <div class="line-bar h-full bg-white w-1 mr-4"></div>
        <div class="text-lines text-3xl text-white font-bold mr-4">
          <p class="mb-2">Well</p>
          <p class="mb-2">Known</p>
          <p class="mb-2">Experience</p>
        </div>
      </div>
      <div class="col flex items-center fade-in-sm hidden sm:flex">
        <div class="line-bar h-full bg-white w-1 mr-4"></div>
        <div class="text-lines text-3xl text-white font-bold">
          <p class="mb-2">Have</p>
          <p class="mb-2">Trusted</p>
          <p class="mb-2">Legacy</p>
        </div>
      </div>
      <div class="col flex items-center fade-in-sm hidden sm:flex">
        <div class="line-bar h-full bg-white w-1 mr-4"></div>
        <div class="text-lines text-3xl text-white font-bold">
          <p class="mb-2">Assisting</p>
          <p class="mb-2">Furnishing</p>
          <p class="mb-2">Satisfying</p>
        </div>
      </div>
      <div class="col flex items-center fade-in-sm hidden sm:flex"">
        <div class="line-bar h-full bg-white w-1 mr-4 font-bold"></div>
        <div class="text-lines text-3xl text-white font-bold">
          <p class="mb-2">Sourcing</p>
          <p class="mb-2">Styling</p>
          <p class="mb-2">Delivering</p>
        </div>
      </div>
    </div>
  </div>
<!-- popular tags -->
<section class="py-16 bg-white">
    <div class="container mx-auto">
        <h2 class="text-4xl font-bold mb-8 ml-20 text-center md:text-left" style="@media (max-width: 640px) {
            .ml-20 {
              margin-left: auto;
              margin-right: auto;
            }
          }">Popular Tags</h2>
         
       <div class="grid grid-cols-1 md:grid-cols-4 gap-4 ml-auto mr-auto md:ml-40" style="width: 80%; @media (max-width: 768px) {
        .ml-auto {
          margin-left: auto;
        }
        .mr-auto {
          margin-right: auto;
        }
      }">
            <a href="your-link-here" class="card-link">
            <div class="p-2" style="background: #E6E6E6; border-radius: 63px; opacity: 1; height: 220px; width: 250px; display: flex; justify-content: center; align-items: center;">
                <img src="beki/Landing/sofa.png" alt="Image 1" class="w-full mb-4 rounded-lg">
            </div>
        </a>
        <a href="your-link-here" class="card-link">
            <div class="p-2" style="background: #E6E6E6; border-radius: 63px; opacity: 1; height: 220px; width: 250px; display: flex; justify-content: center; align-items: center;">
                <img src="beki/Landing/tvstand.png" alt="Image 2" class="w-full mb-4 rounded-lg">
            </div>
        </a>
        <a href="your-link-here" class="card-link">
            <div class="p-2" style="background: #E6E6E6; border-radius: 63px; opacity: 1; height: 220px; width: 250px; display: flex; justify-content: center; align-items: center;">
                <img src="beki/Landing/chair.png" alt="Image 3" class="mb-4 rounded-lg" style="max-width: 80%; max-height: 80%;">
            </div>
        </a>
        <a href="your-link-here" class="card-link">
            <div class="p-2" style="background: #E6E6E6; border-radius: 63px; opacity: 1; height: 220px; width: 250px; display: flex; justify-content: center; align-items: center;">
                <img src="beki/Landing/lamp.png" alt="Image 4" class="mb-4 rounded-lg" width="150px" height="120px" style="margin: auto;">
            </div>
        </a>
        <a href="your-link-here" class="card-link">
            <div class="p-2" style="background: #E6E6E6; border-radius: 63px; opacity: 1; height: 220px; width: 250px; display: flex; justify-content: center; align-items: center;">
                <img src="beki/Landing/bed.png" alt="Image 5" class="w-full mb-4 rounded-lg" style="margin: auto;">
            </div>
        </a>
        <a href="your-link-here" class="card-link">
            <div class="p-2" style="background: #E6E6E6; border-radius: 63px; opacity: 1; height: 220px; width: 250px; display: flex; justify-content: center; align-items: center;">
                <img src="beki/Landing/tch.png" alt="Image 6" class="mb-4 rounded-lg" style="max-width: 90%; max-height: 90%;">
            </div>
        </a>
        </div>

    </div>
</section>

<!--Feature Sections -->
<section class="py-16 bg-white">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="relative ml-30">
                <div class="absolute top-[-10] left-[-20] bg-cover bg-center rounded-lg" style="background-image: url('beki/Landing/sofaimage.jpg'); height: 600px; border-radius: 70px; width: 600px; top: -50px;"></div>
              </div>
            <div class="flex items-center ml-38 mt-38">
                <ul class="list-none pl-8">
                    <li class="text-black text-5xl font-bold mr-4 mb-4">We will make your house better</li>
                    <li class="text-black mb-4 text-4xl">
                        <i class="bx bx-home-smile"></i> Online Presence
                    </li>
                    <li class="text-black mb-4 text-4xl">
                        <i class="bx bx-home-smile"></i> Showroom Experience
                    </li>
                    <li class="text-black mb-4 text-4xl">
                        <i class="bx bx-home-smile"></i> Warranty and After Sales<br>Support
                    </li>
                    <li class="text-black mb-4 text-4xl">
                        <i class="bx bx-home-smile"></i> Customization Options
                    </li>
                    <li class="text-black mb-4 text-4xl">
                        <i class="bx bx-home-smile"></i> Interior Design Services
                    </li>
                    <li class="text-black mb-4 text-4xl">
                        <i class="bx bx-home-smile"></i> Delivery and Assembly
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
  
  <style>
    /* Media query for smaller screen sizes */
    @media (max-width: 768px) {
      .grid-cols-1 {
        grid-template-columns: 1fr; /* Display one column for smaller screens */
      }
      
      .ml-60 {
        margin-left: 0; /* Remove the left margin */
      }
      
      .absolute {
        position: static; /* Remove absolute positioning */
        width: 100%; /* Adjust the width to fit the container */
        height: auto; /* Allow image height to adjust proportionally */
        border-radius: 0; /* Remove border-radius */
      }
      
      .list-none {
        padding-left: 0; /* Remove left padding */
      }
      
      .text-5xl {
        font-size: 3.5rem; /* Adjust font size for smaller screens */
      }
      
      .text-4xl {
        font-size: 2.5rem; /* Adjust font size for smaller screens */
      }
    }
  </style>



<!-- Order Section -->
<section class="py-16 mt-8"  style="background-color: #0F2547;">
    <div class="container mx-auto px-20 ">
      <p class="text-white text-4xl text-center mb-4">"You can order your product that YOU WANT..."</p>
      <form class="bg-white p-8 rounded-lg shadow animate__animated animate__fadeIn">
        <p class="text-black-700 text-4xl text-center mb-4">Place Your Order Here</p>
        <div class="mb-4">
          <label for="name" class="text-black-700">Name:</label>
          <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Enter your name" required>
        </div>
        <div class="mb-4">
          <label for="email" class="text-black-700">Email:</label>
          <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Enter your email" required>
        </div>
        <div class="mb-4">
          <label for="product" class="text-black-700">Product:</label>
          <input type="text" id="product" name="product" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Enter the product name" required>
        </div>
        <div class="mb-4">
          <label for="quantity" class="text-black-700">Quantity:</label>
          <input type="number" id="quantity" name="quantity" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Enter the quantity" required>
        </div>
        <div class="mb-4">
          <label for="description" class="text-black-700">Special Description:</label>
          <textarea id="description" name="description" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Enter any special description"></textarea>
        </div>
        <div class="mb-4">
          <label for="image" class="text-black-700">Image:</label>
          <input type="file" id="image" name="image" class="w-full p-2 border border-gray-300 rounded-md" accept="image/*">
        </div>
        <button type="submit" class="text-white px-4 py-2 rounded-md" style="background-color: #0F2547;">Submit</button>
      </form>
    </div>
  </section>

  <section class="py-16 bg-gray-100">
    <div class="container mx-auto flex justify-center">
        <h2 class="text-4xl font-bold mb-10">Our Reviews</h2>
    </div>
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-8 rounded-lg shadow animate__animated animate__fadeIn">
                <i class="fas fa-quote-left text-2xl mb-4" style="color: #0F2547;"></i>
                <p class="text-gray-700 mb-4">"I am absolutely thrilled with the furniture I purchased from your store. The quality is outstanding, and the customer service was exceptional throughout the entire process. Thank you!"</p>
                <h3 class="text-lg font-bold">Abebe Kebede</h3>
                <p class="text-gray-600">Marketing Manager</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow animate__animated animate__fadeIn">
                <i class="fas fa-quote-left text-2xl mb-4" style="color: #0F2547;"></i>
                <p class="text-gray-700 mb-4">"The quality of the furniture I purchased from your store exceeded my expectations. Highly recommend!"</p>
                <h3 class="text-lg font-bold">Ustaz Ahmed</h3>
                <p class="text-gray-600">Business Owner</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow animate__animated animate__fadeIn">
                <i class="fas fa-quote-left text-2xl mb-4" style="color: #0F2547;"></i>
                <p class="text-gray-700 mb-4">"The customer service at your furniture store was outstanding. The staff was knowledgeable and helpful."</p>
                <h3 class="text-lg font-bold">Selam Tadele</h3>
                <p class="text-gray-600">Designer</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow animate__animated animate__fadeIn">
                <i class="fas fa-quote-left text-2xl mb-4" style="color: #0F2547;"></i>
                <p class="text-gray-700 mb-4">"I love the unique designs and attention to detail in the furniture at your store. Plus the selling website too. Fantastic Work!"</p>
                <h3 class="text-lg font-bold">Mussie Abrham</h3>
                <p class="text-gray-600">Travel Blogger</p>
            </div>
        </div>
    </div>
</section>


<!-- FAQ Section -->
<section class="py-16 bg-gray-100" style="margin-top: -60px;">
    <div class="container mx-auto flex flex-col items-center">
        <h2 class="text-3xl font-bold mb-8">Frequently Asked Questions</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="p-6 rounded-lg shadow" style="background-color: #0F2547;">
                <h3 class="text-xl font-bold mb-4 text-white">Do you provide delivery services?</h3>
                <p class=" mb-4 text-white">We offer a wide range of furniture for various spaces in your home or office.</p>
            </div>
            <div class="p-6 rounded-lg shadow" style="background-color: #0F2547;" >
                <h3 class="text-xl font-bold mb-4 text-white">Do you provide delivery services?</h3>
                <p class="mb-4 text-white">Yes, we provide delivery services for your convenience.</p>
            </div>
            <div class="p-6 rounded-lg shadow" style="background-color: #0F2547;">
                <h3 class="text-xl font-bold mb-4 text-white">Can you assist with furniture assembly?</h3>
                <p class="mb-4 text-white">Absolutely! We understand that furniture assembly can be time-consuming.</p>
            </div>
            <div class="p-6 rounded-lg shadow" style="background-color: #0F2547;">
                <h3 class="text-xl font-bold mb-4 text-white">Do you offer warranty coverage for furniture?</h3>
                <p class="mb-4 text-white">Yes, we provide warranty coverage for our furniture.</p>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<footer class="py-16" style="background-color: #0F2547;">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="flex flex-col items-center">
                <img src="beki/Landing/FurniShop.png" alt="Furnishop Logo" class="w-22 h-25 mb-4">
                
                <ul class="flex space-x-6 mt-2">
                    <li><a href="#" class="text-white hover:text-blue-700 text-2xl"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" class="text-white hover:text-blue-700 text-2xl"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#" class="text-white hover:text-blue-700 text-2xl"><i class="fab fa-pinterest"></i></a></li>
                    <!-- Add additional social media links here if needed -->
                </ul>
            </div>
            <div class="flex flex-col items-center">
                
                <ul class="flex flex-col space-y-2 mt-4">
                    <p class="text-white text-2xl">The Company</p>
                    <li><a href="#" class="text-white hover:text-blue-700 text-lg">About Us</a></li>
                    <li><a href="#" class="text-white hover:text-blue-700 text-lg">Company Profile</a></li>
                    <li><a href="#" class="text-white hover:text-blue-700 text-lg">Our Service</a></li>
                    <li><a href="#" class="text-white hover:text-blue-700 text-lg">Licence and Certificates</a></li>
                    <li><a href="#" class="text-white hover:text-blue-700 text-lg">Our Team</a></li>
                    <li><a href="#" class="text-white hover:text-blue-700 text-lg">Contact Us</a></li>
                    <!-- Add additional about us links here if needed -->
                </ul>
            </div>
    
            <div class="flex flex-col items-center">
                
                <ul class="flex flex-col space-y-2 mt-4">
                    <p class="text-white text-2xl">Ways To Shop</p>
                    <li><a href="#" class="text-white hover:text-blue-700 text-lg">Home</a></li>
                    <li><a href="#" class="text-white hover:text-blue-700 text-lg">Products</a></li>
                    <li><a href="#" class="text-white hover:text-blue-700 text-lg">Your Cart</a></li>
                    <li><a href="#" class="text-white hover:text-blue-700 text-lg">Account</a></li>
                    <li><a href="#" class="text-white hover:text-blue-700 text-lg">Help</a></li>
                    
                </ul>
            </div>
    
            <div class="flex flex-col items-center">
                <div class="flex flex-col items-center">
                    
                    <ul class="flex flex-col space-y-2 mt-4">
                        <p class="text-white text-2xl">More Info</p>
                        <li><a href="#" class="text-white hover:text-blue-700 text-lg">About Us</a></li>
                        <li><a href="#" class="text-white hover:text-blue-700 text-lg">+251 11323121</a></li>
                        <li><a href="#" class="text-white hover:text-blue-700 text-lg">+251 11323121</a></li>
                        <li><a href="#" class="text-white hover:text-blue-700 text-lg">furni22@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<hr class="mt-8 border-t-2 border-white">

<div class="mt-8 text-center text-white text-lg">
    &copy; 2023 FurniShop. All rights reserved. Powered by Group 3
</div>
</footer>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    
    body {
        font-family: 'Poppins', sans-serif;
    }
</style>
</body>
</html>