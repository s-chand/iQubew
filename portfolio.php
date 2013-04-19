<?php
include 'header.php';
?>
<div class="deck-container">

<!-- Begin slides. Just make elements with a class of slide. -->

<section class="slide">
    <h2>All iQube's offering</h2>
    <div class="activeSlide">
    	<div class="container">
                    
                    <div class="colleague">All</div>
                    <div class="colleague">Services</div>
                    <div class="colleague">Products</div>
                    <div class="colleague">Solutions</div>
                </div>
    </div>
</section>

<section class="slide">
    <h2>Services</h2>
</section>

<section class="slide">
    <h2>Products</h2>
</section>
<section class="slide">
	<h2>Solutions</h2>
</section>

<!-- End slides. -->


<!-- Begin extension snippets. Add or remove as needed. -->

<!-- deck.navigation snippet -->
<a href="#" class="deck-prev-link" title="Previous">&#8592;</a>
<a href="#" class="deck-next-link" title="Next">&#8594;</a>

<!-- deck.status snippet -->
<p class="deck-status">
    <span class="deck-status-current"></span>
    /
    <span class="deck-status-total"></span>
</p>

<!-- deck.goto snippet -->
<form action="." method="get" class="goto-form">
    <label for="goto-slide">Go to slide:</label>
    <input type="text" name="slidenum" id="goto-slide" list="goto-datalist">
    <datalist id="goto-datalist"></datalist>
    <input type="submit" value="Go">
</form>
</div>
<?php
include 'footer.php';
?>