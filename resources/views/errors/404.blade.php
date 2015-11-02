<html>
    <head>
        <title>Error 404 - File Not found</title>
        <style>
            html, body {
               background-color: #252830;
               color: #fff;
               width: 100%;
               height: 100%;
            }
            .error {
                width: 20%;
                height: 16%;
                border: 4px solid black;
            }
        </style>
        <script type="text/javascript" src="{{ URL::asset('assets/js/jquery-2.1.4.min.js') }}"></script>
        <script type="text/javascript">
                $(window).resize(function(){
                    $('.error').css({
                        position: 'absolute',
                        left: ($(window).width() - $('.error').outerWidth())/2,
                        top: ($(window).height() - $('.error').outerHeight())/2
                });
            });
        </script>
    </head>
    <bdoy>
        <div class="error">
            <h1 style="text-align: center;">Error 404 - File Not Found</h1>
            <h3 style="text-align: center;">{{ Request::url() }} Not Found</h3>
            <h4 style="text-align: center;">Please Re-Enter the Url and Try again</h4>
        </div>
        <script type="text/javascript">
        $(window).resize();
        </script>
    </body>
</html>