$( document ).ready(function(){
	$('.sidenav').sidenav();
	$('select').formSelect();
	$('.modal').modal();
	$('.collapsible').collapsible();
	$('.datepicker').datepicker({
		container: 'body',
		format: 'yyyy-mm-dd'
	});
	$('.timepicker').timepicker({
		defaultTime:true,
		container: 'body',
		format: 'hh:mm'
	});
	
	document.addEventListener('DOMContentLoaded', function() {
		var elems = document.querySelectorAll('.collapsible');
		var instances = M.Collapsible.init(elems, options);
	  });	
});
