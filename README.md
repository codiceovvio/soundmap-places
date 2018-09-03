# Sound Map Places

A custom content extension for Sound Map plugin.

# WARNING!
#### This plugin extends [Sound Map](https://github.com/codiceovvio/soundmap/) which is under active development and not currently ready for production!
Use it only to test its features and to [submit any bug](https://github.com/codiceovvio/soundmap-places/issues) you may find. Many features are listed but not currently implemented.

## Contents

Scaffolded from WordPress Plugin Boilerplate, includes some extra features:


## Features

* This plugin was scaffolded from [WordPress Plugin Boilerplate](https://github.com/DevinVinson/WordPress-Plugin-Boilerplate) with a [custom shell script](https://github.com/codiceovvio/WordPress-Plugin-Boilerplate/blob/develop/wp-plugin-boilerplate.sh), and includes some extra features.
* The boilerplate is based on the [Plugin API](http://codex.wordpress.org/Plugin_API), [Coding Standards](http://codex.wordpress.org/WordPress_Coding_Standards), and [Documentation Standards](https://make.wordpress.org/core/handbook/best-practices/inline-documentation-standards/php/).
* The boilerplate uses a strict file organization scheme that makes it easy to organize the files that compose the plugin.

## Installation

Sound Map Places plugin can be installed directly into your plugins folder like any other plugin. The only requirement is to have [Sound Map](https://github.com/codiceovvio/soundmap/) plugin alerady installed and activated. Sound Map Places will use many features and methods from Sound Map to make its job.

It's safe to activate the plugin at this point. All code on master branch should not have breaking errors or changes.

## License

Sound Map Places is licensed under the GPL v2 or later.

> This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License, version 2, as published by the Free Software Foundation.

> This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

> You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA

A copy of the license is included in the root of the plugin’s directory. The file is named `LICENSE.txt`.

## Important Notes

### Includes

Note that if you include your own classes, or third-party libraries, there are three locations in which said files may go:

* `soundmap/includes` is where functionality shared between the admin area and the public-facing parts of the site reside
* `soundmap/admin` is for all admin-specific functionality
* `soundmap/public` is for all public-facing functionality

Sound Map Places loads when Sound Map plugin is fully loaded, firing a 'soundmap_loaded' hook which is used by Sound Map Places to initialize.

### What About Other Features?

More on these here later on...

# Credits

The main Sound Map plugin is currently being developed by [Codice Ovvio](https://github.com/codiceovvio).

## Development, Documentation, and More

If you’re interested in helping out with the development or with writing documentation, please [let me know](codiceovvio@gmail.com) .
