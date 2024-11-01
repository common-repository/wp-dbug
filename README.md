wp-dbug
=======

=== wp-dBug ===
Contributors: vhauri
Donate link: http://neverblog.net/
Tags: debug, dbug, var_dump, debugger
Requires at least: 2.7
Tested up to: 3.4.1
Stable tag: trunk

Plugin implements the awesome dBug class created by Kwaku Otchere for use in WordPress plugin debugging

== Description ==

This plugin is basically a wrapper for the excellent dBug (http://dbug.ospinto.com) class for PHP debugging, written by Kwaku Otchere..

Instead of var_dump or echo, you can call wp_dbug( $variable ) to get clear, dynamic debug output of strings, arrays, or objects.

== Installation ==

1. Download the plugin and unzip it into wp-content/plugins.
2. Activate the plugin by going to Plugins and choosing Activate.
3. Use for debug output anywhere within WordPress by calling wp_dbug( $variable ).

== Frequently Asked Questions ==

Q: This is just a class with a wrapper for WordPress. Why bother?
A: It took 15 minutes to write, and saves me 5 minutes every time I need to debug a new blog. 'Nuff said.

Q: Can I use this stuff outside of WordPress?
A: Yes! Go to http://dbug.ospinto.com and download the dBug class, then include it in whatever project you're working on.
