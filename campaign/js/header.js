// Pretty basic
// $('#campaign-expand').on('click', function(){
//    $('body').toggleClass('active-header');
// })

$(function(){
	document.getElementById('campaign-expand').addEventListener('click', function(){
		document.getElementsByTagName('body')[0].classList.toggle('active-header')
	})	
})
