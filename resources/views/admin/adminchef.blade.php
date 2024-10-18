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
   <form action=" {{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="">Name</label>
        <input style ="color:blue;" type="text" name="name" required placeholder="Enter name">
    </div>
    <div>
        <label for="">Speciality</label>
        <input style ="color:blue;" type="text" name="speciality" required placeholder="Enter the speciality">
    </div>
    <div>
        <input type="file" name="image" required >
    </div>
    <div>
       
        <input style ="color:blue;" type="submit" value="save">
    </div>

   </form>
   <div>
   <table style="background-color:black;">
    <tr>
        <th style="padding:30px;">Chef Name</th>
        <th style="padding:30px;">Speciality</th>
        <th style="padding:30px;">Image</th>
        <th style="padding:30px;">Action</th>
        <th style="padding:30px;">Action2</th>
    </tr>
    @foreach($data as $data)
    <tr style="text-align:center">
        <td>{{$data->name}}</td>
        <td>{{$data->speciality}}</td>
        <td><img height="100" width="100" src="/chefimage/{{$data->image}}" alt=""></td>
        <td><a href="{{url('/updatechef',$data->id)}}">Update</a></td>
        <td><a href="{{url('/deletechef',$data->id)}}">Delete</a></td>
    </tr>
    @endforeach
   </table>
   </div>

   </div>
   @include("admin.adminscript")
  

  </body>
</html>