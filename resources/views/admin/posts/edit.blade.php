@extends('layouts.admin')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Update </h1>
      <nav>
        <ol class="breadcrumb">
          <h5 class="breadcrumb-item text-success"><a href="{{route('admin.dashboard')}}">Back</a></h5>
          {{-- <h5 class="breadcrumb-item"><a href="{{route('post.showById')}}">ShowById</a></h5> --}}

        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="container">
      <div class="row">
        <div class="col-md-6 col-12 mb-2">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Update</h5>



              <form method="POST" action="{{route('post.update',$post->id)}}" enctype="multipart/form-data">
                @csrf



                <div class="form-group my-2">
                    <label>Title</label><br>
                    <input type="text" name="title"  value="{{$post->title}}"  class="form-control  @error('title') is-invalid @enderror" required>
                    @error('title')
                        <span class="text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                <label >Content</label>
                <br>
                <textarea name="content" id="content">{{ old('content', $post->content) }}</textarea>
                @error('content')
                    <div>{{ $message }}</div>
                @enderror

                <div class="form-group my-2">
                    <label>author</label>
                    <input type="text" name="author"  value="{{$post->author}}"  class="form-control @error('author') is-invalid @enderror" required>
                    @error('author')
                        <span class="text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                <div class="d-grid my-3">
                    <button class="btn btn-warning">Update</button>
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



