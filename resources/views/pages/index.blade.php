@extends("pages.layout")

@section('head')

@endsection

@section('content')

    <div class="content">
        <div id='contentSection'>
            <div id='canvasSection'></div>
            <div id='buttonSection'>
                <a href='/app'><button class='btn btn-primary nav-btn hover start-btn' type='button'> <i class="ti ti-heart"></i><span> Get Started</span></button></a>
            </div>
        </div>
    </div>

    <!-- Post script section for threejs animation -->
    <script type="text/javascript" src="/js/plugin/threejs.js{{ config('app.link_version') }}"></script>
    <script type="text/javascript" src="/js/page/index.js{{ config('app.link_version') }}"></script>


@stop