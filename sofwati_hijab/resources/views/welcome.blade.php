<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <script src="{{asset('/js/dropzone.js')}}"></script>
        <link rel="stylesheet" href="{{asset('/css/dropzone.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/app.css')}}">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">     
            <div class="jumbotron">
                    <div id="app">
                    <list></list>
                        {{-- <router-link to="/">Home</router-link>
                        <router-link to="/about">about</router-link>        
                        <router-link to="/bar">Go to Bar</router-link>          
                        <router-link to="/barang">list barang</router-link>           --}}

                        {{-- <example></example> --}}

                        <router-link to="/galery">upload image</router-link>
                        
                        {{-- add post --}}
                        <router-link to="/create">
                            <button type="button" class="btn btn-primary ">
                            add post
                            </button>
                        </router-link>    
                    
                        <router-view></router-view>
                        <about></about>
                    </div>
            </div>    
        </div>

            <script>
                window.Laravel = <?php echo json_encode([
                    'csrfToken' => csrf_token(),
                ]); ?>
            </script>

        <script src="/js/app.js"></script>
    </body>
</html>
