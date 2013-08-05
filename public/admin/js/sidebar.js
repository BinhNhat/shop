$(document).ready(

	function(){
  		$(".item-side-nav").click(
  			function(){
  				//$(this).hide();
  				$("#out-put").text("----------- "+$(this).children('.sub-side-nav').children('li').length)  ;

          $(this).children('.sub-side-nav').slideDown(400);
          $(this).siblings().children('.sub-side-nav').slideUp(300);
  			}
  		);
      $(".item-sub-side-nav").click(
        function(){
          //$(this).hide();
          $("#out-put").text("-------tưetw---- "+$(this).children('.sub-side-nav').children('li').length)  ;         
        }
      );
	}
);