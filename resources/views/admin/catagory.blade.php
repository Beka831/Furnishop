
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurniShop</title>
    
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
        .catagories{
            margin: auto;
            text-align: center;
            width: 50%;
            margin-top: 25px;
            border: 3px solid blue;
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

                 <button type="submit" class="btn btn-success">Add Category</button>
            </form>
            <div>
                <table class="catagories">
                    <tr>
                        <td>Id_No</td>
                        <td>Product Name</td>
                        <td>Created at</td>
                        <td>Action</td>
                    </tr>
                    @foreach($data as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->catagories_title}}</td>
                        <td>{{$data->created_at}}</td>
                        <td><a class="btn btn-danger" href="{{url('/delete_catagory',$data->id)}}" 
                        onclick=" return confirm('Are You Sure to Delete This Catagory')">Delete</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>

        </div>
</div>
</body>
</html>