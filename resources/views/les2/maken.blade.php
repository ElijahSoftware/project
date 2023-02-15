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


    <title>Maken</title>
</head>
<body>
    @include('les2.postCo.header')
    <section>
        <div class="container center">
            <div class="text-muted py-5">
                <h1> Maak Een Bericht</h1>
                <form method="POST" action="/post">
                    {{ csrf_field() }}
                    <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                    </div>

                    <div class="mb-3">
                    <label for="body">Body</label>
                    <textarea  class="form-control" name="body" id="body" cols="30" rows="10" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Publiceren</button>
                </form>
            </div>
        </div>
    </section>
    @include('les2.postCo.footer')
    
</body>
</html>