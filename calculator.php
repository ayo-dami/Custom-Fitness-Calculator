<?php /* Template Name: CustomPageT1 */
get_header(); ?>
	<?php do_action( 'ocean_before_content_wrap' ); ?>
	<div id="content-wrap" class="container clr">
		<?php do_action( 'ocean_before_primary' ); ?>
		<div id="primary" class="content-area clr">
			<?php do_action( 'ocean_before_content' ); ?>
			<div id="content" class="site-content clr">
				<?php do_action( 'ocean_before_content_inner' ); ?>
				<?php
				// Elementor `single` location
				if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) ) {

					// Start loop
					while ( have_posts() ) : the_post();
						get_template_part( 'partials/page/layout' );
					endwhile;
				} ?>
				<HTML>

<body>
<style>
    
input {
  width: 100%;
}
form input[type="number"] {
    max-width: 100%;
    padding: 0 0 0 8px;
    text-align:center;
}
form select {
    text-align-last:center;
}
</style>
    <!------------
    -            -
    - first part -
    -            -
    ------------->
<div style="background-colour:#fff; margin-top:10px; padding:5px 5px; Z-Index:1;"/>

      <div id="container">
    </div>
      <div>
        <div style="width:49%; padding:20px 20px; float:left; text-align:center; margin-right:1%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
          <form style="width:100%;" id="womanBMR" action="">
            <fieldset>
                <legend> <h3 style="text-align:center; color:#c01a1a;"><b>Calculate your BMR (Female)</b></h3>
	            </legend>
	            <p>
		            <label for="womanWeight">Weight (kg) </label>
		            <input id="womanWeight"  name="womanWeight" type="number" placeholder=""/>
	            </p>
	            <p>
		            <label for="womanHeight">Height (cm) </label>
		            <input id="womanHeight" name="womanHeight" type="number" placeholder=""/>
	            </p>
	            <p>
		            <label for="womanAge">Ages (years) </label>
		            <input id="womanAge" name="womanAge" type="number" placeholder=""/>
	            </p>
	            <p>
	                <label for="womanActivityRate">Activity Rate</label>
    	            <select id="mySelect">
                      <option value="1.2">No Exercise</option>
                      <option value="1.4">Lightly Active</option>
                      <option value="1.6">Moderately Active</option>
                      <option value="1.8">Very Active</option>
                      <option value="2.2">Extremely Active</option>
                    </select>
	            </p>
	            <p>
		            <input type="submit" value="Calculate BMR" />
		            or
		            <input type="reset" value="Reset" />
	            </p>
	            <p>
		            <label for="result">Result</label>
		            <input id="result" name="result"/>
	            </p>
             </fieldset>
            </form>
    
        </div>
        

        <div style="width:49%; padding:20px 20px; float:left; text-align:center; margin-left:1%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <form style="width:100%;" id="manBMR" action="">
           <fieldset>
	           <legend> <h3 style="text-align:center; color:#c01a1a;"><b>Calculate your BMR (Male)</b></h3>
	            </legend>
	          <p>
		          <label for="manWeight">Weight (kg) </label>
		          <input id="manWeight" name="manWeight" type="number" placeholder=""/>
	          </p>
	          <p>
		          <label for="manHeight">Height (cm) </label>
		          <input id="manHeight" name="manHeight" type="number" placeholder=""/>
	          </p>
	          <p>
		          <label for="manAge">Ages (years) </label>
		          <input id="manAge" name="manAge" type="number" placeholder="" />
	          </p>
	        <p>
	            <label for="manActivityRate">Activity Rate</label>
	            <select id="mySelect">
                  <option value="1.2">No Exercise</option>
                  <option value="1.4">Lightly Active</option>
                  <option value="1.6">Moderately Active</option>
                  <option value="1.8">Very Active</option>
                  <option value="2.2">Extremely Active</option>
                </select> 
            </p>
            <p>
		        <input type="submit" value="Calculate BMR" />
		        or
		        <input type="reset" value="Reset" />
	        </p>
	        <p>
		        <label for="result">Result</label>
		        <input id="result" name="result"/>
	        </p>
        </fieldset>
        </form> 
         
        </div>
    </div>
    <div style="width:50%; padding:20px 20px; float:left; text-align:center;" >
    <form id="calculateMacros" action="">
        <fieldset>
	       <p>
	         <label for="proteins">Proteins (gr)</label>
	          <input id="proteins" name="proteins" type="number" placeholder=""/>
	           </p>
	           <p>
	            <label for="carbs">Carbs (gr)</label>
	            <input id="carbs" name="carbs" type="number" placeholder=""/>
	           </p>
	           <p>
	            <label for="fats">Fats (gr)</label>
	            <input id="fats" name="fats" type="number" placeholder=""/>
	           </p>
	           <p>
	            <input type="submit" value="Calculate Macros" />
	            or
	            <input type="reset" value="Reset" />
	           </p>
	           <p>
	            <label for="result">Result (kCal)</label>
	            <input id="result" name="result"/>
	           </p>
         </fieldset>
        </form>

    </div>
    <div style="width:50%; padding:20px 20px; float:left; text-align:center;" >
    <form id="calculateMacros" action="">
        <fieldset>
	       <p>
	         <label for="proteins">Proteins (gr)</label>
	          <input id="proteins" name="proteins" type="number" placeholder=""/>
	           </p>
	           <p>
	            <label for="carbs">Carbs (gr)</label>
	            <input id="carbs" name="carbs" type="number" placeholder=""/>
	           </p>
	           <p>
	            <label for="fats">Fats (gr)</label>
	            <input id="fats" name="fats" type="number" placeholder=""/>
	           </p>
	           <p>
	            <input type="submit" value="Calculate Macros" />
	            or
	            <input type="reset" value="Reset" />
	           </p>
	           <p>
	            <label for="result">Result (kCal)</label>
	            <input id="result" name="result"/>
	           </p>
         </fieldset>
        </form>

    </div>
    <!-- end: row 2-->

    <!-- end of part 1 -->


    <!-------------
    -             -
    - second part -
    -             -
    -------------->
      <div class="row part2 paddingTopBottom60px" id="Activity">
        <h3>Activity Factor</h3>
        <p>The activity factor takes into account everything you do in a day not just training. After you find your BMR use one of these multipliers to find the amount of calories you need to stay at the same weight (maintenance calories).
<br><br>
Be honest with yourself here…this is where most people mess this process up.</p>
      </div> <!-- end: row 3-->


      <div class="row part2">
        <h3>Activity Factor Multiplier</h3>

        <div class="row"> <!-- row inside row 1/3 -->
          <div class="col-xs-4">

            <!-- code for flip-container -->
            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
	            <div class="flipper">
		            <div class="front">
			          <!-- front content -->

		            </div> <!-- end: class front-->
		            <div class="back">
			          <!-- back content  -->
                  <p class="backSide30pxDown">Eat healthy snacks!</p>

		            </div> <!-- end: class back -->
		          </div> <!-- end: class flipper-->
	          </div> <!-- end: class flip-container-->

          </div>
          <div class="col-xs-4 paddingTop3columnsForCol-xs-4">
           <h4>BMR x 1.2</h4>
           <h5>Sedentary</h5><p>You don’t move much. No exercise, desk job, lots of TV. I bet you don't like gym, but you like donuts and cakes!</p>
          </div>
          <div class="col-xs-4">
           <!-- code for flip-container -->
            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
	            <div class="flipper">
		            <div class="front">
			          <!-- front content -->

		            </div> <!-- end: class front-->
		            <div class="back">
			          <!-- back content  -->
                  <p class="backSide30pxDown">Eat fish instead of pizza!</p>

		            </div> <!-- end: class back -->
		          </div> <!-- end: class flipper-->
	          </div> <!-- end: class flip-container-->
          </div>
        </div><!-- end row inside row 1/3-->
        <div class="row"> <!-- row inside row 2/3 -->
          <div class="col-xs-4 paddingTop3columnsForCol-xs-4">
            <h4>BMR x 1.3-1.4</h4>
            <h5>Lightly Active</h5> <p>Active a few days a week, exercise 1-3 days</p>
          </div>
          <div class="col-xs-4 paddingTop3columnsForCol-xs-4">
            <h4>BMR x 1.5-1.6</h4>
            <h5>Moderately Active </h5><p> Where I would assume most people are at. Train 4-5 days a week and active lifestyle</p>
          </div>
          <div class="col-xs-4 paddingTop3columnsForCol-xs-4">
           <h4>BMR x 1.7-1.8</h4>
           <h5>Very Active </h5> <p>Training hard for a specific sport or purpose 5-6 hours a week. Typically one with a hard labor job as well</p>
          </div>
        </div> <!-- end row inside row 2/3-->
        <div class="row paddingBottom40px"> <!-- row inside row 3/3 -->
          <div class="col-xs-4">
           <!-- code for flip-container -->
            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
	            <div class="flipper">
		            <div class="front">
			          <!-- front content -->
		            </div> <!-- end: class front-->
		            <div class="back">
			          <!-- back content  -->
                  <p class="backSide30pxDown">Keep eating healthy!</p>

		            </div> <!-- end: class back -->
		          </div> <!-- end: class flipper-->
	          </div> <!-- end: class flip-container-->
          </div>
          <div class="col-xs-4 paddingTop3columnsForCol-xs-4">
           <h4>BMR x 1.9-2.2</h4>
           <h5>Extremely Active </h5><p>Endurance training or hard charging athlete who spends 10 or more hours training a week and/or lots of activity outside of training. Can require more calories than this as well depending on ones metabolic capacity</p>
          </div>
          <div class="col-xs-4">
           <!-- code for flip-container -->
            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
	            <div class="flipper">
		            <div class="front">
			          <!-- front content -->

		            </div> <!-- end: class front-->
		            <div class="back">
			          <!-- back content  -->
                  <p class="backSide30pxDown">Yeah, more healty foods!</p>

		            </div> <!-- end: class back -->
		          </div> <!-- end: class flipper-->
	          </div> <!-- end: class flip-container-->
          </div>
         </div> <!-- end row inside row 3/3-->
      </div> <!-- end: rows -->
    <!-- end of activity factor multiplier -->
    <!-- end of part 2 -->
    <!------------
    -            -
    - third part -
    -            -
    ------------->
      <div class="row part3 paddingTopBottom60px" id="Macros">
        <h3>Next Step</h3>
        <p>This is where you need to decide if your goal is to gain or lose weight. As we all know to gain weight you need to be in a caloric surplus and to lose weight you need to be in a deficit. I’m not going to tell you exactly how many calories to add/subtract to gain or lose because it will be different for everyone. What I will say is that in both cases start small and go from there. Take your estimated maintenance calorie intake and adjust that number a little bit and see how you look, feel, and perform, and go from there.</p>
      </div> <!-- end: row 5 -->

      <div class="row part3 paddingBottom40px">
        <h3>Macros to Calories calculator</h3>
        <div class="col-xs-6">
          <h3>Macronutrients</h3>
          <h5>Macronutrients are what make up your calorie intake.</h5>
          <p>
            Protein – 4kcal/g <br>
            Carbohydrate – 4kcal/g <br>
            Fat – 9kcal/g <br>
          </p>
          <p>
            Total Calorie Goal – (Protein intake + Minimum Fat Requirement) = Calories left over for carb and fat intake.
          </p>
         </div>
         <div class="col-xs-6">
           <h3>calculator</h3>
           <!-- calculator -->
           
           <!-- end of calculator -->
         </div>
         </div>
      </div> <!-- end: row 6 -->
    <script>
                /* Calculate MAN BMR */
        (function () {
        	function calculatemanBMR(manWeight, manHeight, manAge) {
        		manWeight = parseFloat(manWeight);
        		manHeight = parseFloat(manHeight);
        		manAge = parseFloat(manAge);
        		activityFactory 
        		return ((manWeight * 10) + (manHeight * 6.25) - (manAge *5) + 5);
        	}
        
        	var manBMR = document.getElementById("manBMR");
        	if (manBMR) {
        		manBMR.onsubmit = function () {
        			this.result.value = calculatemanBMR(this.manWeight.value, this.manHeight.value, this.manAge.value);
        			return false;
        		};
        	}
        }());
        
        
        
        /* Calculate Woman BMR */
        (function () {
        	function calculatewomanBMR(womanWeight, womanHeight, womanAge) {
        		womanWeight = parseFloat(womanWeight);
        		womanHeight = parseFloat(womanHeight);
        		womanAge = parseFloat(womanAge);
        		
        		return ((womanWeight * 10) + (womanHeight * 6.25) - (womanAge *5) - 161);
        	}
        
        	var womanBMR = document.getElementById("womanBMR");
        	if (womanBMR) {
        		womanBMR.onsubmit = function () {
        			this.result.value = calculatewomanBMR(this.womanWeight.value, this.womanHeight.value, this.womanAge.value);
        			return false;
        		};
        	}
        }());
        
        /* Macros to calories calculator */
        (function () {
        	function MacrosToCalories(proteins, carbs, fats) {
        		proteins = parseFloat(proteins);
        		carbs = parseFloat(carbs);
        		fats = parseFloat(fats);
        		
        		return ((proteins * 4) + (carbs * 4) + (fats * 9));
        	}
        
        	var calculateMacros = document.getElementById("calculateMacros");
        	if (calculateMacros) {
        		calculateMacros.onsubmit = function () {
        			this.result.value = MacrosToCalories(this.proteins.value, this.carbs.value, this.fats.value);
        			return false;
        		};
        	}
        }());
        
    </script>
    <!-- for footer -->
</body>
</HTML>
				<?php do_action( 'ocean_after_content_inner' ); ?>
			</div><!-- #content -->
			<?php do_action( 'ocean_after_content' ); ?>
		</div><!-- #primary -->
		<?php do_action( 'ocean_after_primary' ); ?>
	</div><!-- #content-wrap -->
	<?php do_action( 'ocean_after_content_wrap' ); ?>
<?php get_footer(); ?>