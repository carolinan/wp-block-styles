# wp-block-styles
WP Block styles are custom styles for existing blocks in the WordPress editor.


# The master plan
This is only the beginning of a library of custom block styles.

The block styles will be divided into their respective categories and blocks.

Each block style will be placed in their own folder, and consist of:

A PHP file for enqueuing block files.

A js file that names and adds the new style.

A css file with the actual style.

A png file with a preview of the style.

Preview of the image shadow block style example:
![Shadow block style preview](https://github.com/carolinan/wp-block-styles/blob/master/preview.png)

# How to use

To test all the blocks, you do not need to download the entire project.
Instead download the following files from the main directory:

wp-block-styles.php, all-block-styles.css, all-block-styles.js.

Place the files in your theme directory. Include the wp-block-styles.php, or copy the code from the file to your themes functions.php file.
Rename the prefix and the text domain.



To test individual blocks, select the folder for the category that your block type is in. Then select the block type.

For example, if you are looking for custom styles for images, you would open common -> images and select the style you are interested in.

When using the code, you need to update the prefix and the text domain.
The PHP code can be copied and pasted into your theme file, or, if you want to use it as a separate file, 
make sure that you include it.


Note: The PHP code is intended for themes and uses 'get_theme_file_uri'.

And, if you are using more than one block style, please remember to combine them into one file: 
Don't use two separate js files and two css files for such minor changes! Or even better, add the code to your themes existing files.

# How to contribute

You are welcome to submitt issues, ideas and pull requests.
-If you would like to add a style, you do not need to open an issue first, you can simply do a pr.


# Naming

Please select a short but descriptive name for the block styles.
