

jQuery(document).ready(function( $ ) {
	
	/** LINK BOX
	-------------------------------------------------------------------------------------------------**/

	$(".link-box").find('.fl-callout-content').each(function() {

		$(this).children('h3,div').not(':first-child').wrapAll('<div class="fl-jj-text-wrap" />');
		$(this).children().wrapAll('<div class="fl-jj-content-wrap" />');
		
		contentHeight=$(".link-box").find('.fl-jj-text-wrap').height();
		photoHeight=jQuery(".link-box").find('.fl-photo-content').height();
		photoMargin=-photoHeight;
		
		
		
		$(this).css({
		'display':'table',
		'width':'100%'
		});
		
		$(this).find('.fl-jj-content-wrap').css({
		'position':'relative',
		'display':'table',
		'width':'100%'
	
		});
		
		$(this).find('.fl-callout-photo').css({
				'position':'absolute'
		
			});
	
		$(this).find('.fl-jj-text-wrap').css({
			'position':'relative',
			'display':'table-cell',
			'vertical-align':'middle',
			'height':photoHeight,
			'overflow':'hidden'
			
	
		
			});
			
		$(this).find('.fl-jj-text-wrap').hover(function(){
		
			$(this).css({
			'outline': '4px solid #fff',
			'outline-offset': '-15px',
			
			});
			
			
		},function(){
			
		$(this).css({'outline':'none'});		
				
		});
		$( window ).resize(function() {
			photoHeight=jQuery(".link-box").find('.fl-photo-content').height();
			$(".link-box").find('.fl-jj-text-wrap').css({
			'height':photoHeight
			
			
	
		
			});
		});
		
	
	});
		
	/** Scroll Image
	-------------------------------------------------------------------------------------------------**/
	
	
});
