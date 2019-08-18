// BEGIN SHOW/HIDE MAIN MENU
jQuery('.minimenu-menu-button-wrapper, .minimenu-overlay, .minimenu-close-button').on('click', function(e) {
'use strict';
e.preventDefault();
	if(jQuery('.minimenu-by-bonfire-wrapper').hasClass('minimenu-menu-active'))
	{
		/* hide menu */
		jQuery(".minimenu-by-bonfire-wrapper").removeClass("minimenu-menu-active");
		/* hide menu button active colors */
		jQuery(".minimenu-menu-button-wrapper").removeClass("minimenu-menu-button-active");
		/* hide close div */
		jQuery('.minimenu-overlay').removeClass('minimenu-overlay-active');
	} else {
		/* show menu */
		jQuery(".minimenu-by-bonfire-wrapper").addClass("minimenu-menu-active");
		/* show menu button active colors */
		jQuery(".minimenu-menu-button-wrapper").addClass("minimenu-menu-button-active");
		/* show close div */
		jQuery('.minimenu-overlay').addClass('minimenu-overlay-active');
	}
});
// END SHOW/HIDE MAIN MENU