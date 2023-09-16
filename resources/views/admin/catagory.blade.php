
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style  type="text/css">
        .h1_font{
            font-size: 30px;
            padding-top: 60px;
        }
        #name{
            color: black;
        }
        .center{
            color: green;
        }
    </style>
</head>
<body>
    
      
      @include('admin.hom')
    
      
<div class="main-panel">
          <div class="content-wrapper">

            <div class="text-center mb-4">
                <h1 class="h1_font mx-auto">ADD CATAGORY</h1>
            </div>
            @if(session()->has('message'))
                <div class="text-center center">
                    {{session()->get('message')}}
                </div>
            @endif
             <form class="mx-auto text-center mt-3" action="{{ url('/add_catagory')}}"method="POST" >
                @csrf
                     <label for="name" >Category Name:</label>
                    <input type="text" name="catagories" id="name" required>

                 <button type="submit">Add Category</button>
            </form>

        </div>
</div>
</body>
</html>