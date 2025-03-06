=== Update Press - Keep your users informed about changes and updates ===
Contributors: @7thskysoftware, mishalfatima684
Donate link: https://7thskysoftware.com/
Tags: updates, news, changelog, notification, WordPress updates
Requires at least: 5.6
Tested up to: 6.7
Requires PHP: 7.2
Stable tag: 1.0.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Easily share information, News, and updates with your users through an interactive floating widget on the front end.

== Description ==
UpdatePress is a powerful WordPress plugin that helps website owners efficiently display and manage update notifications. It features a floating widget and a sidebar drawer that dynamically fetches and showcases the latest updates. It is ideal for businesses looking to keep users informed about new releases—especially for software, SaaS, and digital products—without requiring them to scroll or search for updates.


https://youtu.be/5PP8u1xihXw


**Features:**
* Floating widget for quick access to updates
* Sidebar drawer to display updated details
* Category filtering for better navigation
* Fetches updates dynamically from a custom API endpoint
* Mobile-friendly and responsive design

== Installation ==
1. Download the plugin ZIP file and upload it to `/wp-content/plugins/` directory.
2. Activate the plugin from the **Plugins** menu in WordPress.
3. Navigate to **UpdatePress Settings** to configure the API endpoint and other options.
4. Use the floating widget or sidebar drawer to view and manage updates.

== Frequently Asked Questions ==

= How does UpdatePress fetch updates? =
UpdatePress pulls updates from a custom WordPress REST API endpoint (`/wp-json/updatepress/v1/updates`). You can modify this endpoint to fetch data from different sources.

= Can I customize the sidebar layout? =
No, But the later updates will come with this feature where the user can customize CSS structure, allowing to override styles using your theme’s CSS file.

= Does UpdatePress support custom post types? =
Yes, UpdatePress can be extended to fetch updates from custom post types by modifying the query inside the plugin.

= Can I remove the company logo from the drawer footer? =
No, at the moment it is not possible to remove it, however, we are working on an updated version and users will be able to modify, hide it.

== Screenshots ==
1. Floating widget for quick access.
2. Sidebar displaying latest updates.
3. Single update view inside the drawer.

== Changelog ==
= 1.0.1 =
Minore fixes and upgrades.

= 1.0.0 =
* Initial release with floating widget and sidebar drawer.
* Category filtering and REST API support.
* Responsive and mobile-friendly UI.

== Upgrade Notice ==
= 1.0.0 =
First stable release of UpdatePress. Install and activate to start managing your updates efficiently.

== License & Credits ==
This plugin is licensed under the GPLv2 or later. You are free to modify and distribute it as per the license terms.