@extends ('layouts.admin')

@section('content')
<h1>All users listing</h1>

 <table class="table">
     <thead>
       <tr>
         <th>Id</th>
         <th>Photo</th>
         <th>Name</th>
         <th>Email</th>
         <th>Role</th>
         <th>Active</th>
         <th>created_at</th>
         <th>updated_at</th>
       </tr>
     </thead>
     <tbody>
     @if($users)
         @foreach($users as $user)
             <tr>
                 <td>{{$user->id}}</td>
                 <td><img height="50" src="{{$user->photo? $user->photo->file:'/images/no-image.jpg'}}" alt="">
                     </td>
                 <td><a href="{{ route('admin.users.edit',$user->id) }}">{{$user->name}}</a></td>
                 <td>{{$user->email}}</td>
                 <td>{{$user->role->name}}</td>
                 <td>{{$user->is_active == 1?'Active':'Not active'}}</td>
                 <td>{{$user->created_at->diffForHumans()}}</td>
                 <td>{{$user->updated_at->diffForHumans()}}</td>
             </tr>
         @endforeach

     @endif


     </tbody>
   </table>

@stop