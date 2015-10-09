# Craft Youtube Filter Plugin
A very simple plugin for Craft CMS to extract a Youtube ID from an embed code or URL

## Installation

To install Craft Youtube Filter PLugin, follow these steps:

Upload the craft-youtube-plugin/ folder to your craft/plugins/ folder.
Go to Settings > Plugins from your Craft control panel and enable the Craft Youtube Filter plugin.

## Usage

If your entry has a field with a Youtube URL or embed code, do the following to extract the ID:

```jinja
{{ theFieldId|YoutubeFilter }}
```

---
Credit for the extraction function from [this Stack Exchange answer](http://stackoverflow.com/a/6556662 "Thanks to hakre")


