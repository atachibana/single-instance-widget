# single-instance-widget

Example code of WordPress Single Widget

# Overview

Example code of WordPress 'Single Widget'.

On 15/Sep/2017, WordPress Document Team received following message from joyously.

> Before WordPress 2.8, widgets were either single use (you dragged the single instance into a sidebar and it was no longer in the list of available widgets) or multi-widget (you always have another same type widget available to put into multiple widget areas). At 2.8, the widget class changed so all widgets are multi-widgets, since they are more useful. My question is about how to make a single use widget these days, since there are still cases of wanting only one to be available. If I use a static variable, it only affects the instance that is in the widget area. There would still be one listed as available, only that one wouldn't work (because of the variable).
 
> This is not a good solution. My use case is for a widget that deals with The Loop. I don't want multiple loops to be available...just one. I think it's still possible, but the documentation is lacking.

This code demonstrates how to create 'Single widget'.

# Usage

1. Crone or Copy all files under the `<wordpress>/wp-content/plugins/single-instance-widget`.
2. Activate the plugin from Administration Screen.
3. Access to the 'Appearance' > 'Widget' from Administration Screen.
4. Drag and drop 'Single Instance Widget' to side bar area. The widget will be hidden from widget pallet.
5. Delete the dropped widget in the side bar area. The widget will be come back on widget pallet.

# Restriction

* No Customizer Support
* When widget pallet is displayed as 2-rows, the hidden space is just blank, not padded. 


# Changelog

## 1.0.0
* Initial

