<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="bg-dark text-center py-2 shadow-lg">
        <h1 class="text-white">Blog App</h1>
    </div>
    <div class="container">
        <div class="d-flex justify-content-between pt-5 mb-4">
            <h4>Blogs</h4>
                <a href="{{ route('create') }}" class="btn btn-dark">Create</a>
        </div>
        <div class="row">
           @if (count($blogs) > 0)
           @foreach ($blogs as $blog)
                
           <div class="col-12 col-md-2 col-lg-3 mb-5">
               <div class="card border-0 shadow-lg">
                   <img src="https://placehold.co/600x400" class="card-img-top" alt="..."/>
                   <div class="card-body">
                       <h2 class="h5">{{ $blog->title }}</h2>
                       <p>{{ $blog->description }}</p>
                       
                       <div class="d-flex justify-content-between">
                           <a href="{{ route('show', $blog->id) }}" class="btn btn-primary">Read</a>
                           <div>
                               <a href="{{ route('edit', $blog->id) }}" class="btn btn-dark">Edit</a>
                               <form class="d-flex" action="{{ route('delete', $blog->id) }}" method="POST">
                                   @csrf
                                   <button type="submit" class="btn btn-danger">Delete</button>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           @endforeach
           @else
               <h1 class="text-center"> No blogs found</h1>
           @endif
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>