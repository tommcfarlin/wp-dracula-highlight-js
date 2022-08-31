# Dracula Highlight

A WordPress plugin for adding the Dracula color scheme and Highlight.js to the Block Editor.

## 📷 Screenshot

![Dracula Highlight for WordPress](https://camo.githubusercontent.com/55841060d105182fa53b67c5d804970533c4f64630cabe656c4022ac096af2ee/68747470733a2f2f6d656469612e636c65616e73686f742e636c6f75642f6d656469612f34323031342f464a507357355754307a557953506536634c46664b775575704e49717833626e7555356e737a6b472e6a7065673f457870697265733d31363631393835303034265369676e61747572653d6c477746666b545647657e6262472d4c6334592d75786549766c752d585034337e4671687838304d454e5454503970616d7e566839656a4b416a484967694a576c4a57483455737a2d426272624d646b447e61684d4b6b347656563469316f647054474c65455534394553667e6b517a666e2d527534747e707157426c6f7e7a5066614e416e627a75653556734a4b574130644650314e43477e676d7132646e67465967626c435562636e4368484348364b41557e4471744f6c755656694a756b3631425a774b795767644b6d6f575449597e6d725065784f4b506f53616f68637e4f484a4b4636726b46755752746a704f65325253782d4d596251757133494a7a51474d707474762d6373434d7176316e4a6b61634a322d57733968775756394f76436f375062666448704669464d63447869354766516d387e75384f696b2d7072622d61514e31684b6551663247634c68504b675f5f264b65792d506169722d49643d4b3236394a4d4154395a4634475a)

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
