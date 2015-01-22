window.onload = function()
{
	$("#nav-collapse").on('click', showHideMenu);
}
	
function showHideMenu()
{
	var id=$(this).attr('href');
	$(id).slideToggle(500);
	return false;
}