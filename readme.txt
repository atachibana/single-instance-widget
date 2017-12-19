=== Single Instance Widget ===
Contributors: atachibana
Tags: widget plugin sample codex
Requires at least: 4.9
Tested up to: 4.9.1
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Example code of 'Single Widget'

== Description ==

This is message from joyously to WordPress Document Team on 15/Sep/2017:

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

1. Clone this repository under the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Access Administration Screen > Appearance > Widgets.
1. Drag 'Single Instance Widget' into the sidebar area and watch the pallet.

== Frequently Asked Questions ==

= A hidden widget area became just blank space, not padded. =

Limitation.

= Not hidden in Customizer =

Limitation. It supports Widget screen of Administration Screen.

== Screenshots ==

n/a

== Changelog ==

= 1.0.0 =
* Initial

== Upgrade Notice ==

= 1.0.0 =

n/a

