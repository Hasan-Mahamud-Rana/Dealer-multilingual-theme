<?php get_template_part( 'parts/homepage', 'contact' ); ?>
<div class="quickContact-block">
	<div class="row fixedWidth">
		<?php get_sidebar( 'footer' ); ?>
	</div>
</div>
<footer class="footer" role="contentinfo">
	<div id="inner-footer" class="row">
		<div class="large-12 medium-12 columns">
			<nav role="navigation">
				<?php joints_footer_links(); ?>
			</nav>
		</div>
		<div class="small-12 medium-3 large-3 columns copyright-block">
			<!--<p class="copyright">Created by <a href="http://www.graphichouse.dk/">graphichouse.dk</a></p>--><p>&nbsp;</p>
		</div>
		<div class="small-12 medium-6 large-6 columns copyright-block text-center">
			<p class="copyright-add">Gunnar Clausens Vej 36 - DK-8260 Viby J - CVR: 27245277 - +45 87 42 00 35</p>
		</div>
		<div class="small-12 medium-3 large-3 columns copyright-block text-right">
			<?php joints_privacy_nav(); ?>
		</div>
		</div> <!-- end #inner-footer -->
		</footer> <!-- end .footer -->
		<div class="stickyWhitebar"></div>
		</div>  <!-- end .main-content -->
		</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
		<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/slider/slick-lightbox.js"></script>

		<script type="text/javascript">
			jQuery('.slide').slick({
			accessibility:true,
			dots: true,
			arrows: true,
			infinite: true,
			autoplay: true,
  			autoplaySpeed: 5000,
			pauseOnHover: false,
			speed: 1500,
			fade: true
			});
			jQuery(".slideWrapper").addClass("tricky");
			if (jQuery(".dealerSlider").length > 0){
	jQuery('.dealerSlider').slick({
			accessibility:true,
			dots: true,
			arrows: true,
			//infinite: true,
			autoplay: true,
  			autoplaySpeed: 2000,
			pauseOnHover: false,
			speed: 500,
			//fade: true
			}).slickLightbox().addClass("tricky");
}
		</script>
		<script>
				// //Get old Hash value from url
				// jQuery(".accordion-title").on("click", function() {
				// 	var Url = window.location.href;
				// 	var Hash = Url.substring(Url.indexOf('#'));
				// 	jQuery(Hash).css({ display: "none" });

				// });
				// // Change Hash value from url
				// jQuery(window).on('hashchange',function(){
				// 	var newUrl = window.location.href;
				// 	var newHash = newUrl.substring(newUrl.indexOf('#'));
				// 	jQuery(newHash).css({ display: "block" });
				// });
				//   if(window.location.hash){
    //             $('.accordion-title').each(function(){
    //                 var hash = '#' + $(this).attr('href').split('#')[1];
    //                 if(hash == window.location.hash){
    //                     $(this).click();
    //                 }
    //             });
    //         }
</script>

<?php if (is_page('find-forhandler')||is_page('find-a-dealer')||is_page('trouver-un-detaillant')||is_page('handler-finden')||is_page('hitta-aterforsaljare')) { ?>
<script>
jQuery( document ).ready(function() {
	jQuery('html, body').animate({
			scrollTop:jQuery('h2.page-title').offset().top-75
	}, 500);
	/*setTimeout( function(){
		jQuery(".gmnoprint.gm-bundled-control.gm-bundled-control-on-bottom > .gmnoprint > div > div:first-child").click();
	},1000 );*/
	//Duel Input Box Start //
	jQuery('.searchD').on('keypress keyup keydown',function(event) {
   var press = jQuery.Event(event.type);
   var code = event.keyCode || event.which;
   press.which = code ;
  jQuery('.prettySearchValue').val(this.value);
  jQuery('.prettySearchValue').trigger(event.type, {'event': press});
});
//Duel Input Box End //
	setTimeout( function(){
		jQuery("div#MapListPro0.prettyMapList").slideDown("slow");
		jQuery("div#MapListPro1.prettyMapList").slideUp("slow");
	},1000 );
	jQuery("li.mapT0 a").click(function(){
	 	jQuery("div#MapListPro0.prettyMapList").slideDown("slow");
		jQuery("div#MapListPro1.prettyMapList").slideUp("slow");
	});
	jQuery("li.mapT1 a").click(function(){
	 	jQuery("div#MapListPro1.prettyMapList").slideDown("slow");
		jQuery("div#MapListPro0.prettyMapList").slideUp("slow");
	});
});

</script>
<?php } ?>

<?php if (is_page('trouver-un-detaillant')||is_page('handler-finden')||is_page('hitta-aterforsaljare')) { ?>
<script>
jQuery( document ).ready(function() {
	setTimeout( function(){
		jQuery(".gmnoprint.gm-bundled-control.gm-bundled-control-on-bottom > .gmnoprint > div > div:first-child").click();
	},1000 );
});
</script>
<?php } ?>

<script>
jQuery(document).foundation();
jQuery( document ).ready(function() {
	setTimeout( function(){
		var thumId = "div#" + jQuery("div.myProduct").first().attr("myattr")+"_b";
		jQuery(thumId).slideUp().nextAll().slideUp();

		//goToAnchor();
	},0 );


	jQuery("div.myProduct").click(function(){
	var id = "div#" + jQuery(this).attr("myattr")+ "_b";
		jQuery(id).slideDown("slow").siblings().slideUp("slow");

		// Open Slick Gallery
		jQuery( ".slick-arrow" ).trigger( "click" );
		 jQuery("div#paneld1, div#paneld2, div#paneld3 , div#paneld4 , div#paneld5, div#paneld6, div#paneld7").removeClass("tricky");
		// Scroll Down
		jQuery('html, body').animate({
			scrollTop:jQuery('.pContent').offset().top-75
		}, 'slow');

	});

	/*termatech.com/vaerd-at-vide
	jQuery("div.productImage ").click(function(){

		var pId = jQuery(this).data("id");
		// Scroll Down
		jQuery('html, body').animate({
			scrollTop:jQuery('#'+pId+'-label').offset().top-75
		}, 'slow');
	});
*/

	/*Product Page Slick Effect*/
	jQuery("div.myProduct").click(function(){
			var id = jQuery(this).attr("myattr");
			jQuery(".slick-next").click();
			jQuery('#gallery_'+id+' p').slickLightbox();
			jQuery('#gallery_'+id+' p').slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 1,
		responsive: [
		  {
			breakpoint: 1024,
			settings: {
			  slidesToShow: 3,
			  slidesToScroll: 3,
			  infinite: true,
			  dots: true
			}
		  },
		  {
			breakpoint: 600,
			settings: {
			  slidesToShow: 2,
			  slidesToScroll: 2
			}
		  },
		  {
			breakpoint: 480,
			settings: {
			  slidesToShow: 2,
			  slidesToScroll: 2
			}
		  }
		]
			});

	});

	/*Single Product Page Slick Effect*/
	if (jQuery(".pPhotoSlider").size()<=1){
		var id = jQuery(".pPhotoSlider:nth-child(1)").attr('id');
		jQuery(".slick-next").click();

		jQuery('#'+id+' p').slickLightbox();
		jQuery('#'+id+' p').slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 1,
			responsive: [
			  {
				breakpoint: 1024,
				settings: {
				  slidesToShow: 3,
				  slidesToScroll: 3,
				  infinite: true,
				  dots: true
				}
			  },
			  {
				breakpoint: 600,
				settings: {
				  slidesToShow: 2,
				  slidesToScroll: 2
				}
			  },
			  {
				breakpoint: 480,
				settings: {
				  slidesToShow: 2,
				  slidesToScroll: 2
				}
			  }
			]
		});
	}

	jQuery("li.tabs-title.panel1").click(function(){
	 	jQuery("div#panel1").addClass("tricky").siblings().removeClass("tricky");
	 	jQuery('html, body').animate({scrollTop: jQuery(this).offset().top-75}, 600);
    return false;
	});
	jQuery("li.tabs-title.panel2").click(function(){
	 	jQuery("div#panel2").addClass("tricky").siblings().removeClass("tricky");
	 	jQuery('html, body').animate({scrollTop: jQuery(this).offset().top-75}, 600);
    return false;
	});
		jQuery("li.tabs-title.panel3").click(function(){
	 	jQuery("div#panel3").addClass("tricky").siblings().removeClass("tricky");
	 	jQuery('html, body').animate({scrollTop: jQuery(this).offset().top-75}, 600);
    return false;
	});

	jQuery("li.tabs-title.paneld1").click(function(){
	 	jQuery("div#paneld1").addClass("tricky").siblings().removeClass("tricky");
	 	jQuery('html, body').animate({scrollTop: jQuery(this).offset().top-75}, 600);
    return false;
	});
	jQuery("li.tabs-title.paneld2").click(function(){
	 	jQuery("div#paneld2").addClass("tricky").siblings().removeClass("tricky");
	 	jQuery('html, body').animate({scrollTop: jQuery(this).offset().top-75}, 600);
    return false;
	});
		jQuery("li.tabs-title.paneld3").click(function(){
	 	jQuery("div#paneld3").addClass("tricky").siblings().removeClass("tricky");
	 	jQuery('html, body').animate({scrollTop: jQuery(this).offset().top-75}, 600);
    return false;
	});
		jQuery("li.tabs-title.paneld4").click(function(){
	 	jQuery("div#paneld4").addClass("tricky").siblings().removeClass("tricky");
	 	jQuery('html, body').animate({scrollTop: jQuery(this).offset().top-75}, 600);
    return false;
	});


    jQuery('.accordion p:empty, .orbit p:empty').remove();
    jQuery('.archive-grid .columns').last().addClass( 'end' );
	jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').wrap("<div class='flex-video'/>");

});

if (jQuery("#tVideo").length > 0){
	var video = document.getElementById('tVideo');
	video.addEventListener('click',function(){
	  video.play();
	},false);
}




if (jQuery("body.single.single-product").length > 0)
{
	jQuery('html, body').animate({
			scrollTop:jQuery('div.gray-button').offset().top-75
	}, 500);
}
if (jQuery("h2.page-title").length > 0)
{
	jQuery('html, body').animate({
			scrollTop:jQuery('h2.page-title').offset().top-75
	}, 500);
}
if (jQuery("h2.page-title-header").length > 0)
{
	jQuery('html, body').animate({
			scrollTop:jQuery('h2.page-title-header').offset().top-75
	}, 500);
}

</script>

<script>
(function(){
 if(document.querySelector('.pThumb')){
  var container = document.querySelector('.pThumb'),
    imgs = document.querySelectorAll('img'),
    content = document.querySelector('.pContent');

  function requestContent(file){
    $('.pContent').load(file + ' .pContent');
  }

  function removeCurrentClass(){
    for(var i = 0; i < imgs.length; i++){
      imgs[i].classList.remove('current');
    }
  }

  function addCurrentClass(elem){
    removeCurrentClass();
    var element = document.querySelector("." + elem);
    element.classList.add('current');
  }

  container.addEventListener('click', function(e){
    if(e.target != e.currentTarget){
      e.preventDefault();
      var data = e.target.getAttribute('data-name'),
        url = data;
      addCurrentClass(data);
      history.pushState(data, null, url);
      updateText(data);
      requestContent(url);
    }
    e.stopPropagation();
  }, false);


  window.addEventListener('popstate', function(e){
    var character = e.state;

    if (character == null) {
      removeCurrentClass();
      textWrapper.innerHTML = " ";
      content.innerHTML = " ";
    } else {
      updateText(character);
      requestContent(character);
      addCurrentClass(character);

    }
  })
 }
})();

function ChangeUrl(page, url) {
        if (typeof (history.pushState) != "undefined") {
            var obj = { Page: page, Url: url };
            history.pushState(obj, obj.Page, obj.Url);
        } else {
            alert("Browser does not support HTML5.");
        }
    }
    jQuery(function () {
        jQuery("body.post-type-archive-worthknowing .accordion-block ul.accordion li a").click(function () {
        	var url = jQuery(this).attr("myattr");
          ChangeUrl('Page1', url );
        });
    });
</script>
</body>
</html>