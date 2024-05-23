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
    <div class="container">
      <div class="row">
        @foreach ($movies as $movie) 
          <div class="col-3">
            <div class="card">
              <div class="card-body">
                <h3>{{ $movie->title }}</h3>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </main>
  
</body>
</html>