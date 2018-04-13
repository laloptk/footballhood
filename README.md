

Footballhood theme
===

This theme is in its early stages, I'm building it to create a blog about Football in Mexico, but I also pretend this will set the basis for building a more complex framework that will help build a more robust theme that I can use in the future in my personal projects.

For now, theres only a couple of classes inside the inc folder, and I also built a page template named Page Main (page-main.php). That template is meant to be used in the homepage and maybe using the same code with other pages that will need to list several posts from different categories. 

The tools I'm using for building this theme:

1. *_Underscores Starters Theme* (https://underscores.me): I want this theme to be very fast, so I don't want to use pre-built themes or builders that have tons of generic stuff and can be a burden for site speed. 
2. WP Gulp (https://github.com/ahmadawais/WPGulp)
Beeing able to focus on the fun stuff, or at least reduce the repetitve tasks makes development faster, so I use WP Gulp as a way to improve my workflow and have the possibility of using Sass compiling automatically and havig the browser refreshig every time a do a change on any file. Image magik might be in the way for this workflow, so I can lossy optimize images.
3. Sass
All styles are written with Sass and you can find them in the assets/css folder.
4. Node.js, NPM and Gulp
In order to use WP Gulp, I'm using Node.js, NPM and Gulp installed in my computer. 
5. Debug Console
This plugin is very useful to test pieces of code that you want to use in your functions or methods.

Getting Started
---------------

If you want to keep it simple, head over to https://underscores.me and generate your `_s` based theme from there. You just input the name of the theme you want to create, click the "Generate" button, and you get your ready-to-awesomize starter theme.

If you want to set things up manually, download `_s` from GitHub. The first thing you want to do is copy the `_s` directory and change the name to something else (like, say, `megatherium-is-awesome`), and then you'll need to do a five-step find and replace on the name in all the templates.

1. Search for `'_s'` (inside single quotations) to capture the text domain.
2. Search for `_s_` to capture all the function names.
3. Search for `Text Domain: _s` in `style.css`.
4. Search for <code>&nbsp;_s</code> (with a space before it) to capture DocBlocks.
5. Search for `_s-` to capture prefixed handles.

OR

1. Search for: `'_s'` and replace with: `'megatherium-is-awesome'`
2. Search for: `_s_` and replace with: `megatherium_is_awesome_`
3. Search for: `Text Domain: _s` and replace with: `Text Domain: megatherium-is-awesome` in `style.css`.
4. Search for: <code>&nbsp;_s</code> and replace with: <code>&nbsp;Megatherium_is_Awesome</code>
5. Search for: `_s-` and replace with: `megatherium-is-awesome-`

Then, update the stylesheet header in `style.css`, the links in `footer.php` with your own information and rename `_s.pot` from `languages` folder to use the theme's slug. Next, update or delete this readme.

Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!
