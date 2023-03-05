<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            .pagination {
                flex-wrap: wrap;
                float: right;
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <div class="container mt-5">
            <h1 class="text-center">全部使用者</h1>

            <div class="row mt-5">
                @foreach($users as $user)
                <div class="col-lg-4">
                    <div class="card mt-2">
                        <div class="card-body">
                            <h5 class="card-title">{{$user->name}}</h5>
                            <p class="card-text">{{$user->email}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {!! $users->links() !!}
        </div>
    </body>
</html>