# txGarage V6 - WP/Timber #
News - Reviews - Passion
 ------------------------

The [txGarage website](http://txgarage.com) is an automotive blog focused on the Texas automotive consumer. 

### Technology   
* WordPress / [Timber](http://upstatement.com/timber/)
* PHP
* HTML
* SASS
* JavaScript / ReactJS
* Gulp (task runner/build)

### About Timber

Timber helps you create fully-customized WordPress themes faster with more sustainable code. With Timber, you write your HTML using the Twig Template Engine separate from your PHP files.

This cleans-up your theme code so your PHP file can focus on supplying the data and logic, while your twig file can focus 100% on the display and HTML. [Learn more =>](http://upstatement.com/timber/)

### Getting started

Make sure that you have the `Timber` plugin installed through WordPress. This allows for the use of `twig` and `Timber` syntax. [Plugin for WP](https://wordpress.org/plugins/timber-library/)

Get node packages with:   
```
npm install   
```

This should give you `gulp-sass` `gulp-autoprefixer` `gulp-livereload` - more to come.

Running Gulp:   
```
gulp // default build

gulp watch // watching sass files
```

Folder structure:

the **/assets** folder holds built files including `css`, `javascript`, and `SVG Sprite`

the **/includes** folder is for php includes such as `shortcodes` and `widgets`

the **/src** folder is where your source files are for generating `css` and `js`. This is where you'll write `Sass` or `React` code.

the **/views** folder holds all your `twig` files for the `Timber framework`. This is where you'll define components and page views. 
