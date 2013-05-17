<footer>
			<div class="container">
				<div class="wrapper">
					
					<div style="text-align:center;width:1000px;margin-left:10%">
						<table class="table">
							<tr>
								<td><a href="careers.php"> Careers</a></td>
								<td><a href="portfolio.php#slide-1">Research</a></td>
								<td>Staff</td>
								<td>Services</td>
							</tr>
							<tr>
								<td><a href="portfolio.php#slide-2">Products</a></td>
								<td>Partners</td>
								<td><a href="index.php">Powered by iQube labs</a></td>
								<td><a href="http://p2mu.net/blog">Blog</a></td>
							</tr>
							<tr>
								<td><a href="about.php">About</a></td>
								<td><a href="portfolio.php#slide-1">Projects<a/></td>
								<td><a href="about.php">FAQ</a></td>
								<td><a href="">Demos</a></td>
							</tr>
						</table>
					</div>
					
				</div>
			</div>
		</footer>

<!-- End extension snippets. -->


<!-- Required JS files. -->
<!--script src="jquery-1.7.2.min.js"></script-->
<script src="core/deck.core.js"></script>

<!-- Extension JS files. Add or remove as needed. -->
<script src="core/deck.core.js"></script>
<script src="extensions/hash/deck.hash.js"></script>
<script src="extensions/menu/deck.menu.js"></script>
<script src="extensions/goto/deck.goto.js"></script>
<script src="extensions/status/deck.status.js"></script>
<script src="extensions/navigation/deck.navigation.js"></script>
<script src="extensions/scale/deck.scale.js"></script>

 
<!-- Initialize the deck. You can put this in an external file if desired. -->
<script>
    $(function() {
        $.deck('.slide');
    });
</script>
<script type="text/javascript">
	$("#image2-gallery").cycle({
		fx:    'scrollRight'
    
	});
	$("#phones").cycle({
		fx:    'fade', 
    sync:  false, 
    delay: -2000 
		
	});
</script>
	</body>
</html>
