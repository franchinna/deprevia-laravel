<!doctype html>
<html lang="{{ app()->getLocale() }}">

<header>
@include('include.header')
    <title>Home - dePrevia</title>

</header>

<body>

    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <div class="carousel carousel-slider center" data-indicators="true">
                <a class="carousel-item" href="{{asset('#one!')}}"><img src="{{asset('images/party01.jpg')}}"></a>
                <a class="carousel-item" href="{{asset('#two!')}}"><img src="{{asset('images/party02.jpg')}}"></a>
                <a class="carousel-item" href="{{asset('#three!')}}"><img src="{{asset('images/party03.jpg')}}"></a>
                <a class="carousel-item" href="{{asset('#four!')}}"><img src="{{asset('images/party01.jpg')}}"></a>
                <a class="carousel-item" href="{{asset('#five!')}}"><img src="{{asset('images/party03.jpg')}}"></a>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="section">

            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
                        <h5 class="center">Lorem ipsum dolor</h5>

                        <p class="light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla nisi, maximus non libero varius, bibendum placerat magna. Morbi suscipit efficitur urna sagittis luctus. Cras consectetur sit amet ipsum ac dapibus. Nunc bibendum justo non hendrerit varius. Etiam fringilla vel felis non iaculis. In sit amet ornare magna.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
                        <h5 class="center">Lorem ipsum dolor</h5>

                        <p class="light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla nisi, maximus non libero varius, bibendum placerat magna. Morbi suscipit efficitur urna sagittis luctus. Cras consectetur sit amet ipsum ac dapibus. Nunc bibendum justo non hendrerit varius. Etiam fringilla vel felis non iaculis. In sit amet ornare magna.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
                        <h5 class="center">Lorem ipsum dolor</h5>

                        <p class="light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla nisi, maximus non libero varius, bibendum placerat magna. Morbi suscipit efficitur urna sagittis luctus. Cras consectetur sit amet ipsum ac dapibus. Nunc bibendum justo non hendrerit varius. Etiam fringilla vel felis non iaculis. In sit amet ornare magna.</p>
                    </div>
                </div>
            </div>

        </div>
        <br><br>
    </div>

    <script type="text/javascript">
        $('.carousel.carousel-slider').carousel({
            fullWidth: true
        });
    </script>

    <footer>
        @include("include.footer")
    </footer>

</body>
</html>




