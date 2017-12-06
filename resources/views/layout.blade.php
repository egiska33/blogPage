@include('partials.head')

<body style="">

@include('partials.nav')


<main role="main" class="container">

    <div class="row">

        <div class="col-sm-8 blog-main">

           @yield('content')



        </div><!-- /.blog-main -->


        @include('partials.sidebar')


    </div><!-- /.row -->

</main><!-- /.container -->

@include('partials.footer')

@include('partials.js')




</body></html>