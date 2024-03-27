	
	<div class="container_full" style="background: black;"> 
		<div class="container"> 
			<div class="row">
				
				<div id="footer"> 
					<p>নির্বাহক : রেজাউল ইসলাম হাসু</p>
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="container_full"style="background: #363636"> 
		<div class="container"> 
			<div class="row">
				
				<div class="col-lg-8 col-md-8 col-xs-12 cl8"></div>
				<div id="footer"> 
				    <div class="col-lg-8 col-md-8 col-xs-12 cl8">
				        <p>দৌড়ঝাঁপ : <a href="mailto:belabhumi2020@gmail.com">belabhumi2020@gmail.com</a></p>
				    </div>
				    
				    <div class="col-lg-4 col-md-4 col-xs-12 cl8">
				        <div id="copy_right">
        			        <p style="color:red;font-family:georgia;font-size:19px;font-weight:bold">Design and Developed By</p>
        			        <p><a style="color:#47f60e;font-family:georgia;font-size:19px;font-weight:bold" href="https://resoftek.com/">Resoft Technology</a></p>
        			        <p style="color:red;font-family:georgia;font-size:18px;font-weight:bold">Visit: <a style="color:#fff" href="https://resoftek.com">www.resoftek.com</a></p>
        			        <p style="color:#fff;font-family:georgia;font-size:18px;font-weight:bold">Contact: 01720814510</p>
    			        </div>
				    </div>
					
				</div>
				
			</div>
		</div>
	</div>
	
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	<!--Filter top-->
    <script>
        filterSelection("movie")
        function filterSelection(c) {
          var x, i;
          x = document.getElementsByClassName("filterDiv");
          if (c == "all") c = "";
          for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
          }
        }
        
        function w3AddClass(element, name) {
          var i, arr1, arr2;
          arr1 = element.className.split(" ");
          arr2 = name.split(" ");
          for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
          }
        }
        
        function w3RemoveClass(element, name) {
          var i, arr1, arr2;
          arr1 = element.className.split(" ");
          arr2 = name.split(" ");
          for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
              arr1.splice(arr1.indexOf(arr2[i]), 1);     
            }
          }
          element.className = arr1.join(" ");
        }
        
        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("f_btn");
        for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function(){
            var current = document.getElementsByClassName("fil_act");
            current[0].className = current[0].className.replace("fil_act", "");
            this.className += " fil_act";
          });
        }
    </script>
	
	
	<!--Filter bottom-->
    <script>
        filterSelection2("movie2")
        function filterSelection2(a) {
          var x, y;
          x = document.getElementsByClassName("filter");
          if (a == "all") a = "";
          for (y = 0; y < x.length; y++) {
            w3RemoveClass(x[y], "show");
            if (x[y].className.indexOf(a) > -1) w3AddClass(x[y], "show");
          }
        }
        
        function w4AddClass(element2, name2) {
          var y, arry1, arry2;
          arry1 = element2.className.split(" ");
          arry2 = name.split(" ");
          for (y = 0; y < arry2.length; y++) {
            if (arry1.indexOf(arry2[y]) == -1) {element2.className += " " + arry2[y];}
          }
        }
        
        function w4RemoveClass(element2, name2) {
          var y, arry1, arry2;
          arry1 = element2.className.split(" ");
          arry2 = name.split(" ");
          for (y = 0; y < arry2.length; y++) {
            while (arry1.indexOf(arry2[y]) > -1) {
              arry1.splice(arry1.indexOf(arry2[i]), 1);     
            }
          }
          element2.className = arry1.join(" ");
        }
        
        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer2");
        var btns = btnContainer.getElementsByClassName("f_btn2");
        for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function(){
            var current = document.getElementsByClassName("fil_act2");
            current[0].className = current[0].className.replace("fil_act2", "");
            this.className += " fil_act2";
          });
        }
    </script>
	
	
	
	<script type="text/javascript">
		$(function(){
		  SyntaxHighlighter.all();
		});
		$(window).load(function(){
		  $('#carousel').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: true,
			itemWidth: 150,
			itemMargin: 5,
			asNavFor: '#slider'
		  });

		  $('#slider').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: true,
			slideshow: true,
			sync: "#carousel",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	
	<script type="text/javascript">
    $(window).load(function() {
        $('#slider2').nivoSlider();
    });
    </script>	
	<!--End nivo slider-->
	
	<!--Scroll show Menu-->
	
	<script>
	// When the user scrolls down 20px from the top of the document, slide down the navbar
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
		document.getElementById("navbar").style.top = "0";
	  } else {
		document.getElementById("navbar").style.top = "-67px";
	  }
	}
	</script>
	
	<!--Small Mobile Menu-->
	<script>
	function openNav() {
	  document.getElementById("mb_menu").style.width = "90%";
	}

	function closeNav() {
	  document.getElementById("mb_menu").style.width = "0";
	}
	</script>
	
	<!--Click Dropdown-->
	<script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        
        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
              panel.style.maxHeight = null;
            } else {
              panel.style.maxHeight = panel.scrollHeight + "px";
            } 
          });
        }
    </script>
	
	<!--Read more/less-->
	<script>
        function myFunction() {
          var dots = document.getElementById("dots");
          var moreText = document.getElementById("more");
          var btnText = document.getElementById("myBtn1");
        
          if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more"; 
            moreText.style.display = "none";
          } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less"; 
            moreText.style.display = "inline";
          }
        }
    </script>
	

	<?php wp_footer(); ?>
	
</body>
</html>