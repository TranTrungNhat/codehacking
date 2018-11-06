@extends ('layouts.admin')

@section('content')

    <h1> Post index</h1>


     <table class="table">
         <thead>
           <tr>
                <th>Id</th>
               <th>Photo</th>
                <th>Owner</th>
                <th>Category_id</th>

               <th>Title</th>
               <th>Body</th>
               <th>Created</th>
               <th>Updated</th>
           </tr>
         </thead>
         <tbody>
            @if($posts)
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td><img height="50" src="{{$post->photo?$post->photo->file:'/images/no-image.jpg'}}"></td>
                        <td>{{$post->user?$post->user->name:"user undefined"}}</td>
                        <td>{{$post->category?$post->category->name:""}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->body}}</td>
                        <td>{{$post->created_at->diffForhumans()}}</td>
                        <td>{{$post->updated_at->diffForhumans()}}</td>

                    </tr>
                @endforeach
            @endif

         </tbody>
       </table>

    @stop
