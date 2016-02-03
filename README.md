# One-level, no suffix (yrewrite-Plugin)

__Plugin__ für das REDAXO-Addon [yrewrite](https://github.com/yakamara/redaxo_yrewrite): Implementiert ein kurzes URL-Schema für alle Unterseiten.

`example.tld/en/coffee/beans/india/malabar.html`  _(yrewrite 1)_  
`example.tld/en/coffee/beans/india/malabar/`  _(yrewrite 2)_  

wird zu

`example.tld/en/malabar`  _(ohne trailing slash)_  

Wichtig: Das Schema ist nur dann sinnvoll, wenn Seiten innerhalb einer Sprache _nicht mehrfach_ vorkommen. Gäbe es etwa einen Malabar-Kaffee auch in Brasilien, sollte dieses URL-Schema besser nicht verwendet werden.


## Installation

1. Paket im Plugins-Ordner von yrewrite ablegen: `redaxo/src/addons/yrewrite/plugins/one-level-no-suffix`  
_Hilfe: Sollte der Unterordner `plugins` nicht existieren, einfach einen anlegen!_
2. Plugin im REDAXO-Adminbereich aktivieren.
3. Cache löschen, um URLs neu zu generieren.
