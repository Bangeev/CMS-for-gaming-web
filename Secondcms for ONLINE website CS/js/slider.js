"use strict";
		
var sliderTimer = null;
var interval = 15000;

$('#slidebox .left').click(function()
{
	advanceLeft();
});

$('#slidebox .right').click(function()
{
	advanceRight();
});

function advanceRight()
{
	var current = $('#slidebox .slideImage.selected');
	var next = current.next();
	
	if(next.length == 0)
		next = $('#slidebox .slideImage:first-child');
		
	transitionImage(next);
}

function advanceLeft()
{
	var current = $('#slidebox .slideImage.selected');
	var next = current.prev();
	
	if(next.length == 0)
		next = $('#slidebox .slideImage:last-child');
		
	transitionImage(next);
}

function transitionImage(next)
{
	$('#slidebox .slideImage.selected').removeClass('selected');
	$(next).addClass('selected')
	
	var caption = $('img', next).attr('alt');
	var link = $('a', next).attr('href');
	
	$('#slidebox .caption').text(caption);
	$('#slidebox .readMore').attr('href', link);
	
	autoTransition();
}

function autoTransition()
{
	if(sliderTimer != null)
	{
		clearTimeout(sliderTimer);
		sliderTimer = null;
	}
	
	sliderTimer = setTimeout(advanceRight, interval);
}

advanceRight();