=== Blitz Dock ===
Contributors: codex
Tags: admin, tools
Requires at least: 6.4
Tested up to: 6.6
Requires PHP: 7.4
Stable tag: 0.1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

== Description ==
Blitz Dock provides an administrative interface dock within WordPress. It currently offers a basic dashboard shell with three tabs: Dashboard, Channels, and Analytics. No tracking or external requests are made.

== Installation ==
1. Upload the plugin files to the `/wp-content/plugins/blitz-dock` directory or install through the WordPress dashboard.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Navigate to "Blitz Dock" in the admin menu to access the screen.

== Frequently Asked Questions ==
= Where can I find the settings? =
Navigate to the Blitz Dock menu in your WordPress admin sidebar.

== Changelog ==
= 0.1.0 =
* Initial admin shell with accessible tab navigation.

== Upgrade Notice ==
= 0.1.0 =
Initial release.
== Uninstall ==

This plugin may store settings under the `blitz_dock_options` option key.

When the plugin is deleted from the Plugins screen, `uninstall.php` runs and removes the stored options. In multisite installs, the uninstall routine is network-aware and cleans the options for each site.

No other data is created or retained by the plugin beyond standard WordPress options. If you have programmatically added custom data of your own, handle its deletion in your integration code.
