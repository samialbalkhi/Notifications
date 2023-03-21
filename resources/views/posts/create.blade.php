<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>

@endif

    <div class="container">

        <div class="row align-items-center vh-100">
            <div class="col-6 mx-auto">

                <div class="card">
                    <div class="card-body">

                        <h1>create new post</h1>
                        <form method="POST" action="{{route('posts.store')}}">
                            @csrf
                            
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example1">Enter Title</label>
                                <input type="text" name="title" class="form-control" />

                                @error('title')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                     
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example2">Enter Body</label>
                                <input type="text" name="body" class="form-control" />
                                @error('body')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>


                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Save</button>
                            {{-- <a href="" type="submit" class="btn btn-primary btn-block mb-4">Shwo Posts</a> --}}

                            <!-- Register buttons -->
                            <div class="text-center">
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
 
</body>

</html>


