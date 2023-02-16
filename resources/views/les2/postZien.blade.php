<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Bootstrap core CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 
 
 
     {{-- Css --}}
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Post Zien</title>
</head>
<<body>
    <header>
        @include('les2.postCo.header')
    </header>

    <div class="blogtext py-5 bg-light">
        <div class="container">
          <div class="blog">
            <h1>{{$kijk->title}}</h1> 
            <p>{{$kijk->body}}</p>  
          </div>
        </div>
    </div>
<hr>
    <div class="comments">
        <div class="container">
            <ul class="list-group">
                @foreach ($kijk->comments as $comment)
                <li class="list-group-item">
                    <strong>
                        {{$comment->created_at->diffForHumans()}}
                        :
                    </strong>
                    {{$comment->body}}
                </li>
                @endforeach
            </ul>
            <hr>

            <div class="card">
                <div class="card-block">
                    <form method="POST" action="/post/{{$kijk->id }}/comments">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <textarea class="form-control" name="body" id="body" placeholder="Schrijf Jouw Comment" cols="30" rows="10" required></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-info"> Submit</button>
                            <input type="hidden" name="post_id" id="post_id" value="{{$kijk->id}}">
                        </div>


                    </form>
        
                </div>
            </div>
    
        </div>
    </div>
    <footer>
        @include('les2.postCo.footer')
    </footer>
</body>
</html>