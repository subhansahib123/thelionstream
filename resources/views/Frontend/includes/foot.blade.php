<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/poper.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script></script>
    <script>
        $(function () {
            $('.home-slider-01').owlCarousel({
                loop: true,
                nav: true,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
        })
    </script>
    <script>
            $(document).ready(function() {
              var owl = $('.gallery');
              owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 3
                  },
                  1000: {
                    items: 5
                  }
                }
              })
            })
          </script>
            
</body>

</html>