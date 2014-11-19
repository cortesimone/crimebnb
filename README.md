crimebnb
========

Crimebnb is a mapping demo that maps available SF Airbnb properties against local SF crime location data.

Curious about how this looks in action? Check out the [demo page].

### Airbnb data

A PHP script scrapes the first page of listings for San Francisco and writes them to a json file stored on the same web server.

The PHP scraper makes use of [PHP Simple HTML DOM Parser] by S.C. Chen.

### Crime data

The crime data is provided courtesy of [sanfrancisco.crimespotting.org]. The index.html file includes an [API] call that pulls down 300 crimes between the beginning of 2010-01-01 through to 2014-10-01.

This number can easily be manipulated to pull down more crime data, however I've set it low so that the demo loads up quickly.

The following crimes were included in the data:

* Aggravated assault
* Murder
* Robbery
* Simple assualt
* Arson
* Burglary
* Theft
* Vandalism
* Vehicle theft
* Alcohol
* Disturbing the peace
* Narcotics
* Prostitution

The crime location data is then stored in an array and a heatmap is generated using the [Google Maps V3 API].


###License

MIT

###Legal & Acknowledgements

Crimebnb is in no way affiliated or condoned by Airbnb.
Location listing data and the Bélo logo are the property of Airbnb.


[demo page]:http://devinmancuso.com/projects/crimebnb
[PHP Simple HTML DOM Parser]:http://simplehtmldom.sourceforge.net/
[sanfrancisco.crimespotting.org]:http://sanfrancisco.crimespotting.org
[API]:http://sanfrancisco.crimespotting.org/api
[Google Maps V3 API]:https://developers.google.com/maps/documentation/javascript/examples/layer-heatmap
