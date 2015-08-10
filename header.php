<?php if( is_front_page() ) : ?>
	<div id="slideshowBox" class="">
  <?php $totalslides = 5; ?>
    <div class="buttonGroup hidden"><!-- Controls which were hidden for the final version of the slideshow-->
      <a href="#" id="singleButton_1" class="slideTab hidden" onclick="showSingle();">show single photo</a>
      <a href="#" id="showAllButton_1" class="slideTab" onclick="showAll();">show all</a>
      <a href="#" class="slideTab" onclick="next(1);">next</a>
      <a href="#" class="slideTab" onclick="next(0);">previous</a>
      <a href="#" id="slideTab1" class="slideTab hidden" onclick="next(1);">1 / <?=$totalslides ?></a>
      <a href="#" id="slideTab2" class="slideTab hidden" onclick="next(1);">2 / <?=$totalslides ?></a>
      <a href="#" id="slideTab3" class="slideTab hidden" onclick="next(1);">3 / <?=$totalslides ?></a>
      <a href="#" id="slideTab4" class="slideTab hidden" onclick="next(1);">4 / <?=$totalslides ?></a>
      <a href="#" id="slideTab5" class="slideTab hidden" onclick="next(1);">5 / <?=$totalslides ?></a>
      <a href="#" id="slideTab6" class="slideTab hidden" onclick="next(1);">6 / <?=$totalslides ?></a>
      <a href="#" id="slideTab7" class="slideTab hidden" onclick="next(1);">7 / <?=$totalslides ?></a>
      <a href="#" id="slideTab8" class="slideTab hidden" onclick="next(1);">8 / <?=$totalslides ?></a>
      <a href="#" id="slideTab9" class="slideTab hidden" onclick="next(1);">9 / <?=$totalslides ?></a>
      <a href="#" id="slideTab10" class="slideTab hidden" onclick="next(1);">10 / <?=$totalslides ?></a>
      <a href="#" id="slideTab11" class="slideTab hidden" onclick="next(1);">11 / <?=$totalslides ?></a>
      <a href="#" id="slideTab12" class="slideTab hidden" onclick="next(1);">12 / <?=$totalslides ?></a>
			<a href="#" id="slideTab13" class="slideTab hidden" onclick="next(1);">13 / <?=$totalslides ?></a>
		</div>
    <div class="slideshowWindow" id="slideshowWindow_1">
      <div class="slideshowTape" id="slideshowTape_1">
        <!--- PUT NOTES ABOUT SLIDE WIDTH AND HEIGHT HERE
        slide width:600px, now 400px, now 320px
        slide height:400px, now 266px, now 200px
        number of slides:<?=$totalslides ?>
        --->


                            <div class="slide">
                                <h1><img src="http://website.com/wp-content/uploads/textblock31.jpg" width='320' alt='slide1' /></h1>
                            </div>
                            <div class="slide">
                                <h1><img src="http://website.com/wp-content/uploads/IMGP0102-300x198.jpg" width='320' alt='slide2' /></h1>
                            </div>
                            <div class="slide">
                                <h1><img src="http://website.com/wp-content/uploads/IMGP0076-300x200.jpg" width='320' alt='slide3' /></h1>
                            </div>
                            <div class="slide">
                                <h1><img src="http://website.com/wp-content/uploads/textblock41.jpg" width='320' alt='slide4' /></h1>
                            </div>
                            <div class="slide">
                                <h1><img src="http://website.com/wp-content/uploads/IMGP0169-300x198.jpg" width='320' alt='slide5' /></h1>
                            </div>
                            <div class="slide">
                                <h1><img src="http://website.com/wp-content/uploads/photo-41-e13794218175141-300x187.jpg" width='320' alt='slide6' /></h1>
                            </div>
                            <div class="slide">
                                <h1><img src="http://website.com/wp-content/uploads/DSC_5214-300x200.jpg" width='320' alt='slide7' /></h1>
                            </div>
                            <div class="slide">
                                <h1><img src="http://website.com/wp-content/uploads/textblock31.jpg" width='320' alt='slide8' /></h1>
                            </div>
                            <div class="slide">
                                <h1><img src="http://website.com/wp-content/uploads/2alaptops1-300x187.jpg" width='320' alt='slide9' /></h1>
                            </div>
                            <div class="slide">
                                <h1><img src="http://website.com/wp-content/uploads/IMGP0190-300x198.jpg" width='320' alt='slide10' /></h1>
                            </div>
                            <div class="slide">
                                <h1><img src="http://website.com/wp-content/uploads/IMGP45141-300x199.jpg" width='320' alt='slide11' /></h1>
                            </div>
                            <div class="slide">
                                <h1><img src="http://website.com/wp-content/uploads/textblock41.jpg" width='320' alt='slide12' /></h1>
                            </div>
                            <div class="slide">
                                <h1><img src="http://website.com/wp-content/uploads/IMGP0134-300x198.jpg" width='320' alt='slide13' /></h1>
                            </div>
                            <div class="slide">
                                <h1><img src="http://website.com/wp-content/uploads/walkerkindergarten3c.jpg" width='320' alt='slide14' /></h1>
                            </div>
                            <div class="slide">
                                <h1><img src="http://website.com/wp-content/uploads/IMGP0162-300x198.jpg" width='320' alt='slide15' /></h1>
                            </div>
                            <div class="slide">
                                <h1><img src="http://website.com/wp-content/uploads/textblock31.jpg" width='320' alt='slide1' /></h1>
                            </div>
                            <div class="slide">
                                <h1><img src="http://website.com/wp-content/uploads/IMGP0102-300x198.jpg" width='320' alt='slide2' /></h1>
                            </div>
                            <div class="slide">
                                <h1><img src="http://website.com/wp-content/uploads/IMGP0076-300x200.jpg"  width='320' alt='slide3' /></h1>
                            </div>
                            <div class="slide">
                                <h1><img src="http://website.com/wp-content/uploads/textblock41.jpg" width='320' alt='slide4' /></h1>
                            </div>
                        </div>
                		</div>
                </div>
<script>

var total = <?php echo $totalslides ?>;
var currentSlide = 1;
var pause = 0;

function goto(slideID) {
	if (slideID==total+2){// When it reaches the end of the tape, rewind instantaniously
		document.getElementById("slideshowTape_1").className = "slideshowTape speedZero";
		document.getElementById("slideshowTape_1").style.left = "0px";
		currentSlide = 2;
		setTimeout("goto(2)", 5);
	}
	else{
		document.getElementById("slideshowTape_1").className = "slideshowTape speedTwo";
		document.getElementById("slideshowTape_1").style.left = ((slideID - 1) * -960) + "px";// Advance the tape
		var count;
		for(count=1; count<=total; count++) {// Hide all the slideTabs
			document.getElementById("slideTab"+count).className = "slideTab hidden";// Hide all the slideTabs
		}
		document.getElementById("slideTab"+slideID).className = "slideTab";// Show the current slideTab
		currentSlide = slideID;
	}
}
function ran() {// This function was not used in this version of the slideshow
	randomNumber=currentSlide+1;
	goto(randomNumber);
	setTimeout("ran()", 11000/* 11 seconds */);
}
setTimeout("ran()", 11000/* 11 seconds */);
</script>
<?php endif;?>
