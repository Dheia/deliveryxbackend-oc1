## GeoLocaleSwitcher

#### About

Plugin usage is very simple. Install it and go to **Settings** -> **GeoLocaleSwitcher** to enable it.

When enabled in settings, plugin forwards the visitor to appropriate language version of the website, basing on the detected location:

For example: website.com has 3 languages: English, German and French.

* When visitor from Germany is detected, plugin redirects her/him to website.com/de
* When visitor from French is detected, plugin redirects her/him to website.com/fr
* When visitor from United States, Poland or China is detected, plugin triggers website.com in default language (/en).


#### Database

Database is stored in voipdeploy/geolocaleswitcher/database/database.mmdb. It has Creative Commons Attribution-ShareAlike 3.0 Unported License.  You can change it to any compatible mmdb geolocation database you want, we will **never** upgrade this part of the plugin.

Link to the details of the database: http://dev.maxmind.com/geoip/legacy/geolite/

#### Components

There are two components attached to this plugin. 


**GeoLocaleSwitcher Component**

It is simple component that displays detected county and current locale (eg United States - English) and links to page set up in Component Properties as *Language Change Page*.  


**LocaleAsk Component**

This component is for multilanguage countries. It takes data from **GeoLocaleRepository class**, checks available languages for detected country and display them.

For example your website has three language versions: *English*, *Spanish* and *French*. For visitors from France, component will display only link to *French* locale, for visitors from USA, it will display *English* and *Spanish* and for visitors from Canada, it will display *English* and *French*.

You may want to use this component and **LocalePicker** component from Rainlab Translate to provide your visitors fully featured language change page.
  

#### More

Check demo of this plugin at [demo.keios.eu](http://demo.keios.eu/)!