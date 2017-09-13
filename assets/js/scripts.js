jQuery(document).foundation();
/* 
These functions make sure WordPress 
and Foundation play nice together.
*/

jQuery(document).ready(function() {
    jQuery('.accordion p:empty, .orbit p:empty').remove();
    jQuery('.archive-grid .columns').last().addClass( 'end' );
	jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').wrap("<div class='flex-video'/>");
});