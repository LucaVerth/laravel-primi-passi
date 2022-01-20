<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
    <title>Hello Laravel</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <header>
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#"><img class="laravel_logo" src="https://seeklogo.com/images/L/laravel-framework-logo-C10176EC8C-seeklogo.com.png" alt=""></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                          <li class="nav-item">
                            <a class="nav-link text-danger active" aria-current="page" href="#">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-danger" aria-current="page" href="{{ route('about')}}">About</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-danger" aria-current="page" href="{{ route('contacts')}}">Contacts</a>
                          </li>
                        </ul>
                        <form class="d-flex">
                          <input class="form-control me-2 bg-dark" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-danger" type="submit">Search</button>
                        </form>
                      </div>
                    </div>
                  </nav>
            </header>
        </div>
        <div class="row welcome_page">
            <h1>Welcome to <strong>Laravel</strong></h1>
            <p>Visit our <a href="{{ route('about')}}">About</a> section for more details, or feel free to reach us out through <a href="{{ route('contacts')}}">Contacts</a> for more information regarding Laravel</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
