<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
	<title>Customize</title>
	<link rel="stylesheet" type="text/css" href="{{asset('assets-web/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets-web/css/font-awesome.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets-web/css/styles.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets-web/css/swiper.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets-web/css/datepicker.css')}}">
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
</head>
<body>

	<nav class="">
		<div class="container d-flex justify-content-between align-items-center flex-wrap container-header">
			<a href="">
				<img src="assets-web/img/logo.png" class="nav-logo">
			</a>
			<button class="btn btn-nav d-block d-xl-none">
				<i class="fas fa-bars"></i>
			</button>
			<ul style="list-style: none;" class="lis-nav-abosulte d-xl-flex align-items-center flex-wrap px-0 ">
				<button class="btn btn-nav-close d-xl-none">
					<i class="fas fa-times"></i>
				</button>
				<li class="me-xl-5 nav-activo text-center text-xl-start mb-4 mb-sm-3 mb-md-4 mb-xl-0">
					<a href="" class="link-nav">INICIO</a>
					<div class="div-nav-linea"></div>
				</li>
				<li class="me-xl-5 nav-activo text-center text-xl-start mb-4 mb-sm-3 mb-md-4 mb-xl-0">
					<a href="" class="link-nav">DESTINOS</a>
					<div class="div-nav-linea"></div>
				</li>
				<li class="me-xl-5 nav-activo text-center text-xl-start mb-4 mb-sm-3 mb-md-4 mb-xl-0">
					<a href="" class="link-nav">TOURS</a>
					<div class="div-nav-linea"></div>
				</li>
				<li class="me-xl-5 nav-activo text-center text-xl-start mb-4 mb-sm-3 mb-md-4 mb-xl-0">
					<a href="" class="link-nav">TAILOR YOUR TRIP</a>
					<div class="div-nav-linea"></div>
				</li>
				<li class="me-xl-5 nav-activo text-center text-xl-start mb-4 mb-sm-3 mb-md-4 mb-xl-0">
					<a href="" class="link-nav">NOSTROS</a>
					<div class="div-nav-linea"></div>
				</li>
				<li class="me-xl-5 nav-activo text-center text-xl-start">
					<a href="" class="link-nav">CONTACTO</a>
					<div class="div-nav-linea"></div>
				</li>
				<li>
					<button class="btn px-0 btn-search-nav">
						<i class="fas fa-search"></i>
					</button>
				</li>
			</ul>
		</div>
	</nav>

	<section class="secc-slider-banner pb-0">
		<div class="container-fluid px-0">
			<div class="div-slider-banner div-secc-banner">
	    		<div class="div-absolute-banner">
	    			<h1 class="titulo-banner text-center w-100 px-2 px-sm-3 px-lg-0">BUILD YOUR TRIP</h1>
	    			<div class="div-linea-blanca mt-2"></div>
	    			<p class="p-medium-blanco-banner mt-2 w-100 text-center">One size not always fits</p>
	    		</div>
	    	</div>
		</div>
	</section>

	<section class="secc-top">
		<div class="container">
			<div class="row mx-0 justify-content-center">
				<div class="col-md-11 text-center">
					<p class="text-center p-medium-negro px-0">In 3 simple steps we can customize almost any trip to suit your preference. This is perfect if you would like to manage your time as you desire or if you simply want a different type of trip that fits in all of your dream destinations. Customized adventures include all benefits from Day Hikes Peru and an official guide where needed. If you would like any special arrangements or would like to experience Peru the way you always dreamed of, just let us know your preferences and we will do the rest.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="mt-3">
		<div class="container">
			<ul style="list-style: none;" class="d-flex justify-content-center ps-0">
				<li class="list-pagination pagination-active" id="unoactive">
					1
				</li>
				<li class="list-pagination pagination-lineas mx-5" id="dosactive">
					2
				</li>
				<li class="list-pagination" id="tresactive">
					3
				</li>
			</ul>

			<div class="mt-5 form-padding-left-right d-block" id="uno">
				<form>
					<p class="p-medium-negro px-0 text-center">Passenger detail</p>
					<div class="row mx-0 mt-3 justify-content-center">
						<div class="col-sm-6 px-1 mb-2">
							<div style="position: relative;">
								<i class="material-icons icon-select-date">person</i>
								<input type="text" name="First" placeholder="First name" class="input-email w-100 input-padding-left-right-reserva">
							</div>
						</div>
						<div class="col-sm-6 px-1 mb-2">
							<div style="position: relative;">
								<i class="material-icons icon-select-date">phone</i>
								<input type="number" name="Phone" placeholder="Phone number" class="input-email w-100 input-padding-left-right-reserva">
							</div>
						</div>
						<div class="col-sm-6 px-1 mb-2">
							<div style="position: relative;">
								<i class="material-icons icon-select-date">email</i>
								<input type="email" name="Email" placeholder="Email" class="input-email w-100 input-padding-left-right-reserva">
							</div>
						</div>
						<div class="col-sm-6 px-1 mb-2">
							<div class="custom-select w-100">
							  <select>
							    <option value="0">I am from</option>
							    <option value="1">Audi</option>
							    <option value="2">BMW</option>
							    <option value="3">Citroen</option>
							  </select>
							  <i class="material-icons icon-select-date">location_on</i>
							</div>
						</div>
						<div class="col-sm-4 px-1 mb-2">
							<div class="quantity">
								<i class="material-icons icon-select-date icon-person-number">person</i>
							  	<input type="number" value="0" placeholder="Number of adults">
							</div>
						</div>
						<div class="col-sm-4 px-1 mb-2">
							<div class="quantity">
								<i class="material-icons icon-select-date icon-person-number">person</i>
							  	<input type="number" value="0" placeholder="Number of adults">
							</div>
						</div>
						<div class="col-sm-4 px-1 mb-2">
							<div class="quantity">
								<i class="material-icons icon-select-date icon-person-number">person</i>
							  	<input type="number" value="0" placeholder="Number of adults">
							</div>
						</div>
						<div class="col-sm-7 text-center">
							<button type="button" class="btn btn-style-find btn-widht-abaout mt-5" id="btnuno">(1/3) Next <i class="fas fa-long-arrow-alt-right"></i></button>
						</div>
					</div>
				</form>
			</div>
			
			<div class="mt-5 form-padding-left-right d-none" id="dos">
				<form>
					<p class="p-medium-negro px-0 text-center">Trip details</p>
					<div class="row mx-0 mt-3 justify-content-center">
						<div class="col-sm-4 px-1 mb-2">
							<div class="custom-select w-100">
							  <select>
							    <option value="0">Where to?</option>
							    <option value="1">Audi</option>
							    <option value="2">BMW</option>
							    <option value="3">Citroen</option>
							  </select>
							  <i class="material-icons icon-select-date">location_on</i>
							</div>
						</div>
						<div class="col-sm-4 px-1 mb-2">
							<div class="wrapper w-100">
								<input type="text" id="datepicker" autocomplete="off" placeholder="Trip start date" class="input-date">	
								<i class="material-icons icon-select-date">today</i>
							</div>
						</div>
						<div class="col-sm-4 px-1 mb-2">
							<div class="wrapper w-100">
								<input type="text" id="datepicker" autocomplete="off" placeholder="Trip end date" class="input-date">	
								<i class="material-icons icon-select-date">today</i>
							</div>
						</div>
						<div class="col-12 px-1 mb-2">
							<div style="position: relative;">
								<i class="material-icons icon-select-date icon-left-cus">map</i>
								<input type="text" name="Any" placeholder="Any points of interest in particular?" class="input-email w-100 input-padding-left-right-reserva">
							</div>
						</div>
					</div>
				</form>
				<form class="mt-5">
					<p class="p-medium-negro px-0 text-center">Choose trip attributes</p>
					<div class="row mx-0 mt-4 justify-content-center">
						<div class="col-12 px-1 mb-4 text-center d-flex flex-wrap align-items-center justify-content-center">
							<input class="boxSexo" type="checkbox" name="sexo" value="Mujer" id="personaForm">
						    <label class="labelsex activo" for="personaForm">
						    	<img src="assets-web/img/Icon awesome-child@2x.png" id="imgperson">
						    </label>
						      
						    <input class="boxSexo" type="checkbox" name="sexo" value="Hombre" id="caminandoForm">
						    <label class="labelsex" for="caminandoForm">
						    	<img src="assets-web/img/Icon awesome-walking@2x.png" id="imgcorriendo">
						    </label>
						      
						    <input class="boxSexo" type="checkbox" name="sexo" value="Otros" id="chozaForm">
						    <label class="labelsex" for="chozaForm">
						    	<img src="assets-web/img/Imagen 6@2x.png" id="imgchoza">
						    </label> 

						    <input class="boxSexo" type="checkbox" name="sexo" value="Mujer" id="torreForm">
						    <label class="labelsex activo" for="torreForm">
						    	<img src="assets-web/img/Icon awesome-hotel@2x.png" id="imgtorre">
						    </label>
						      
						    <input class="boxSexo" type="checkbox" name="sexo" value="Hombre" id="caballoForm">
						    <label class="labelsex" for="caballoForm">
						    	<img src="assets-web/img/Icon awesome-horse@2x.png" id="imgcaballo">
						    </label>
						      
						    <input class="boxSexo" type="checkbox" name="sexo" value="Otros" id="calaberaForm">
						    <label class="labelsex" for="calaberaForm">
						    	<img src="assets-web/img/Imagen 7@2x.png" id="imgcalabera">
						    </label> 

						    <input class="boxSexo" type="checkbox" name="sexo" value="Mujer" id="mascarasForm">
						    <label class="labelsex activo" for="mascarasForm">
						    	<img src="assets-web/img/Imagen 8@2x.png" id="imgmascara">
						    </label>
						      
						    <input class="boxSexo" type="checkbox" name="sexo" value="Hombre" id="arbolForm">
						    <label class="labelsex" for="arbolForm">
						    	<img src="assets-web/img/Imagen 9@2x.png" id="imgarbol">
						    </label>
						       
						</div>
						<div class="col-12 px-1 mb-2">
							<div style="position: relative;">
								<i class="material-icons icon-select-date icon-left-cus">location_on</i>
								<input type="text" name="Any" placeholder="Any points of interest in particular?" class="input-email w-100 input-padding-left-right-reserva">
							</div>
						</div>
						<div class="col-sm-7 text-center">
							<button type="button" class="btn btn-style-find btn-widht-abaout mt-5" id="btndos">(2/3) Next <i class="fas fa-long-arrow-alt-right"></i></button>
						</div>
						<div class="col-12 text-center mt-4">
							<button type="button" class="btn btn-blanco-custo" id="btnregresouno">< Adjust selection</button>
						</div>
					</div>
				</form>
			</div>

			<div class="mt-5 form-padding-left-right d-none" id="tres">
				<form>
					<p class="p-medium-negro px-0 text-center">Choose trip style</p>
					<div class="row mx-0 mt-3 justify-content-center">
						<div class="col-sm-4 px-1 mb-2">
							<div class="custom-select w-100">
							  <select>
							    <option value="0">Level of service</option>
							    <option value="1">Audi</option>
							    <option value="2">BMW</option>
							    <option value="3">Citroen</option>
							  </select>
							  <i class="material-icons icon-select-date">star</i>
							</div>
						</div>
						<div class="col-sm-4 px-1 mb-2">
							<div class="wrapper mb-2 mb-sm-3 mb-lg-0 w-100">
								<input type="text" id="datepicker" autocomplete="off" placeholder="Any vegans?" class="input-date">	
								<i class="material-icons icon-select-date">today</i>
							</div>
						</div>
						<div class="col-sm-4 px-1 mb-2">
							<div class="custom-select w-100">
							  <select>
							    <option value="0">For how long?</option>
							    <option value="1">Audi</option>
							    <option value="2">BMW</option>
							    <option value="3">Citroen</option>
							  </select>
							  <i class="material-icons icon-select-date">watch_later</i>
							</div>
						</div>
						<div class="col-sm-4 px-1 mb-2">
							<div class="quantity">
								<p class="my-0 p-absolute">X1</p>
							  	<input type="number" value="0" placeholder="Simple rooms">
							</div>
						</div>
						<div class="col-sm-4 px-1 mb-2">
							<div class="quantity">
								<p class="my-0 p-absolute">X2</p>
							  	<input type="number" value="0" placeholder="Double rooms">
							</div>
						</div>
						<div class="col-sm-4 px-1 mb-2">
							<div class="quantity">
								<p class="my-0 p-absolute">X3</p>
							  	<input type="number" value="0" placeholder="Triple rooms">
							</div>
						</div>
						<div class="col-12 px-1 mb-2">
							<textarea class="input-tarea textarea-height-custo" placeholder="What can we help you with?"></textarea>
						</div>
						<div class="col-sm-7 text-center">
							<button type="button" class="btn btn-style-find btn-widht-abaout mt-5" id="btntres">(3/3) Next <i class="fas fa-long-arrow-alt-right"></i></button>
						</div>
						<div class="col-12 text-center mt-4">
							<button type="button" class="btn btn-blanco-custo" id="btnregresodos">< Adjust selection</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>

	<footer class="secc-top">
		<div class="div-seccion-footer">
			<div class="container py-5">
				<div class="row mx-0 align-items-center">
					<div class="col-sm-6 col-md-4 text-center text-sm-start">
						<img src="assets-web/img/logo.png" class="img-logo-footer">
					</div>
					<div class="col-sm-6 col-md-5 text-center text-sm-start mt-4 mt-sm-0">
						<p class="p-medium-negro px-0 mb-2">In alliance with</p>
						<ul style="list-style: none;" class="d-flex ps-0">
							<li>
								<img src="assets-web/img/kayak.png" class="kayakimg">
							</li>
						</ul>
					</div>
					<div class="col-sm-6 col-md-4 text-center text-sm-start">
						<p class="p-footer-regular p-descrip-footer mt-3">
							Experience Peru just the way you’ve always wanted, with specially designed tours that allow you to immerse yourself in the living culture and enrich your experience by focusing on the uniqueness of each destination. Explore your adventurous side as you visit Cusco, known as “The Imperial City”, learn about textile traditions first-hand from a community of weavers, hike through fortresses built with 100 ton boulders, visit granite temples, explore forests, and travel back in time as you wander through ancient Inca trails. See the best of Peru from the comfort of a hotel or a well-organized camp site.
						</p>
						<ul style="list-style: none;" class="d-flex ps-0 align-items-center justify-content-center justify-content-sm-start">
							<li class="me-3 text-center">
								<a href="">
									<i class="fab fa-facebook icon-redes-footer"></i>
								</a>
							</li>
							<li class="text-center">
								<a href="">
									<i class="fab fa-youtube icon-redes-footer"></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-sm-6 col-md-5 text-center text-sm-start">
						<ul style="list-style: none;" class="ps-0">
							<li class="p-footer-regular mb-2">Urb. Kennedy “A” G-7 Calle Topacio Wanchaq Cusco-Peru</li>
							<li class="p-footer-regular mb-2">051 184 24 1705 - 011 51 969 738 146</li>
							<li class="p-footer-regular mb-2">011 - 51 - 800668 6165</li>
							<li class="p-footer-regular">info@dayhikesperu.com</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="div-blanco-footer py-3">
			<div class="container">
				<div class="row mx-0 align-items-center justify-content-center">
					<div class="col-md-6 text-center text-xl-start">
						<p class="p-medium-negro px-0 my-0">Todos los derechos reservados. Day Hikes Peru 2021.</p>
					</div>
					<div class="col-sm-6 col-md-3 mt-4 mt-sm-3 mt-md-0">
						<p class="p-medium-negro px-0 my-0 text-center text-sm-end text-md-center">Terms and conditions</p>
					</div>
					<div class="col-sm-6 col-md-3 text-center text-sm-start text-md-end mt-4 mt-sm-3 mt-md-0">
						<p class="p-medium-negro px-0 my-0">Designed by</p>
					</div>
				</div>
			</div>
		</div>
	</footer>

<script src="{{asset('assets-web/js/jquery.min.js')}}"></script>
<script src="{{asset('assets-web/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets-web/js/font-awesome.js')}}"></script>
<script src="{{asset('assets-web/js/swiper.js')}}"></script>
<script src="{{asset('assets-web/js/datepicker.js')}}"></script>
<script>
	var x, i, j, l, ll, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement("DIV");
    c.setAttribute("class", "div-options");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /* When an item is clicked, update the original select box,
        and the selected item: */
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].setAttribute("class", "div-options");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener("click", closeAllSelect);
</script>
<script>
	 jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up"><i class="material-icons">expand_less</i></div><div class="quantity-button quantity-down"><i class="material-icons">expand_more</i></div></div>').insertAfter('.quantity input');
    jQuery('.quantity').each(function() {
      var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');

      btnUp.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

      btnDown.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

    });
</script>
<script>
	$( document ).ready(function() {
        $("#btnuno").click(function()
        {
        	$('#uno').removeClass("d-block");
        	$('#uno').addClass("d-none");
        	$('#dos').removeClass("d-none");
        	$('#uno').addClass("d-block");
        	$('#unoactive').removeClass("pagination-active");
        	$('#dosactive').addClass("pagination-active");
        });
        $("#btndos").click(function()
        {
        	$('#dos').removeClass("d-block");
        	$('#dos').addClass("d-none");
        	$('#tres').removeClass("d-none");
        	$('#tres').addClass("d-block");
        	$('#dosactive').removeClass("pagination-active");
        	$('#tresactive').addClass("pagination-active");
        });
        $("#btnregresouno").click(function()
        {
        	$('#dos').removeClass("d-block");
        	$('#dos').addClass("d-none");
        	$('#uno').removeClass("d-none");
        	$('#uno').addClass("d-block");
        	$('#dosactive').removeClass("pagination-active");
        	$('#unoactive').addClass("pagination-active");
        });
        $("#btnregresodos").click(function()
        {
        	$('#tres').removeClass("d-block");
        	$('#tres').addClass("d-none");
        	$('#dos').removeClass("d-none");
        	$('#dos').addClass("d-block");
        	$('#tresactive').removeClass("pagination-active");
        	$('#dosactive').addClass("pagination-active");
        });

    });
</script>
<script>
	$( document ).ready(function() {
        $(".btn-nav").click(function()
        {
        	$(".lis-nav-abosulte").slideDown("slow");
        });
         $(".btn-nav-close").click(function()
        {
        	$(".lis-nav-abosulte").slideUp("slow");
        });
    });
</script>
</body>
</html>