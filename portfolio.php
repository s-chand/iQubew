<?php
include 'header.php';
?>
<div class="deck-container">

<!-- Begin slides. Just make elements with a class of slide. -->

<section class="slide">
    <h2>All iQube's offering</h2>
    <div class="activeSlide">
    	<div class="container">
                                        
                    <div class="colleague"><span>Services</span><br/>
                        Services are innovations proprietary to and owned by iQube. They are ideas we birth, design, implement,
                        launch and manage. Services involve applications and transfer of the knowledge learnt from research in several
                        fields of study which we translate into tangible software or systems that can solve common problems
                    </div>
                    <div class="colleague"><span>Products</span></br>
                        Products are software developed from an adaptation of already existing technology or framework that is 
                        customized and packaged for a partner. These partners buy these software that has been specifically tuned
                         to suit their needs.
                    </div>
                    <div class="colleague"><span>Solutions</span></br>
                        Solutions are bespoke / customized software for clients. 
                        Solutions come in form of requirements specifications by 
                        the clients and we find the best way to solve the client's need based on these requirements.
                    </div>
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