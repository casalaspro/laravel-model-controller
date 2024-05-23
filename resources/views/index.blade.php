<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  @vite('resources/js/app.js')
</head>
<body>

  <main>
    <div class="movies">
      <div class="container">
        <div class="row">
          @foreach ($movies as $movie) 
            <div class="col-3">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">{{ $movie->title }}</h3>
                  <h6 class="card-subtitle mt-2">Original Title: {{ $movie->original_title }}</h4>
                  <h6 class="card-subtitle mt-2">Nationality: {{ $movie->nationality }}</h4>
                  <h6 class="card-subtitle mt-2">Release Date: {{ $movie->date }}</h4>
                  <h6 class="card-subtitle mt-2">Vote: {{ $movie->vote }}</h4>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </main>
  
</body>
</html>