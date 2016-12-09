=== WP Easy Mode ===
Contributors:      godaddy, fjarrett, jonathanbardo
Tags:              admin, installation, registration, setup, wizard
Requires at least: 4.1
Tested up to:      4.6
Stable tag:        2.0.9

Helping users launch their new WordPress site in just a few clicks.

== Description ==

The WP Easy Mode plugin is designed to help users (especially those new to WordPress) get their site up and running in just a few easy steps.

By default, these steps are:

1. Start - Are you new to WordPress or a seasoned pro?
2. Settings - Set basic options such as the site title and tagline.
3. Contact - Set basic contact info such as email and phone number.
4. Theme - Browse through pre-configured website packages.

Bonus: Behind the scenes, WP Easy Mode will use GeoIP detection to automatically set the Timezone String and Start of Week settings in WordPress. We call them "Smart Defaults".

== Changelog ==

= 2.0.9 - August 9, 2016 =

* Fix: Textdomain on D3 ontology fallbacks.

Props [@fjarrett](https://github.com/fjarrett), [@jonathanbardo](https://github.com/jonathanbardo)

= 2.0.8 - August 2, 2016 =

* New: Support serialized metadata in SQL dumps.

Props [@fjarrett](https://github.com/fjarrett), [@jonathanbardo](https://github.com/jonathanbardo)

= 2.0.7 - July 28, 2016 =

* Tweak: Bring back the Image API.

Props [@fjarrett](https://github.com/fjarrett)

= 2.0.6 - July 6, 2016 =

* New: Support for commercial themes.
* New: Fallback support for local themes if API is unreachable.
* New: Fallback support if Image API is unreachable.
* Tweak: Temporarily disable Image API.
* Tweak: Translations for fallback verticals list.
* Fix: Possible fatal error after self-destruct.

Props [@fjarrett](https://github.com/fjarrett), [@jonathanbardo](https://github.com/jonathanbardo)

= 2.0.5 - June 28, 2016 =

* New: Support for GEM starter accounts.
* Tweak: Improved architecture for the Images API.

Props [@fjarrett](https://github.com/fjarrett), [@jonathanbardo](https://github.com/jonathanbardo)

= 2.0.4 - May 26, 2016 =

* New: Select2 industry picker.
* New: Language support for `mr`.
* New: Self-destruct for standalone mode.
* Fix: Pro Connect checkbox not saved on submit.
* Fix: Social profiles not saved on submit.

Props [@fjarrett](https://github.com/fjarrett), [@jonathanbardo](https://github.com/jonathanbardo), [@chenrob](https://github.com/chenrob)

= 2.0.3 - April 28, 2016 =

* New: Emulate theme previews on various device sizes.
* Fix: jQuery syntax that is no longer valid.
* Fix: Accent characters in theme preview URLs.
* Fix: Strip slashes on the contact address value.

Props [@jonathanbardo](https://github.com/jonathanbardo)

= 2.0.2 - April 12, 2016 =

* New: Language support for `hi_IN`.
* Tweak: Include plugin version in log.
* Tweak: Improved acceptance testing.
* Fix: Country code detection and save.

Props [@fjarrett](https://github.com/fjarrett), [@jonathanbardo](https://github.com/jonathanbardo)

= 2.0.1 - March 24, 2016 =

* Fix: Flush object cache after import.
* Fix: Incorrect translation string in `fr_FR` locale.

Props [@jonathanbardo](https://github.com/jonathanbardo)

= 2.0.0 - March 23, 2016 =

* New: WYSIWYG website previews and importer.
* New: Suggested header images based on industry.
* New: Step to enter contact information.

Props [@fjarrett](https://github.com/fjarrett), [@jonathanbardo](https://github.com/jonathanbardo)

= 1.0.3 - December 21, 2015 =

* New: Self-destruct when used as a standalone plugin.
* New: Detect manual migrations and do not run in those cases.

Props [@fjarrett](https://github.com/fjarrett), [@jonathanbardo](https://github.com/jonathanbardo)

= 1.0.2 - December 15, 2015 =

* New: Asian language support
* Tweak: Only require `WP_DEBUG` for reset command.
* Tweak: Cover more scenarios in acceptance tests.
* Fix: Some sample content translations missing.
* Fix: Table drop error during reset command.

Props [@fjarrett](https://github.com/fjarrett), [@jonathanbardo](https://github.com/jonathanbardo)

= 1.0.1 - November 30, 2015 =

* New: Customizer walk-through video modal for English users.
* New: Customizer help text modal for non-English users.
* Tweak: Change the alternate GeoIP API source.
* Tweak: Reset `WPLANG` during CLI reset.
* Fix: Fallback sample page content to English.
* Fix: Add missing locales for sample page content.

Props [@fjarrett](https://github.com/fjarrett), [@jonathanbardo](https://github.com/jonathanbardo)

= 1.0.0 - November 10, 2015 =

* Initial release.

Props [@fjarrett](https://github.com/fjarrett), [@jonathanbardo](https://github.com/jonathanbardo)
