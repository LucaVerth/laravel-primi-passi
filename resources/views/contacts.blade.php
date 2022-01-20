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
                            <a class="nav-link text-danger active" aria-current="page" href="{{ route('home')}}">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-danger" aria-current="page" href="{{ route('about')}}">About</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-danger" aria-current="page" href="#">Contacts</a>
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
        <div class="row contacts mt-5">
            <div class="col-12">
                <h3 class="text-danger">Our Emails</h3>
                <p class="my-3">you can find us at these emails...</p>
            </div>
            <div class="col-12">
                <ul class="email_list">
                    @foreach ($emails as $email)
                        <li>{{$email}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-12">
                <p>...or you can leave a message down below!</p>
            </div>
        </div>
        <div class="row my-2 form">
            <h3 class="my-2 text-danger">Leave Us a message!</h3>
            <div class="mb-3 ">
                <label for="exampleFormControlInput1" class="form-label text-danger">Your Email Address</label>
                <input type="email" class="form-control"  placeholder="name@example.com">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label text-danger">Leave a message</label>
                <textarea class="form-control" placeholder="Enter your message here..." rows="3"></textarea>
                <button class="btn btn-outline-danger my-4">Submit</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
