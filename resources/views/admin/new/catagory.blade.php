
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin2/product.css">
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
                          <th >Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($data as $data)
                        <tr>
                          <th scope="row">{{$data->id}}</th>
                          <th>{{$data->catagories_title}}</th>
                          <th>{{$data->created_at}}</th>
                          <th><a class="delete" href="{{url('/delete_catagory',$data->id)}}" 
                        onclick=" return confirm('Are You Sure to Delete This Catagory')">Delete</a></th> 
                        </tr>
                    @endforeach
                      
                      </tbody>
                    </table>
                    <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    
                                </x-dropdown-link>
                            </form>
               
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