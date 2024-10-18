<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
   @include("admin.navbar")
   <div style="position:relative; top:60px; right: -10px">
    <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
        @csrf

    <div>
        <label>Title</label>
        <input style="color:blue;" type="text" name="title" placeholder="write a title" required>
    </div>
    <div>
        <label>Price</label>
        <input style="color:blue;" type="num" name="price" placeholder="Price" required>
    </div>
    <div>
        <label>Image</label>
        <input style="color:blue;" type="file" name="image" required>
    </div>
    <div>
        <label>Description</label>
        <input style="color:blue;" type="text" name="description" placeholder="Description" required>
    </div>
    <div>
       
        <input  style="color:black" type="submit" value="save">
    </div>
    </form>
    <div>
        <table  style=" background-color:black">
            <tr>
                <th style="padding:30px">Food Name</th>
                <th style="padding:30px">Price</th>
                <th style="padding:30px">Description</th>
                <th style="padding:30px">Image</th>
                <th style="padding:30px">Action</th>
                <th style="padding:30px">Action 2</th>
            </tr>
            @foreach($data as $data)
            <tr style="text-align:center">
                <td style="padding: 10px;">{{$data->title}}</td>
                <td style="padding: 10px;">{{$data->price}}</td>
                <td style="padding: 10px;">{{$data->description}}</td>
                <td style="padding: 10px;"><img  height="200" width="200"src="/foodimage/{{$data->image}}" alt=""></td>
                <td style="padding: 10px;"><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                <td style="padding: 10px;"><a href="{{url('/updateview',$data->id)}}">Update</a></td>
            </tr>
            @endforeach
        </table>
    </div>







   </div>
  
</div>
   @include("admin.adminscript")
  
       
  </body>
</html>