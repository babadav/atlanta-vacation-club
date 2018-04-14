/**!
 * b4st JS
 */

(function ($) {

	'use strict';

	$(document).ready(function() {

		// Comments

		$('.commentlist li').addClass('card');
		$('.comment-reply-link').addClass('btn btn-secondary');

		// Forms

		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('btn btn-primary');

		// Pagination fix for ellipsis

		$('.pagination .dots').addClass('page-link').parent().addClass('disabled');

		// You can put your own code in here

	});

}(jQuery));

var innerNav = document.querySelector('.mobile-nav-inner');
var burgerButton = document.querySelector('.hamburger');
var mainContentContainer = document.querySelector('.main-content');
burgerButton.addEventListener('click', function(){
	console.log('burger')
	innerNav.classList.toggle('mobile-nav-inner-active');
})

mainContentContainer.addEventListener('click', function(){
	innerNav.classList.remove('mobile-nav-inner-active')
})

