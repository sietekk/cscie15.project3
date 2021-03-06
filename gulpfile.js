var elixir = require("laravel-elixir");
var gulp = require("gulp");
var del = require("del");

var production = elixir.config.production;
var log = elixir.Log;
var task = elixir.Task;

var paths = {
    "jquery": "./node_modules/jquery/dist/",
    "jqueryvalidation": "./node_modules/jquery-validation/dist/",
    "bootstrap": "./node_modules/bootstrap-sass/assets/"
}

elixir.extend("cleanbundles", function(ifProd) {
    new task("cleanbundles", function() {
        if (ifProd) {
            log.heading("Deleting Bundle Files and Folders...");
            del(["public/css/**", "public/js/**"], function (err, paths) {
                (!err && log.files(paths)) || log.heading(err);
            });
        } else {
            log.heading("DEV mode; not deleting files!");
        }
    });
 });

elixir(function(mix) {
    mix.sass("app.scss", "public/css/bundle.css");

    mix.scripts([
            paths.jquery + "jquery.js",
            paths.jqueryvalidation + "jquery.validate.js",
            paths.jqueryvalidation + "additional-methods.js",
            paths.bootstrap + "javascripts/bootstrap.js"
        ], "public/js/bundle.js");

    mix.version(["public/js/bundle.js", "public/css/bundle.css"]);

    mix.copy(paths.bootstrap + "fonts/bootstrap/**", "public/build/fonts/bootstrap");

    mix.cleanbundles(production);
});
