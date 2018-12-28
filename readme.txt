=== Compressed Emoji ===
Contributors: m_uysl
Tags: emoji,emoticons,compressed emoji,optimized emoji
Requires at least: 4.6
Tested up to: 5.0.2
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Same emoji, but compressed. It helps to serve emoji via your server.

== Description ==

__Origin Story__: WordPress emoji comes from `s.w.org` and they were not optimized well, Compressed Emoji was fixing that problem [(detail info)](https://wptavern.com/new-wordpress-plugin-serves-pre-compressed-emoji).

= Credits =

* [Adem Ilter](https://github.com/ademilter/) for inspire
* [svgo](https://github.com/svg/svgo) for emoji compression
* [twemoji](https://github.com/twitter/twemoji) for emoji


= Contributing =
Pull requests are welcome on [Github](https://github.com/mustafauysal/compressed-emoji)


== Installation ==

Extract the zip file and just drop the contents in the `wp-content/plugins/` directory of your WordPress installation and then activate the Plugin from admin's Plugins page.


== Frequently Asked Questions ==

= How can I use for CDN =

You can use `compressed_emoji_url` and 	`compressed_emoji_svg_url` filters for CDN replacement

== Screenshots ==

1. Comparison

== Changelog ==

= 1.1 =
* Twemoji 11.2 update. Props [@kingkool68](https://github.com/kingkool68)
* tested with WordPress 5.x
* trunk is stable tag, It's not good to keep thousands of files over and over again on the SVN.

= 1.0 =
* Initial version
