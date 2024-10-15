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
      <h5 class="card-title">All Questions <a href="{{route('admin.dashbord')}}" class="text-danger">Back</a></h5>

      <!-- Table with hoverable rows -->
      <table class="php artisan vendor:publish --tag=datatables">

        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Title</th>
                <th>Body</th>
                {{-- <th>User_ID</th> --}}
                <th colspan="7">Action</th>
            </tr>
        </thead>
        <tbody>

          @foreach ($question as $item)
          <tr class="text-center">
            <td>{{$loop->iteration}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->body}}</td>
            {{-- <td>{{$question->user_id}}</td> --}}

            <td>

                    <div class="btn-group" role="group"aria-label="Basic example">

                      <th>  <a href="{{route('admin.Question.edit',$item->id)}}"
                           class="btn btn-success btn-min-width box-shadow-3 mr-1 mb-1">Edit</a></th>


                      <th><a href="{{route('admin.Question.delete',$item->id)}}"
                           class="btn btn-danger btn-min-width box-shadow-3 mr-1 mb-1">Delete</a></th>
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
