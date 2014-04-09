# concrete5 package boilerplate with Foundation 5 frontend

## What you get:
A concrete 5 package ready to install containing

	*	Autonav block (core) with
		- breadcrumbs template
		- list without bullets template
		- top bar template
		- side nav templates (one aligning left, the other right)
	*	Slideshow block (core) with
		- orbit slider template
		- orbit slider template with description (hidden on small devices)
		- clearing lightbox template 
		- clearing featured image template
	*	Content block (core) with call to action template
	*	YouTube block (core) with flex video template
	*	Form block (core) with forms template
	* 	Search block (core) with button postfix template

	File Attributes used:

	*  'Description' for showing captions

	File attributes installed:

	* 'Clearing Featured Image' to define the featured image for clearing lightbox
	* 'Orbit Link Url' to apply a link to the orbit slides
	
	Jobs installed:

	* Generate a sitemap.xml file for a responsive site
	
	General optimization:
	*	Don't load concrete5's JS and CSS for visitors
	*	Don't parse this package's stylesheets. They are not editable through dashboard



## How you can use it

#### Download as zip
1. Make a new folder called `c5f5boilerplate` in your /packages folder
2. Dowload this repository as a zip file
3. Extract the contents in the /packages/c5f5boilerplate folder
4. Install the package in concrete 5 Dashboard/Extend concrete5 :-)

#### Git User? Clone it with git
1. Grab the terminal
2. Go to your /packages folder
2. `git clone https://github.com/vl-ad/c5f5boilerplate.git c5f5boilerplate`
3. Install the package in concrete 5 Dashboard/Extend concrete5 :-)

Now you can apply the above mentioned core blocks to your pages and select the foundation custom templates. In the concrete5 user interface all the foundation custom templates are shown with an prepended 'F', for example 'F Top Bar'. That's it.

# You can help with

* Navigations like 
 	- offcanvas
 	- combination of topbar (on large and medium) and offcanvas (small)
 	- magellan
* ... and more of the Foundation stuff

									Pull requests are appreciated.
									
							Please use 4 spaces instead of tabs for indentation.


# You want to customize the look of Foundation?
#### Requirements

  * Ruby 1.9+
  * [Node.js](http://nodejs.org)
  * [Sass](http://www.sass-lang.org): `gem install sass`
  * [compass](http://compass-style.org/): `gem install compass`
  * [bower](http://bower.io): `npm install -g bower grunt-cli`

#### Compile the SCSS files

In /scss/_settings.scss you can customize all the foundation components. Copy the variables from /bower_components/foundation/scss/foundation/_settings.scss

The /scss/_custom.scss is for your additional stuff. Here you can write SCSS but normal CSS, too!

To compile execute `bash compass watch` in the packages/c5f5boilerplate/themes/c5f5boilerplate folder.

#### Upgrade foundation

In the packages/c5f5boilerplate/themes/c5f5boilerplate folder execute

```bash
bower update
```

## Contact
[Send a message](http://www.concrete5.org/profile/-/view/182432/)


#### Thanks to

[JordanLev](https://github.com/jordanlev/c5_clean_block_templates)

[herent](https://github.com/herent/c5_boilerplate)
