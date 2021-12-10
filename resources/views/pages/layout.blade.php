<!doctype html>
<html>

<head>

    <title>CharityCloud</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="/img/logo/logo.ico"/>
    <link href="/css/prod/component/general.min.css{{ config('app.link_version') }}" type="text/css" rel="stylesheet"/>
    <link href="/css/prod/index.min.css{{ config('app.link_version') }}" type="text/css" rel="stylesheet"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/prod/index.min.js{{ config('app.link_version') }}"></script>

</head>

<body>

    <!--Loader section -->
    @include('component.loader')

    <div id="iphone">
        <div id="camera">
            <span></span>
            <span></span>
        </div>
        <div id="screen">
            <!-- Content section -->
            @yield('content')
        </div>
        <div id="home-btn"></div>
    </div>

</body>


<div id="whatNextModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">   
                <button type="button" class="btn modal-close-btn" data-dismiss="modal"><i class='ti-close'></i></button>     
            </div>
            <div class="modal-body">            
                <div class='text-center'>
                    <img src='/img/picture/coming_soon.png'/>
                    <h3 id="comingTitle">  </h3>
                    <p id="comingDesc">  </p>
                    <small class=""> - "What's Next" Development - </small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Aye</button>
            </div>
        </div>
    </div>
</div>


</html>
