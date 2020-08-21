# GULP SETUP TEMPLATE
## Quickstart guide

* Clone or download this Git repo onto your computer.
* Install [Node.js](https://nodejs.org/en/) if you don't have it yet.
-------------------------------------------------------

* Run `npm install`.
* Run `npm init` to initialize npm with package.json.
* Run `npm install --save-dev gulp gulp-sass gulp-sourcemaps gulp-postcss autoprefixer cssnano gulp-concat gulp-terser`
  to install needed plugins.
  
-------------------------------------------------------
* Run `touch gulpfile.js` to create gulpfile.js.
* Then configure gulp tasks  .
* Run `gulp` in order to start all tasks .
-------------------------------------------------------

## In this proejct, Gulp is configured to run the following functions:

* Compile the SCSS files to CSS.
* Autoprefix and minify the CSS file.
* Concatenate the JS files.
* Uglify the JS files(Terser).
* Move final CSS and JS files to the `/dist/css & /dist/js` folders.
 
