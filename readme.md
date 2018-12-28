Compressed Emoji
===============

Same emoji, but compressed. It helps to serve emoji via your server.

## Description ##

__Origin Story__: WordPress emoji comes from `s.w.org` and they were not optimized well, Compressed Emoji was fixing that problem [(detail info)](https://wptavern.com/new-wordpress-plugin-serves-pre-compressed-emoji).

### Comparison ###

![Comparison](https://raw.githubusercontent.com/mustafauysal/compressed-emoji/master/screenshot-1.png)


### Filters ###

* You can use `compressed_emoji_url` to modify png emoji url
* You can use `compressed_emoji_svg_url` to modify svg emoji url




### Credits ###

* [Adem Ilter](https://github.com/ademilter/) for inspire
* [svgo](https://github.com/svg/svgo) for emoji compression
* [twemoji](https://github.com/twitter/twemoji) for emoji


## Installation ##

Extract the zip file and just drop the contents in the `wp-content/plugins/` directory of your WordPress installation and then activate the Plugin from admin's Plugins page.


## Frequently Asked Questions ##

= How can I use for CDN =

You can use `compressed_emoji_url` and 	`compressed_emoji_svg_url` filters for CDN replacement

