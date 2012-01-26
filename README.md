PHP Prototyping Kit
===================
A DRY framework for website and application prototype development. It's built using PHP includes so you can avoid repeating the same code in multiple places. It uses HTML5 Boilerplate code for the PHP equivalents of its HTML files, and includes Bootstrap CSS and JS. It also has Sass and Bourbon to facilitate easy and rapid development. This is not intended to be used for production sites in its default format. It pulls in a LOT of CSS and JS and is full of slightly-more-than-necessary comments. If you wish to use it for production sites, you should delete unused styles and javascript and erase any comments that seem obvious to you.

Running Apache and PHP locally
------------------------------
This works best if you set up a server to run on your local machine. If you have a Mac try [this guide](http://php.about.com/od/phpbasics/ss/installMac.htm). If you're running on a different platform, I guess you're on your own until I have a chance to do some research.

HTML5 Boilerplate
-----------------
Includes some [HTML5 Boilerplate](http://html5boilerplate.com/) goodness in the default-head.php and default-foot.php layout files, plus the [Modernizr.js](http://www.modernizr.com/) library.

Twitter Bootstrap CSS
------
Includes [Bootstrap] (http://twitter.github.com/bootstrap/), Twitter's CSS toolkit.

Twitter Bootstrap JS libraries
------
Includes the [Bootstrap JS libraries] (http://twitter.github.com/bootstrap/javascript.html) in javascripts/plugins.js to extend functionality.

Sass
----
Sass is better CSS and is include to simplify rapid front-end development. For more, see [the Sass homepage](http://sass-lang.com/).

Bourbon
-------
Bourbon is thoughbot's set of Sass mixins, intended to make the use of CSS3 properties faster. For more, see [Bourbon's GitHub repo](https://github.com/thoughtbot/bourbon).

Using Sass/Bourbon
-------------------------
Watch Sass stylesheet and require Bourbon:

    sass --watch stylesheets/sass:stylesheets -r ./stylesheets/sass/bourbon/lib/bourbon.rb
