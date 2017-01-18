$(function()
{
	"use strict";
	
	$('a.lightbox:not(.video)').colorbox({rel:'group1'});
	$('a.lightbox.video').colorbox({iframe:true, innerWidth:640, innerHeight:390, rel:'group1'});
});