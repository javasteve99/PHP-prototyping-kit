PHP Prototyping Kit (PPK)
=========================

A template for rapid prototyping of static sites and applications. It's built on PHP includes so you don't have to repeat code and uses the HTML5 Boilerplate code and file structure, a Sass port of Twitter's Bootstrap CSS, Bootstrap JS, and thoughtbot's Bourbon Sass mixins.

Running Apache and PHP locally
------------------------------
This works best if you set up a server to run on your local machine. If you have a Mac try [this guide](http://php.about.com/od/phpbasics/ss/installMac.htm) or install [MAMP](http://www.mamp.info/en/index.html). If you're running on a different platform, I guess you're on your own until I have a chance to do some research.

HTML
----

This project's HTML is based on the best practices advocated by the [HTML5 Boilerplate](http://html5boilerplate.com/) project.

The [Modernizr.js](http://www.modernizr.com/) library is included to support HTML5 elements and feature detection. I've included the default development build, but you should probably [build your own custom version](http://www.modernizr.com/download/) to use only the features you want to support.

CSS
---

This project's CSS now runs on [John Long's port of Bootstrap](https://github.com/jlong/sass-twitter-bootstrap) to [Sass](http://sass-lang.com/). Why? Because I like Sass better than LESS, that's why.

If you prefer LESS, just remove the /stylesheets/sass directory and replace it with Bootstrap's /less directory. This project does not intend to support LESS usage, so if you go that route you're on your own.

It should be noted, I changed the bootstrap.scss file name to application.scss to work better with the defaults and aliases I have set up on my own machine. If you know what you're doing, feel free to change it back when you use this.

###Bourbon
[Bourbon](https://github.com/thoughtbot/bourbon) by thoughtbot is included to allow the rapid use of CSS3. It should be noted that Bootstrap includes its own CSS3 mixins, but I prefer Bourbon's because they are closer to the correct syntax, plus it includes some nice extra functions and mixins.

JS
--

All of the [Bootstrap JS](https://github.com/twitter/bootstrap/tree/master/js) plugins are included in the javascripts/plugins.js file. It's pretty heft that way, I'd recommend deleting what you don't use and minifying the rest.

Artwork directory
-----------------

I've included empty PSDs with the proper names and sizes for creating all the right Apple touch icons and a favicon. Read [this article](http://mathiasbynens.be/notes/touch-icons) for more info.

Working with this repo
----------------------

To use Sass and require Bourbon, you have to watch your .scss files from the Terminal and compile their output into the application.css file in the /stylesheets directory. To do so, use the Terminal to cd into the root directory of this repo, then run this command:

<code>sass --watch stylesheets/sass:stylesheets -r ./stylesheets/sass/bourbon/lib/bourbon.rb</code>

You'll need to either place your files on a server with PHP installed or configure your machine to run PHP locally to work with this kit.
