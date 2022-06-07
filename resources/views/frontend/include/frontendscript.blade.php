<script src="{{asset('frontendfood/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('frontendfood/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('frontendfood/js/custom.js')}}"></script>
	<script src="{{asset('frontendfood/js/owl.js')}}"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js')}}"></script>
	<script src="{{asset('frontendfood/js/jquery.js')}}"></script>
	<script src="{{asset('frontendfood/js/bootstrap.min.js')}}"></script>

	<script src="{{asset('frontendfood/js/wow.min.js')}}"></script>
	<script src="{{asset('frontendfood/js/custom1.js')}}"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
	<script>
		AOS.init();
		$(".backtotop").on('click', function(){
			console.log("Runing")
		})

		$(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 50) {
                    $('#back-to-top').fadeIn();
                } else {
                    $('#back-to-top').fadeOut();
                }
            });
            // scroll body to 0px on click
            $('#back-to-top').click(function() {
                $('#back-to-top').tooltip('hide');
                $('body,html').animate({
                    scrollTop: 0
                }, 1000);
                return false;
            });

            $('#back-to-top').tooltip('show');

        });
   

	</script>