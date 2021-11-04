<!DOCTYPE html>
<!--
Template Name: Chillaid
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
    <title>Chillaid</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link href="{{asset('css/layout.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('css/framework.css')}}" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
    <header id="header" class="hoc clear">
        <div id="logo" class="fl_left">
            <!-- ################################################################################################ -->
            <h1 class="logoname"><a href="index.html">Chill<span>a</span>id</a></h1>
            <!-- ################################################################################################ -->
        </div>
        <nav id="mainav" class="fl_right">
            <!-- ################################################################################################ -->
            <ul class="clear">
                <li class="active"><a href="{{route('home')}}">Strona domowa</a></li>



                <li><a href="{{route('search')}}">Wyszukiwarka</a></li>
                <li><a href="{{route('version')}}">Wersja Aktualizacji</a></li>
{{--               <li><a href="{{route('login')}}">Logowanie</a></li>--}}
{{--                <li><a href="{{route('register')}}">Rejestracja</a></li>--}}
            </ul>
            <!-- ################################################################################################ -->
        </nav>
    </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div class="bgded overlay" style="background-image: url('{{ asset('images/backgrounds/slider.jpeg')}}');">
    <div id="pageintro" class="hoc clear">
        <!-- ################################################################################################ -->
        <article>
            <h3 class="heading">Pośrednioctwo zatrudnienia opiekunów</h3>
            <p>Wyłacznie sprawdzeni wychowawcy</p>
            <footer><a class="btn" href="#">Wybierz teraz</a></footer>
        </article>
        <!-- ################################################################################################ -->
    </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div class="wrapper row3">
    <main class="hoc container clear">
        <!-- main body -->
        <!-- ################################################################################################ -->
        <section id="introblocks">
            <ul class="nospace group btmspace-80 elements elements-four">
                <li class="one_quarter">
                    <article><a href="#"><i class="fas fa-hand-rock"></i></a>
                        <h6 class="heading">Zaangażowanie</h6>
                        <p>Ac orci proin porttitor lacus eget mi pellentesque non.</p>
                    </article>
                </li>
                <li class="one_quarter">
                    <article><a href="#"><i class="fas fa-dove"></i></a>
                        <h6 class="heading">Kreatywność</h6>
                        <p>Sapien sed metus congue sodales vivamus scelerisque.</p>
                    </article>
                </li>
                <li class="one_quarter">
                    <article><a href="#"><i class="fas fa-history"></i></a>
                        <h6 class="heading">Poświęcenie</h6>
                        <p>Et interdum vulputate purus nisl fringilla sapien quis.</p>
                    </article>
                </li>
                <li class="one_quarter">
                    <article><a href="#"><i class="fas fa-heartbeat"></i></a>
                        <h6 class="heading">EBezpieczeństwo</h6>
                        <p>Sollicitudin dui mauris dui nunc lorem tortor pharetra.</p>
                    </article>
                </li>
            </ul>
        </section>
        <!-- ################################################################################################ -->
        <section class="group shout"><h1 class="heading">Opiekunki Tygodnia</h1>
            @foreach($guards as $guard)
            <figure class="one_half first"><img src="{{asset('images/')}}/{{$guard->src}}" alt="">
                <figcaption class="heading"><a href="#">{{$guard->name}}</a></figcaption>
            </figure>
            @endforeach
        </section>
        <!-- ################################################################################################ -->
        <!-- / main body -->
        <div class="clear"></div>
    </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded overlay light" style="background-image:url("{{asset('images/backgrounds/01.png')}}");">
    <section id="services" class="hoc container clear">
        <!-- ################################################################################################ -->
        <div class="sectiontitle">
            <h6 class="heading font-x2">Główne parametry</h6>
        </div>
        <ul class="nospace group elements elements-three">
            <li class="one_third">
                <article><a href="#"><i class="fas fa-hourglass-half"></i></a>
                    <h6 class="heading">Cena za godzinę stała przez całą dobę</h6>
                    <p>Interdum at congue semper purus nullam quis odio id justo accumsan ullamcorper maecenas vel arcu nulla tincidunt elit ornare.</p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class="fas fa-paw"></i></a>
                    <h6 class="heading">Opieka nad zwierzętami</h6>
                    <p>Urna proin venenatis eros viverra ultrices fringilla lectus urna consequat erat eget scelerisque ligula felis nec neque nam.</p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class="fas fa-users"></i></a>
                    <h6 class="heading">Opieka nad większą ilością osób</h6>
                    <p>Vitae ipsum vitae velit porttitor aliquam in quam aliquam ullamcorper sem a auctor dapibus nisi nunc vehicula nunc quis mattis.</p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class="fas fa-superscript"></i></a>
                    <h6 class="heading">Wsparcie w nauce</h6>
                    <p>Pede turpis at elit nunc at urna sed ligula vivamus vel erat at diam imperdiet pharetra quisque justo turpis mattis ut vitae.</p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class=" fas fa-puzzle-piece
"></i></a>
                    <h6 class="heading">Organizowanie zabawy</h6>
                    <p>Tortor aenean leo ipsum elementum non cursus eu interdum ut risus proin risus nibh viverra eget lobortis feugiat egestas in nisl.</p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class="fas fa-hand-holding-usd"></i></a>
                    <h6 class="heading">Wychowawca kolonijny</h6>
                    <p>Fusce dignissim neque vitae justo aenean ac urna et leo posuere pretium nunc bibendum enim quis imperdiet elementum dui dolor.</p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class="fas fa-wheelchair"></i></a>
                    <h6 class="heading">Opieka nad niepełnosprawnymi</h6>
                    <p>Interdum at congue semper purus nullam quis odio id justo accumsan ullamcorper maecenas vel arcu nulla tincidunt elit ornare.</p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class="fas fa-utensils"></i></a>
                    <h6 class="heading">Kucharz</h6>
                    <p>Urna proin venenatis eros viverra ultrices fringilla lectus urna consequat erat eget scelerisque ligula felis nec neque nam.</p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class="fas fa-user-graduate"></i></a>
                    <h6 class="heading">Wieloletnie doświadczeni</h6>
                    <p>Vitae ipsum vitae velit porttitor aliquam in quam aliquam ullamcorper sem a auctor dapibus nisi nunc vehicula nunc quis mattis.</p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class="fas fa-moon"></i></a>
                    <h6 class="heading">Opieka w nocy</h6>
                    <p>Pede turpis at elit nunc at urna sed ligula vivamus vel erat at diam imperdiet pharetra quisque justo turpis mattis ut vitae.</p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class="fas fa-female"></i></a>
                    <h6 class="heading">Opiekunka</h6>
                    <p>Tortor aenean leo ipsum elementum non cursus eu interdum ut risus proin risus nibh viverra eget lobortis feugiat egestas in nisl.</p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class="fas fa-male"></i></a>
                    <h6 class="heading">Opiekun</h6>
                    <p>Fusce dignissim neque vitae justo aenean ac urna et leo posuere pretium nunc bibendum enim quis imperdiet elementum dui dolor.</p>
                </article>
            <li class="one_third">
                <article><a href="#"><i class="fas fa-frown"></i></a>
                    <h6 class="heading">Trudna młodzież</h6>
                    <p>Pede turpis at elit nunc at urna sed ligula vivamus vel erat at diam imperdiet pharetra quisque justo turpis mattis ut vitae.</p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class="fas fa-language"></i></a>
                    <h6 class="heading">Praca w jezyku angielskim</h6>
                    <p>Tortor aenean leo ipsum elementum non cursus eu interdum ut risus proin risus nibh viverra eget lobortis feugiat egestas in nisl.</p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class=" fas fa-universal-access"></i></a>
                    <h6 class="heading">Wsparcie psychologiczne</h6>
                    <p>Fusce dignissim neque vitae justo aenean ac urna et leo posuere pretium nunc bibendum enim quis imperdiet elementum dui dolor.</p>
                </article>
            </li>
        </ul>
        <!-- ################################################################################################ -->
    </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
    <section class="hoc container clear">
        <!-- ################################################################################################ -->
        <div class="sectiontitle">
            <p class="nospace font-xs">Rutrum erat nec mollis augue mauris</p>
            <h6 class="heading font-x2">Ac pede phasellus commodo</h6>
        </div>
        <ul class="pr-charts nospace group center">
            <li class="pr-chart-ctrl" data-animate="false">
                <div class="pr-chart" data-percent="25"><i></i></div>
                <p>Porttitor</p>
            </li>
            <li class="pr-chart-ctrl" data-animate="false">
                <div class="pr-chart" data-percent="50"><i></i></div>
                <p>Condimentum</p>
            </li>
            <li class="pr-chart-ctrl" data-animate="false">
                <div class="pr-chart" data-percent="75"><i></i></div>
                <p>Sollicitudin</p>
            </li>
            <li class="pr-chart-ctrl" data-animate="false">
                <div class="pr-chart" data-percent="100"><i></i></div>
                <p>Venenatis</p>
            </li>
        </ul>
        <!-- ################################################################################################ -->
    </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper gradient">
    <div class="hoc container clear">
        <!-- ################################################################################################ -->
        <div class="sectiontitle">
            <h6 class="heading font-x2">Nowi opiekunowie</h6>
        </div>
        <ul class="nospace group team">
            <li class="one_third ">            @foreach($latest_guardians as $latest_guardian)

                <figure><a class="imgover" href="#"><img src="{{asset('images/')}}/{{$latest_guardian->src}}" alt=""></a>
                   <strong>{{$latest_guardian->name}}</strong> </figcaption>
                </figure>
            </li>
                @endforeach

        </ul>
        <!-- ################################################################################################ -->
    </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper coloured">
    <section id="testimonials" class="hoc container clear">
        <!-- ################################################################################################ -->
        <div class="sectiontitle">
            <p class="nospace font-xs">Po zakończonej pracy mozesz wysawic opinie opiekunowi</p>
            <h6 class="heading font-x2">Ostatnie opinie</h6>
        </div>
        <article class="one_half first">
            <figure class="clear"><img src="{{asset('images/100x100.png')}}" alt="">
                <figcaption>
                    <h6 class="heading">D. Doe</h6>
                    <em>Adipiscing fusce eu velit</em></figcaption>
            </figure>
            <blockquote>Pulvinar tortor quis nisi in hac habitasse platea dictumst donec ac tellus fusce venenatis laoreet elit sed est tortor molestie in consectetuer fringilla suscipit ut odio ut ac.</blockquote>
        </article>
        <article class="one_half">
            <figure class="clear"><img src="{{asset('images/100x100.png')}}" alt="">
                <figcaption>
                    <h6 class="heading">E. Doe</h6>
                    <em>Mauris erat aliquam leo</em></figcaption>
            </figure>
            <blockquote>Orci vitae dolor scelerisque blandit morbi eu dui sed volutpat etiam leo leo bibendum vel dictum sed sollicitudin a mi pellentesque ligula nulla facilisi sed bibendum ornare.</blockquote>
        </article>
        <!-- ################################################################################################ -->
    </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
    <section class="hoc container clear">
        <!-- ################################################################################################ -->
        <div class="sectiontitle">
            <h6 class="heading font-x2">Nowe Artykuły</h6>
        </div>
        <ul id="latest" class="nospace group">
            <li class="one_third first">
                <article><a class="imgover" href="#"><img src="{{asset('images/348x261.png')}}" alt=""></a>
                    <ul class="nospace meta clear">
                        <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
                        <li><i class="fas fa-comments"></i> <a href="#">Comments (3)</a></li>
                    </ul>
                    <div class="excerpt">
                        <time datetime="2045-04-05T08:15+00:00">05 Apr 2045</time>
                        <p class="heading"><a href="#">Quam justo suscipit at blandit at blandit vitae tellus maecenas</a></p>
                    </div>
                </article>
            </li>
            <li class="one_third">
                <article><a class="imgover" href="#"><img src="{{asset('images/348x261.png')}}" alt=""></a>
                    <ul class="nospace meta clear">
                        <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
                        <li><i class="fas fa-comments"></i> <a href="#">Comments (6)</a></li>
                    </ul>
                    <div class="excerpt">
                        <time datetime="2045-04-04T08:15+00:00">04 Apr 2045</time>
                        <p class="heading"><a href="#">Commodo mauris a semper posuere sem arcu cursus felis non cursus</a></p>
                    </div>
                </article>
            </li>
            <li class="one_third">
                <article><a class="imgover" href="#"><img src="{{asset('images/348x261.png')}}" alt=""></a>
                    <ul class="nospace meta clear">
                        <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
                        <li><i class="fas fa-comments"></i> <a href="#">Comments (10)</a></li>
                    </ul>
                    <div class="excerpt">
                        <time datetime="2045-04-03T08:15+00:00">03 Apr 2045</time>
                        <p class="heading"><a href="#">Enim odio in odio suspendisse commodo suscipit nisi nam tellus</a></p>
                    </div>
                </article>
            </li>
        </ul>
        <!-- ################################################################################################ -->
    </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
    <section id="ctdetails" class="hoc container clear">
        <!-- ################################################################################################ -->
        <div class="sectiontitle">

            <h6 class="heading font-x2">Działamy na terenie całej warszawy</h6>
            <img src="{{asset('images/1.png')}}" alt=""></div>
        <figure class="one_half first">
            <ul class="nospace clear">
                <li class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong> +00 (123) 456 7890</span></li>
                <li class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong> support@domain.com</span></li>
                <li class="block clear"><a href="#"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Come visit us:</strong> Directions to <a href="#">our location</a></span></li>
            </ul>
        </figure>
        <article class="one_half">
            <h6 class="heading">Purus nullam arcu integer</h6>
            <p class="nospace btmspace-15">Elementum nisi ac volutpat vestibulum enim mi tincidunt eros sed justo magna odio sed lacus ut non ante sit amet est luctus dictum ut dolor ac.</p>
            <form action="#" method="post">
                <fieldset>
                    <legend>Newsletter:</legend>
                    <input type="text" value="" placeholder="Name">
                    <input type="text" value="" placeholder="Email">
                    <button type="submit" value="submit">Submit</button>
                </fieldset>
            </form>
        </article>
        <!-- ################################################################################################ -->
    </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded overlay row4" style="background-image:url("{{asset('images/backgrounds/slider.jpeg')}}">
    <footer id="footer" class="hoc clear">
        <!-- ################################################################################################ -->
        <div class="one_quarter first">

            <h1 class="logoname"><a href="index.html">Chill<span>a</span>id</a></h1>
            <p>Scelerisque facilisis sapien turpis facilisis libero eu viverra purus dui ac leo sed vitae diam morbi sed nibh in eget dolor phasellus rhoncus odio morbi elit nunc id elit donec elementum [<a href="#">&hellip;</a>]</p>
            <ul class="faico clear">
                <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
            </ul>
        </div>
        <div class="one_quarter">
            <h6 class="heading">Volutpat metus nullam</h6>
            <ul class="nospace linklist">
                <li><a href="#">Sagittis leo morbi quis</a></li>
                <li><a href="#">Nulla vehicula felis laoreet</a></li>
                <li><a href="#">Pulvinar proin et eros ac</a></li>
                <li><a href="#">Mi vulputate accumsan fusce</a></li>
                <li><a href="#">At massa in sed tortor sit amet</a></li>
            </ul>
        </div>
        <div class="one_quarter">
            <h6 class="heading">Tincidunt ullamcorper</h6>
            <ul class="nospace clear latestimg">
                <li><a class="imgover" href="#"><img src="{{asset('images/100x100.png')}}" alt=""></a></li>
                <li><a class="imgover" href="#"><img src="{{asset('images/100x100.png')}}" alt=""></a></li>
                <li><a class="imgover" href="#"><img src="{{asset('images/100x100.png')}}" alt=""></a></li>
                <li><a class="imgover" href="#"><img src="{{asset('images/100x100.png')}}" alt=""></a></li>
                <li><a class="imgover" href="#"><img src="{{asset('images/100x100.png')}}" alt=""></a></li>
                <li><a class="imgover" href="#"><img src="{{asset('images/100x100.png')}}" alt=""></a></li>
                <li><a class="imgover" href="#"><img src="{{asset('images/100x100.png')}}" alt=""></a></li>
                <li><a class="imgover" href="#"><img src="{{asset('images/100x100.png')}}" alt=""></a></li>
                <li><a class="imgover" href="#"><img src="{{asset('images/100x100.png')}}" alt=""></a></li>

            </ul>
        </div>
        <div class="one_quarter">
            <h6 class="heading">Fusce vel lectus nunc</h6>
            <ul class="nospace linklist">
                <li>
                    <article>
                        <p class="nospace btmspace-10"><a href="#">Lacinia donec tortor lectus varius vel egestas a dictum in odio mauris metus.</a></p>
                        <time class="block font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
                    </article>
                </li>
                <li>
                    <article>
                        <p class="nospace btmspace-10"><a href="#">Turpis iaculis ac hendrerit vel pretium non magna sed non metus ut at nisi morbi.</a></p>
                        <time class="block font-xs" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
                    </article>
                </li>
            </ul>
        </div>
        <!-- ################################################################################################ -->
    </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
    <div id="copyright" class="hoc clear">
        <!-- ################################################################################################ -->
        <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
        <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
        <!-- ################################################################################################ -->
    </div>
</div>

<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.backtotop.js')}}"></script>
<script src="{{asset('js/jquery.mobilemenu.js')}}"></script>
<script src="{{asset('js/jquery.easypiechart.min.js')}}"></script>

</body>
</html>