# WP-CLI Post Generator

WP-CLI commands to generate dummy posts with images and terms.

This WordPress plugin is a convenient way to use all the [WP-CLI](http://wp-cli.org/) commands from these plugins. 
* [Image Gen by trepmal](https://github.com/trepmal/image-gen/)
* [Post Gen by trepmal](https://github.com/trepmal/post-gen/)
* [Term Gen by keesiemeijer](https://github.com/keesiemeijer/term-gen)

Use composer to load them as a dependency. See the installation instructions below.

## Installation
clone this repository in the plugins folder
```bash
clone https://github.com/keesiemeijer/wp-cli-post-generator
```

Go to the plugin folder and install the dependencies.
```bash
cd wp-cli-post-generator

composer install
```

Activate the plugin
```bash
wp plugin activate wp-cli-post-generator
```

## Usage
If this plugin is installed and activated you can use the commands provided by the plugins above.
For more information about these commands see the documation of the plugins itself.

### Basic Usage
Create 100 posts
```bash
wp post-gen create 100
```

Create 100 images
```bash
for ((i=1; i<=100; ++i)); do wp image-gen create "image-landscape"$i --text=image-$i --width=1024 --height=768 --textsize=120; done
```

Insert 100 images in post content
```bash
wp image-gen attach 10 --insert --align=random  --size=random
```
**Note**: Posts must first be created to have images inserted or attached (see above).

Create 100 categories
```bash
wp term-gen create category --count=100 --max_depth=6
```

Assign category terms to 100 posts
```bash
wp term-gen assign category --max-terms=9 --posts=100 --post-type=post
```
**Note**: Terms from a taxonomy must first be created to assign them (see above).



