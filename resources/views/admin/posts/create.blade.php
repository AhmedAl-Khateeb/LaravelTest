@extends('layouts.admin')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Post</h1>
      <nav>
        <ol class="breadcrumb">
          <h5 class="breadcrumb-item text-success"><a href="{{route('admin.dashboard')}}">Back</a></h5>
          <h5 class="breadcrumb-item"><a href="{{route('post.showall')}}">All Posts</a></h5>

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
              <h5 class="card-title">Add New Post</h5>



              <form method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
                @csrf



                <div class="form-group my-2">
                    <label>Title</label><br>
                    <input type="text" name="title" class="form-control  @error('title') is-invalid @enderror" required>
                    @error('title')
                        <span class="text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                <label >Content</label>
                <br>
                <textarea name="content" id="content">{{ old('content') }}</textarea>
                @error('content')
                    <div>{{ $message }}</div>
                @enderror

                <div class="form-group my-2">
                    <label>author</label>
                    <input type="text" name="author" class="form-control @error('author') is-invalid @enderror" required>
                    @error('author')
                        <span class="text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                <div class="d-grid my-3">
                    <button class="btn btn-success">Create</button>
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



