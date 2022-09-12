# Dracula Highlight

A WordPress plugin for adding the Dracula color scheme and Highlight.js to the Block Editor.

## 📷 Screenshot

![Dracula Highlight for WordPress](https://cdn-std.droplr.net/files/acc_432097/EmBzQG)

## 💾 Download

1. Navigate to the [Releases](https://github.com/tommcfarlin/wp-dracula-highlight-js/releases) page.
2. Click on the link that reads _Source code (zip)_ in the top most release.

## 🖥️ Installation

Note: The name of the archive may be different but should include the title of the plugin.

### 1. Using the WordPress Dashboard

1. Navigate to the _Add New_ Plugin Dashboard
2. Select `wp-dracula-highlight-js.zip` from your computer
3. Upload the archive
4. Activate the plugin on the WordPress Plugin Dashboard

### 2. Using FTP

1. Extract `wp-dracula-highlight-js.zip`to your computer
2. Upload the `wp-dracula-highlight-js` directory to your `wp-content/plugins` directory
4. Activate the plugin on the WordPress Plugin Dashboard

### 3. Git

1. Navigate to the `plugins` directory of your WordPress installation
2. From the terminal, run `https://github.com/tommcfarlin/wp-dracula-highlight-js.git`

## 🔌 Using the Plugin

1. In the Block Editor, make sure that the code you want styled is placed in a _Preformatted_ block. It should look [like this](https://cln.sh/Udwv2I) in the editor.
2. Preview or view the post in the frontend view of the site and it should appear [like this](https://cln.sh/eL40jB).

## 📝 Notes

This plugin does not check for the presence of [Highlight.js](https://highlightjs.org/) or the Dracula stylesheet before adding this to WordPress. It's intended to be an all-in-one solution for the Block Editor.

## 📋 Future Features
- [ ] Check to see if highlight.js is already loaded
- [ ] Add editor stylesheet
- [ ] Improve performance by using PHP to add classes to the document rather than JavaScript
- [ ] Remove the need for `!important` in stylesheets.
