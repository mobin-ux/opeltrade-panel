<div class="panel-footer">
		<nav class="float-right menu d-none d-md-block">
		<ul>
			<li><a href="?a=home">Home</a>
			</li>
			<li><a href="?a=about">About Us</a>
			</li>
			<li><a href="?a=cust&amp;page=investment">Managed Investment</a>
			</li>
			<li><a href="?a=cust&amp;page=partnership">Referral Program</a>
			</li>
			<li><a href="?a=support">Help Center</a>
			</li>
			<li><a href="?a=news">News</a>
			</li>
		</ul>
		</nav>
		<ul class="socials float-left">
			
		</ul>
		<div class="clearfix">
		</div>
	</div>
	</section>
	<!-- end main -->
	</main>
	<!-- end panel-wrapper -->
</div>
<!-- end container -->
<!-- java scripts -->
<script src="styles/js/jquery-3.3.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script type="text/javascript" src="styles/js/plugins/smillscoll/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="styles/js/plugins/ResizeSensor.min.js"></script>
<script type="text/javascript" src="styles/js/plugins/theia-sticky-sidebar.min.js"></script>
<script type="text/javascript" src="styles/js/panel/app.js"></script>
<!-- end java scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
<script type="text/javascript">
		$(function () {
		  var clipboard =  new ClipboardJS('.copy');
		  clipboard.on('success', function(e) {
		    e.clearSelection();
		  });
		});
	</script>
	
<script>document.write("<script type='text/javascript' src='styles/js/calculator.js?v=" + Date.now() + "'><\/script>");</script>	

	<script>
    $(".invest-coin-check").click(function() {
        $(".invest").removeClass("inactive");
    })
    $('.close-box').click(function () {
        var box = $(this).parents('.box');
        $('.radio-container-price .box').removeClass('inactive');
        $(box).addClass('inactive');
    });
    </script>	
</body>