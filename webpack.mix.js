const mix = require('laravel-mix');  // Import Laravel Mix
const tailwindcss = require('tailwindcss');  // Import Tailwind CSS

mix.js('resources/js/app.js', 'public/js')  // Compile JS
   .postCss('resources/css/tailwind.css', 'public/css', [
       tailwindcss,  // Use Tailwind as a PostCSS plugin
   ]);
