/**
 * Handles initial loading of Widget pallet in Administration Screen. 
 */
jQuery( document ).ready( function( $ ) {
	console.log("ATB: >>> jQuery(document).ready");
	// If wiget is already in the sidebar area, ...
	widgets = jQuery("#widgets-right").find('.widget');
	for (var i = 0; i < widgets.length; i++) {
		if ( -1 != (widgets[i].id).indexOf('_single_instance_widget-')) {
			// ... then hide this widget from available widget pallet
			var active_widgets = jQuery("#widget-list").children();
			for (var j = 0; j < active_widgets.length; j++) {
				widget_id = j + 1;
				if ((active_widgets[j]).id == "widget-" + widget_id + "_single_instance_widget-__i__"){
					var active_widget_id = "#" + (active_widgets[j]).id;
					jQuery(active_widget_id).hide();	
					break;
				}
			}
			break;				
		}
	}		
	console.log("ATB: <<< jQuery(document).ready");
});

/**
 * Handles drag & drop event of Widget pallet in Administration Screen. 
 */
jQuery( document ).ajaxComplete( function( event, XMLHttpRequest, ajaxOptions ) {
	console.log("ATB: >>> jQuery(document).ajaxComplete");
	// parse parameters
    var request = {}, pairs = ajaxOptions.data.split('&'), i, split, widget;
    for( i in pairs ) {
        split = pairs[i].split( '=' );
        request[decodeURIComponent( split[0] )] = decodeURIComponent( split[1] );
		// console.log("ATB: i = " + i + ", " + split[0] + " = " + split[1]);
    }
	if( request.action && ( request.action === 'save-widget' ) ) {
		// Search widget from avaialble widget pallet and set id to 'active_widget_id'
		var active_widgets = jQuery("#widget-list").children();
		var active_widget_id;
		for (var i = 0; i < active_widgets.length; i++) {
			var active_widget = active_widgets[i];
			widget_id = i + 1;
			if (active_widget.id == "widget-" + widget_id + "_single_instance_widget-__i__"){
				active_widget_id = "#" + active_widget.id;
				break;
			}
		}
		// if completed action is 'Delete' then show the widget. Otherwise,
		// it must be registered into sidebar area... hide the widget.
		if( request.delete_widget && ( request.delete_widget === '1' ) ) {
			jQuery(active_widget_id).show();
		} else {
			jQuery(active_widget_id).hide();
		}
	}
	console.log("ATB: <<< jQuery(document).ajaxComplete");
});
