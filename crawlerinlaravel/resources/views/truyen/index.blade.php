<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Truyện hay</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
<body>
    <table class="container table table-striped">
                        <thead>
                            <tr>
                              <th scope="col">Id</th>
                              <th scope="col">Mô tả truyện</th>
                            </tr>
                          </thead>
                          <tbody>
                                @foreach($truyen as $key => $truyencrawler)
                            <tr>
                              <th scope="row">{{$key}}</th>
                              <td>{{$truyencrawler->texttruyen}}</td>
                              </form>
                            </tr>
                                @endforeach
                          </tbody>
                    </table>

</body>
