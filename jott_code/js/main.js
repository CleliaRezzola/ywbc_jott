$(document).ready(function(){

	$('.carousel').carousel();

	$('.phone_menu').on('click', function(e){
		e.preventDefault();
		$('.nav_mobile_link').slideToggle();
	});

	getImages();

	$('button').on('click', function(){
		$('.thumbscroller').slideToggle();
	});

});

function getImages(){
		$.ajax({
			type: 'GET',
			url: 'http://localhost/~clelia.rezzola/ywbc_jott/jott_code/includes/imgapi.php',
			success: function(feed){
 				$.each(feed, function(i, link){
 					// $('.thumb').appendTo('.thumbscroller');
 					var newThumb = "<img src=\"journals/"+ link +"\" alt=\"img\" class=\"thumb\" />";
 					$('.thumbscroller').append(newThumb);
 				}); 


 				$('.thumb').on('mouseover', function(){
					var img = $(this).attr('src');
					//alert(img);
					$('.img_gallery_mobile').css('background-image', "url(" + img +")");
				});

			},
			dataType: 'json'
		});
};