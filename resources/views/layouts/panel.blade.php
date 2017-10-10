<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Netinternet</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        body {
            padding:0;
            margin:0;
            font-family: 'Roboto', sans-serif;
            font-size:13px;
            background:#2c3e50;
        }
        a {
            text-decoration:none;
            color: #1abc9c;
        }
        .solblok {
            width: 240px;
            background: #1abc9c;
            height: 100%;
            position: fixed;
            transition: .25s ease;
            z-index: 2;
        }
        .logo a{
            display:block;
            text-align:center;
            font-size:26px;
            color:#fff;
            padding:20px;
            border-bottom:1px solid rgba(255,255,255,.1);
            transition:.25s ease;
            font-weight:bold;
        }
        .altbolum a {
            color: #fff;
            display: block;
            padding: 14px;
            transition: .25s ease;
        }
        .altbolum a:hover {
            background:rgba(255,255,255,.05);
        }

        .altbolum a i {
            float: left;
            width: 30px;
            font-size: 15px;
            color: rgba(255,255,255,.5);
            transition: .25s ease;
        }

        .altbolum a:hover i {
            color: #fff;
        }

        .girismenu,
        .arama-alt{
            padding:10px;
            background:#138871;
        }
        .girismenu input,
        .arama-alt input{
            width:100%;
            padding:8px;
            box-sizing:border-box;
            margin:0;
            margin-bottom:10px;
            border:0;
            background:rgba(255,255,255,.3);
            outline:0;
            color:#fff;
            border-radius:2px;
            transition:.25s ease;
        }
        .girismenu input:focus{
            background:rgba(255,255,255,.5);
        }
        .girismenu input:nth-last-child(1){
            margin-bottom:0;
        }
        .girismenu input::placeholder,
        .arama-alt input::placeholder{
            color:rgba(255,255,255,.5);
            transition:.25s ease;
        }
        .girismenu input:focus::placeholder,
        .arama-alt input:focus::placeholder{
            color:rgba(255,255,255,1);
        }
        .girismenu input[name=girisbuton] {
            background: #167764;
            cursor:pointer;
            font-weight:bold;
        }
        .girismenu input[name=girisbuton]:hover{
            background: #26bfa1;
        }
        .aktif {
            background:rgba(255,255,255,.05);
        }

        .baslik {
            font-weight: bold;
            color: rgba(255,255,255,.5);
            padding: 14px;
            cursor: pointer;
        }

        .baslik-icon {
            float: right;
            transition: .25s ease;
        }

        .bolum {
            border-bottom:1px solid rgba(255,255,255,.1);
        }

        .aramakutu input {
            background: none;
            width: calc(100% - 35px);
            padding: 10px;
            margin: 0;
        }

        .aramakutu button {background: none;border: none;color: #fff;font-size: 16px;float: right;height: 35px;cursor: pointer;width: 35px;outline: 0;}

        .aramakutu {
            width: 100%;
            box-sizing: border-box;
            margin: 0;
            border: 0;
            background: rgba(255,255,255,.3);
            outline: 0;
            color: #fff;
            border-radius: 2px;
            transition: .25s ease;
        }

        .sagblok {
            margin-left: 240px;
            transition: .25s ease;
        }

        .solkapat {
            float: left;
            height: 72px;
            width: 72px;
            text-align: center;
            cursor: pointer;
            color: #1abc9c;
        }
        .solkapat i {
            display: block;
            line-height: 72px;
            font-size: 20px;
        }
        .navigation {
            background: #34495e;
            height: 71px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            line-height: 72px;
            position: fixed;
            width: calc(100% - 240px);
            transition: .25s ease;
            z-index: 2;
        }

        .solblok.solkapali {
            width: 0;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        .sagblok.sagblokuzan {
            margin-left: 0;
        }
        .navigation.naviuzan {
            width: 100%;
        }

        .navi a {
            font-weight: bold;
        }
        span.left i {
            transition:.25s ease;
        }
        span.left.skldon i {
            transform: rotate(180deg);
        }

        .altbolum, .logo {
            width: 240px;
        }
        .container {
            padding: 10px;
            padding-top: 82px;
        }

        .tborder {
            width: 100%;
            margin: auto auto;
            background: #34495e;
            border-radius: 3px;
        }

        .thead {
            color: #1abc9c;
            padding: 12px;
            border-radius: 2px 2px 0 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .forum_status {
            height: 50px;
            width: 50px;
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-size: 28px;
            color: #1abc9c;
            line-height: 50px;
            text-align: center;
        }

        .forum_on:before {
            content: "\f086";
        }

        .forum_off:before {
            content: "\f086";
            opacity:0.6;
        }

        .forum_offlock:before {
            content:"\f023";
            color:#a74c46;
        }

        .forum_offlink:before {
            content:"\f0c1";
            color:#a74c46;
        }

        .subforumicon {
            height: 10px;
            width: 10px;
            display: inline-block;
            margin: 0 10px;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-size: 12px;
            color: #1abc9c;
            text-align: center;
        }

        .subforumicon + a {
            color:#1abc9c;
        }

        .subforum_minion:before {
            content: "\f0e6";
        }

        .subforum_minioff:before {
            content: "\f0e6";
            opacity:0.6;
        }

        .subforum_miniofflock {
            content:"\f023";
        }

        .subforum_miniofflink {
            content:"\f0c1";
        }

        .konuyorum {
            /* background: rgb(26, 188, 156); */
            border-radius: 1000px;
            width: 50px;
            height: 50px;
            line-height: 50px;
            cursor: help;
            color: #1abc9c;
        }

        ul.alt-forum {
            padding: 0px;
            margin: 0;
            margin-top: 0px;
            line-height: 20px;
        }

        ul.alt-forum li {
            list-style: none;
            width: 50%;
            display: inline-block;
        }

        .smalltext {
            color: #99a4ae;
        }
        .trow2,.trow1 {
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .baslik-icon.bi-aktif {
            transform: rotate(180deg);
        }
    </style>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('style')
</head>
<body>
<div class="solblok">
    <div class="logo">
        <a href="#!"><i class="fa fa-anchor" aria-hidden="true"></i>@guest NETINTERNET @else {{ Auth::user()->name }} @endguest</a>
    </div>
    <div class="altbolum">
        <div class="welcomeblock">
            <div class="baslik baslik-1">KULLANICI PANELİ <div class="baslik-icon"><i class="fa fa-chevron-up" aria-hidden="true"></i></div></div>
            <div class="bolum bolum-1">
                @guest
                    <a href="{{ route('login') }}" class="giris"><i class="fa fa-sign-in" aria-hidden="true"></i> Giriş Yap</a>
                    <a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Kayıt Ol</a>
                @else
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                 @endguest
            </div>
        </div>
        <div class="kategoriler">
            <div class="baslik baslik-2">
                KATEGORİLER <div class="baslik-icon"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
            </div>
            <div class="bolum bolum-2">
                <a href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i> Ana Sayfa</a>
                <a href="#!" class="arama"><i class="fa fa-search" aria-hidden="true"></i> Arama</a>
                <div class="arama-alt">
                    <div class="aramakutu">
                        <input type="text" placeholder="İstediğini ara..">
                        <button type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <a href="{{ route('posts.index') }}"><i class="fa fa-users" aria-hidden="true"></i> POSTS</a>
            </div>
        </div>
    </div>
</div>
<div class="sagblok">
    <div class="navigation">
        <div class="solkapat">
            <span class="left"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
        </div>
        <div class="navi">
            <a href="#!"> @yield('title') </a>
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
</div>
<script>
    $(function(){
        $('.girismenu').hide();
        $('.giris').click(function(){

            $(this).toggleClass("aktif"); $('.girismenu').slideToggle();
        });
    });

    $(function(){
        $('.baslik-1').click(function(){
            $('.bolum-1').slideToggle();
            $('.baslik-1 .baslik-icon').toggleClass('bi-aktif');
        });
        $('.baslik-2').click(function(){
            $('.bolum-2').slideToggle();
            $('.baslik-2 .baslik-icon').toggleClass('bi-aktif');
        });
        $('.arama-alt').hide();
        $('.arama').click(function(){
            $(this).toggleClass("aktif");
            $('.arama-alt').slideToggle();
        });
    });

    $(function(){
        $('.solkapat').click(function(){
            $('.solblok').toggleClass('solkapali');
            $('.sagblok').toggleClass('sagblokuzan');
            $('.navigation').toggleClass('naviuzan');
            $('.solkapat .left').toggleClass('skldon');
        });
    });
</script>
<script src="{{ asset('js/app.js') }}"></script>
@yield('script')
</body>
</html>