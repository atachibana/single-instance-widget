=== Single Instance Widget ===
Contributors: atachibana
Tags: widget plugin sample codex
Requires at least: 4.9
Tested up to: 4.9.1
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Example code of WordPress Single Widget

== Description ==

On 15/Sep/2017, WordPress Document Team received following message from joyously.

Before WordPress 2.8, widgets were either single use (you dragged the single 
instance into a sidebar and it was no longer in the list of available widgets) 
or multi-widget (you always have another same type widget available to put 
into multiple widget areas). At 2.8, the widget class changed so all widgets 
are multi-widgets, since they are more useful. My question is about how to 
make a single use widget these days, since there are still cases of wanting 
only one to be available. If I use a static variable, it only affects the 
instance that is in the widget area. There would still be one listed as 
available, only that one wouldn't work (because of the variable). 
This is not a good solution. 
My use case is for a widget that deals with The Loop. I don't want multiple 
loops to be available...just one. I think it's still possible, but the 
documentation is lacking.

This code demonstrates how to create 'Single widget'.

== Installation ==

1. Crone or Copy all files under the `<wordpress>/wp-content/plugins/single-instance-widget`.
1. Activate the plugin from Administration Screen.
1. Access to the 'Appearance' > 'Widget' from Administration Screen.
1. Drag and drop 'Single Instance Widget' to side bar area. The widget will be hidden from widget pallet.
1. Delete the dropped widget in the side bar area. The widget will be come back on widget pallet.

== Frequently Asked Questions ==

= A hidden widget area became just blank space, not padded. =

Restriction.

= Not hidden in Customizer =

Restriction.

This example supports Widget screen of Administration Screen only.

== Changelog ==

= 1.0.0 - 17th December 2017
* Initial