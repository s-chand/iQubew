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

                       <article>

                       </article>

                    </div>
                    <div class="colleague"><span>Products</span></br>
                       
                    </div>
                    <div class="colleague"><span>Solutions</span></br>
                       
                    </div>
                </div>
    </div>
</section>

<section class="slide">
	<div class="span12" style="font-size:small">
    <h2>Services</h2>
     <article class="span4 offset1" style="float:left">
                        <h2>P2MU</h2>
                        P2MU is a recommendation-based social network app.It connects you &amp; people you are looking for but don't know. It's a 
recommendation-based social network app that helps you find and connect with new persons of interest to you.
 
                       </article>
                       <article class="span4 offset1" style="float:left">
                        <h2>MMe</h2>
                        MMe is a career self-discovery test that helps users discover their personality type, area of strength and their best possible career 
path/jobs in the Nigerian Industry. 
                       </article>
                       <article class="span4 offset1" style="float:left">
                        <h2>P2FX</h2>
                       P2FX is a location-based app used to find POIs & shows their location relative to users location & preferences. P2FX means
Pleased To Find 'X'. Where 'X' is any geo-tagged item/service or POI (Point of Interest).
                       </article>
                       <br/>
                       <article class="span4 offset1" style="float:left">
                        <h2>V2Pix</h2>
                        V2Pix is a software that extract random pictures from a video file. It allows users the opportunity to upload a video and generate a
desired number of pictures and their format from the video. V2Pix 
                       </article>
                       <article class="span4 offset2" style="float:left">
                        <h2>SDP</h2>
                        SDP employs a coaching based training / learning style to help and guide her users in learning a world class relevant technology
skill in just 3 months. SDP is a community of knowledge-driven professionals in the IT industry who are willing and able to learn skills
relevant to our society and their personal career goals and aspirations. 
                       </article>
                        <article class="span4 offset2" style="float:left">
                        <h2>Long Codes</h2>
                       LongCode is a cost effective way of interacting with your target audience via short message service using the popular Longcodes 
                       </article>
                      </div>
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
</div>
<?php
include 'footer.php';
?>