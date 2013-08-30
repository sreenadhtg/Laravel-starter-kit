<html>
    <body>
        
        <?php if (Auth::check()) {?>
            <a href="/home">Home</a>
        <?php } ?>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>