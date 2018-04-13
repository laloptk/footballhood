

Footballhood theme
===

This theme is in its early stages, I'm building it to create a blog about Football in Mexico, but I also pretend this will set the basis for building a more complex framework that will help build a more robust theme that I can use in the future in my personal projects.

For now, theres only a couple of classes inside the inc folder, and I also built a page template named Page Main (page-main.php). That template is meant to be used in the homepage and maybe using the same code with other pages that will need to list several posts from different categories. 

The tools I'm using for building this theme:
-----------------------------------------------

1. **_Underscores Starters Theme** (https://underscores.me): I want this theme to be very fast, so I don't want to use pre-built themes or builders that have tons of generic stuff and can be a burden for site speed. 
2. **WP Gulp** (https://github.com/ahmadawais/WPGulp): Beeing able to focus on the fun stuff, or at least reduce the repetitve tasks makes development faster, so I use WP Gulp as a way to improve my workflow and have the possibility of using Sass compiling automatically and havig the browser refreshig every time a do a change on any file. Image magik might be in the way for this workflow, so I can lossy optimize images.
3. **Sass**: All styles are written with Sass and you can find them in the assets/css folder.
4. **Node.js, NPM and Gulp**: In order to use WP Gulp, I'm using Node.js, NPM and Gulp installed in my computer. 
5. **Debug Console**: This plugin is very useful to test pieces of code that you want to use in your functions or methods.

To DO:
-----------------------------------------------

1. Improve Comments
2. Use NAMESPACES
3. Refactor Classes code where needed
4. Delete commented code
5. Finish styling single posts template
6. Decide if the sidebar will be needed in single posts
7. Build categories template
8. Create a class(es) for regitering CPT's and Custom Taxonomies easyly
9. Register CPT's for Teams, Events, Games/Results
8. Plan and build custom meta boxes and custom fields (Maybe delayed until Gutenberg is added to the core officially).