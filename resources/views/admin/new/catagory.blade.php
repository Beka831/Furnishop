
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sintu/product.css">
    <script src="js.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>product</title>
</head>
@include('admin/new.nav')
 

 <section class="main">
 @include('admin/new.side')

            
    <a href="{{ url ('page_catagory')}}" class="add_btn" >ADD category</a>
        <main class="table">
            <section class="table_header">
           
                <h1>Our category</h1>
            </section>
            @if(session()->has('message'))
                <div class="text-center text-danger">
                    {{session()->get('message')}}
                </div>
            @endif  
            <section class="table_body">
                <table>
                    <thead>
                        <tr>
                          <th >id</th>
                          <th >Catagory Name</th>
                          <th>Created at</th>
                          <th>Updated at</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($data as $data)
                        <tr>
                          <td scope="row">{{$data->id}}</td>
                          <td>{{$data->catagories_title}}</td>
                          <td>{{$data->created_at}}</td>
                          <td>{{$data->updated_at}}</td>
                          <td><a class="edit" href="{{url('/edit_catagory',$data->id)}}">Edit</a>
                          <td><a class="delete" href="{{url('/delete_catagory',$data->id)}}" 
                        onclick=" return confirm('Are You Sure to Delete This Catagory')">Delete</a></td> 
                        </tr>
                    @endforeach
                      
                      </tbody>
                    </table>
                
               
            </section>
        </main> 
        
    </section>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/sales.js"></script>
    <script src="assets/js/orders.js"></script>
    <script src="assets/js/products.js"></script>
    <script src="assets/js/customers.js"></script>
    <script src="assets/js/tarsale.js"></script>
</body> 
</body>