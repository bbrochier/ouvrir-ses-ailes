        <script>
            function initMap() {

             //map 1
              var myLatLng = {lat: 45.3653963, lng: 5.591763};

              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: myLatLng,
                scrollwheel: false
              });

              var marker = new google.maps.Marker({
                position: myLatLng,
                map: map
              });

              //map 2
//              var myLatLng2 = {lat: 45.180770, lng: 5.731259};
//
//              var map2 = new google.maps.Map(document.getElementById('map2'), {
//                zoom: 13,
//                center: myLatLng2,
//                scrollwheel: false
//              });
//
//              var marker2 = new google.maps.Marker({
//                position: myLatLng2,
//                map: map2
//              });
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap" async defer></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-68688015-1', 'auto');
          ga('send', 'pageview');
        </script>
    </body>
</html>
