 @extends('layouts.admin')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Questions</h1>
      <nav>
        <ol class="breadcrumb">
          <h5 class="breadcrumb-item text-success"><a href="{{route('admin.dashbord')}}">Back</a></h5>
          <h5 class="breadcrumb-item"><a href="{{route('admin.Question.index')}}">All Questions</a></h5>

        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="container">
      <div class="row">
        <div class="col-md-6 col-12 mb-2">

            @if (Session::has('Done'))
            <div class="alert alert-success text-center">
                {{Session::get('Done')}}
            </div>
        @endif

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add New Questions</h5>



              <form method="POST" action="{{route('admin.Question.store')}}" enctype="multipart/form-data">
                @csrf



                <div class="form-group my-2">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control  @error('title') is-invalid @enderror" required>
                    @error('title')
                        <span class="text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                <div class="form-group my-2">
                    <label>Body</label>
                    <input type="text" name="body" class="form-control @error('body') is-invalid @enderror" required>
                    @error('body')
                        <span class="text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                {{-- <div class="form-group my-2">
                    <label for="user_id">User_ID</label>
                    @foreach ($questions as $item)
                    <select name="userId" id="">
                        <option value="{{$question->id}}">{{$question->name}}</option>
                    </select>
                    @endforeach
                    </div> --}}




                <div class="d-grid my-3">
                    <button class="btn btn-info">Create</button>
                </div>


              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>



      </div>
    </section>

  </main><!-- End #main -->







@endsection



