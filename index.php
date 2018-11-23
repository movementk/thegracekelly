<!doctype html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>빌라드지디더그레이스켈리</title>
        <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/intro.css">
    </head>
    <body>
        <main id="intro">
            <article>
                <div class="container">
                    <h1 class="logo">
                        <img src="/assets/images/intro/logo.png" class="img-responsive" alt="">
                    </h1>
                    <div class="btn-area gangnam">
                        <a href="#none" class="btn btn-gangnam" role="button">
                            <img src="/assets/images/intro/img_left_btn_xs.png" class="visible-xs" alt="gangnam">
                            <img src="/assets/images/intro/img_left_btn_lg.png" class="img-responsive hidden-xs" alt="gangnam">
                            <span class="bar"></span>
                        </a>
                    </div>
                    <div class="btn-area suseo">
                        <a href="#none" class="btn btn-suseo" role="button">
                            <img src="/assets/images/intro/img_right_btn_xs.png" class="visible-xs" alt="btn-suseo">
                            <img src="/assets/images/intro/img_right_btn_lg.png" class="img-responsive hidden-xs" alt="btn-suseo">
                            <span class="bar"></span>
                        </a>
                    </div>
                </div>
            </article>
            
            <nav class="nav-gangnam">
                <figure>
                    <img src="/assets/images/intro/img_contact_xs.png" class="visible-xs" alt="">
                    <img src="/assets/images/intro/img_contact_md.png" class="visible-sm visible-md" alt="">
                    <img src="/assets/images/intro/img_contact_lg.png" class="visible-lg" alt="">
                </figure>
            </nav>
            <nav class="nav-suseo"></nav>
        </main>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
        <script>
            (function($){
                $(document).on('mouseenter focus','.btn-gangnam', function(){
                    $('body').addClass('open-gangnam');
                });
                $(document).on('mouseleave','.btn-gangnam', function(){
                    $('body').removeClass('open-gangnam');
                });
                $(document).on('mouseenter focus','.btn-suseo', function(){
                    $('body').addClass('open-suseo');
                });
                $(document).on('mouseleave','.btn-suseo', function(){
                    $('body').removeClass('open-suseo');
                });
            })(jQuery);
        </script>
    </body>
</html>