<footer>
			<div class="container">
				<div class="wrapper">
					<div class="fleft">
						&copy; 2013
					</div>
					<div class="fright">
						Powered by iQube labs
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
		fx:    'curtainX', 
    sync:  false, 
    delay: -2000
	});
	$("#phones").cycle({
		fx:    'zoom', 
    sync:  false, 
    delay: -2000 
		
	});
</script>
	</body>
</html>
