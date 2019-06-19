# Skapa en "tema länk"

## Hur man använder Region Hallands plugin "region-halland-acf-theme-links"

Nedan följer instruktioner hur du kan använda pluginet "region-halland-acf-theme-links".


## Användningsområde

Denna plugin skapar funktionalitet för en "tema länkar", dvs:

```sh
A) Lägger till fyra fält i databasen, dvs 2 fält för respektive länk. Dels rubrik, dels länk
B) Skapar ett formulär under "Temainställningar" i Wp-admin där man kan editera texterna
C) En funktion för att hämta ut respektive text som en array
```

OBS! Denna plugin förutsätter att du har installerat och aktiverat Advanced Custom Fields Pro (https://www.advancedcustomfields.com/pro/)


## Installation och aktivering

```sh
A) Hämta pluginen via Git eller läs in det med Composer
B) Installera Region Hallands plugin i Wordpress plugin folder
C) Aktivera pluginet inifrån Wordpress admin
```


## Hämta hem pluginet via Git

```sh
git clone https://github.com/RegionHalland/region-halland-acf-theme-links.git
```


## Läs in pluginen via composer

Dessa två delar behöver du lägga in i din composer-fil

Repositories = var pluginen är lagrad, i detta fall på github

```sh
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/RegionHalland/region-halland-acf-theme-links.git"
  },
],
```
Require = anger vilken version av pluginen du vill använda, i detta fall version 1.0.0

OBS! Justera så att du hämtar aktuell version.

```sh
"require": {
  "regionhalland/region-halland-acf-theme-links": "1.0.0"
},
```


## Visa "tema länkar" på en sida via "Blade"

```sh
@if(function_exists('get_region_halland_theme_links'))
  @php($myData = get_region_halland_theme_links())
    <a href="{!! $myData['link_1'] !!}">{!! $myData['text_1'] !!}</a><br>
    <a href="{!! $myData['link_2'] !!}">{!! $myData['text_2'] !!}</a><br>
@endif
```


## Exempel på hur arrayen kan se ut

```sh
array (size=4)
  'text_1' => string 'Min sida' (length=8)
  'link_1' => string 'http://minsida.se' (length=17)
  'text_2' => string 'Min andra sida' (length=14)
  'link_2' => string 'http://www.minandrasida.se' (length=26)
```


## Versionhistorik

### 1.0.0
- Första version
