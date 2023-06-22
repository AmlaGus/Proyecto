$(document).ready(function(e) {
	var mozillaPresente = false,
	    mozilla = (function detectarNavegador(navegador) {
		if(navegador.indexOf("Firefox") != -1 ) {
			mozillaPresente = true;
		}	
	})(navigator.userAgent);
	function darEfecto(efecto) {
		el = $('.cajainterna');
		el.addClass(efecto);
		el.one('webkitAnimationEnd oanimationend msAnimationEnd animationend',
		function (e) {
			el.removeClass(efecto);
		});
	}
	function mostrar(e) {
		$(".cajaexterna").show();
		darEfecto("bounceIn");      
	}
	function ocultar() {
		$(".cajaexterna").fadeOut("fast", function() {
			if(mozillaPresente) {
			setTimeout(function() {
				$(".cajainterna").removeClass("bounceIn");
			}, 5);
		}
		});			
	}
	
	function mostrar2(e) {
		$(".cajaexterna2").show();
		darEfecto("bounceIn");      
	}
	function ocultar2() {
		$(".cajaexterna2").fadeOut("fast", function() {
			if(mozillaPresente) {
			setTimeout(function() {
				$(".cajainterna").removeClass("bounceIn");
			}, 5);
		}
		});			
	}
	function mostrar3(e) {
		$(".cajaexterna3").show();
		darEfecto("bounceIn");      
	}
	function ocultar3() {
		$(".cajaexterna3").fadeOut("fast", function() {
			if(mozillaPresente) {
			setTimeout(function() {
				$(".cajainterna").removeClass("bounceIn");
			}, 5);
		}
		});			
	}
	function mostrar4(e) {
		$(".cajaexterna4").show();
		darEfecto("bounceIn");      
	}
	function ocultar4() {
		$(".cajaexterna4").fadeOut("fast", function() {
			if(mozillaPresente) {
			setTimeout(function() {
				$(".cajainterna").removeClass("bounceIn");
			}, 5);
		}
		});			
	}
	function mostrar5(e) {
		$(".cajaexterna5").show();
		darEfecto("bounceIn");      
	}
	function ocultar5() {
		$(".cajaexterna5").fadeOut("fast", function() {
			if(mozillaPresente) {
			setTimeout(function() {
				$(".cajainterna").removeClass("bounceIn");
			}, 5);
		}
		});			
	}
	function mostrar6(e) {
		$(".cajaexterna6").show();
		darEfecto("bounceIn");      
	}
	function ocultar6() {
		$(".cajaexterna6").fadeOut("fast", function() {
			if(mozillaPresente) {
			setTimeout(function() {
				$(".cajainterna").removeClass("bounceIn");
			}, 5);
		}
		});			
	}
	function mostrar7(e) {
		$(".cajaexterna7").show();
		darEfecto("bounceIn");      
	}
	function ocultar7() {
		$(".cajaexterna7").fadeOut("fast", function() {
			if(mozillaPresente) {
			setTimeout(function() {
				$(".cajainterna").removeClass("bounceIn");
			}, 5);
		}
		});			
	}
	function mostrar8(e) {
		$(".cajaexterna8").show();
		darEfecto("bounceIn");      
	}
	function ocultar8() {
		$(".cajaexterna8").fadeOut("fast", function() {
			if(mozillaPresente) {
			setTimeout(function() {
				$(".cajainterna").removeClass("bounceIn");
			}, 5);
		}
		});			
	}
	
	
	
	function mostrar9(e) {
		$(".cajaexterna9").show();
		darEfecto("bounceIn");      
	}
	function ocultar9() {
		$(".cajaexterna9").fadeOut("fast", function() {
			if(mozillaPresente) {
			setTimeout(function() {
				$(".cajainterna").removeClass("bounceIn");
			}, 5);
		}
		});			
	}
	
	
	
	
	$("a.mostrarmodal").click(mostrar);
	$("a.cerrarmodal").click(ocultar);
	$("a.mostrarmodal2").click(mostrar2);
	$("a.cerrarmodal2").click(ocultar2);
	$("a.mostrarmodal3").click(mostrar3);
	$("a.cerrarmodal3").click(ocultar3);
	$("a.mostrarmodal4").click(mostrar4);
	$("a.cerrarmodal4").click(ocultar4);
	$("a.mostrarmodal5").click(mostrar5);
	$("a.cerrarmodal5").click(ocultar5);
	$("a.mostrarmodal6").click(mostrar6);
	$("a.cerrarmodal6").click(ocultar6);
	$("a.mostrarmodal7").click(mostrar7);
	$("a.cerrarmodal7").click(ocultar7);
	$("a.mostrarmodal8").click(mostrar8);
	$("a.cerrarmodal8").click(ocultar8);
	$("a.mostrarmodal9").click(mostrar9);
	$("a.cerrarmodal9").click(ocultar9);
});