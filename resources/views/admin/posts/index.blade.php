@extends('layouts.admin')

@section('content')

<br>
<br>
<br>
<br>
<br>
<br>
<br>


   <div class="container col-lg-6 col-md-6 col-12 mb-2 text-center">

      <div class="card">

    <div class="card-body">
        @if (Session::has('Done'))
        <div class="alert alert-success text-center">
            {{Session::get('Done')}}
        </div>
    @endif
      <h5 class="card-title"><a href="{{route('admin.dashboard')}}" class="text-danger">Back</a></h5>

      <!-- Table with hoverable rows -->
      <table  class="table table-dark table-striped">

        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>author</th>
                <th colspan="5">Action</th>
            </tr>
        </thead>
        <tbody>

          @foreach ($posts as $item)
          <tr class="text-center">
            <td>{{$loop->iteration}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->content}}</td>
            <td>{{$item->author}}</td>

            <td>

                <div class="btn-group" role="group" aria-label="Basic example">
                    <th>
                    <a href="{{ route('post.edit', $item->id) }}" class="btn btn-success btn-min-width box-shadow-3 mr-1 mb-1">Edit</a>
</th>
<th>
                    <a href="{{ route('post.showById', $item->id) }}" class="btn btn-warning btn-min-width box-shadow-3 mr-1 mb-1">Show</a>
                </th>
                <th>
                    <form action="{{ route('post.delete', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-min-width box-shadow-3 mr-1 mb-1" onclick="return confirm('Are you sure you want to delete this post?');">Delete</button>
                    </form>
                </th>
                </div>

            </td>
          </tr>
          @endforeach


        </tbody>
      </table>

    </div>
  </div>
 </div>
    </div>




@endsection
