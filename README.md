# concrete5 Boilerplate with Foundation 5 frontend

## What you get:
A concrete 5 package ready to install containing

	*	Autonav block (core) with
		- top bar template
	*	Slideshow block (core) with
		- orbit slider template
		- orbit slider template with description (hided on small devices)
		- clearing lightbox template 
		- clearing featured image template
	*	Content block (core) with call to action template
	*	YouTube block (core) with flex video template

File Attributes that are used through the package

*  'Description' for showing captions

File attributes that are installed through the package:

* 'Clearing Featured Image' to define the featured image for clearing lightbox
* 'Orbit Link Url' to apply a link to the orbit slides

* * *


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

Now you can apply the above mentioned core blocks to your pages and select the foundation custom templates. That's it.


***


# You can help with

* Foundation form template for the form block
* Navigations like offcanvas, magellan, sidenav ...
* ... and more of the Foundation stuff

									Pull requests are appreciated.

***


#### You want to customize the look of Foundation?
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


