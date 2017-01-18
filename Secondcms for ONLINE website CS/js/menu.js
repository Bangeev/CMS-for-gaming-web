"use strict";

$('#mainNav > ul > li, .menu').each(function()
{
	if($('.submenu', this).length > 0)
	{
		$(this).click(function()
		{
			$(this).toggleClass('expanded');
		});
	}
});

$('#navToggle').change(function()
{
	$('#mainNav').slideToggle().toggleClass('expanded');
});