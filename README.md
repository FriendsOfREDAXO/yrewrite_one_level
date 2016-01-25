# One-level, no suffix (yrewrite-Plugin)

__Plugin__ für das REDAXO-Addon [yrewrite](https://github.com/yakamara/redaxo_yrewrite): Implementiert ein kurzes URL-Schema für alle Unterseiten.

`example.tld/en/coffee/beans/india/malabar.html`  

wird zu

`example.tld/en/malabar`

Wichtig: Das Schema ist nur dann sinnvoll, wenn Seiten innerhalb einer Sprache _nicht mehrfach_ vorkommen. Gäbe es etwa einen Malabar-Kaffee auch in Brasilien, sollte dieses URL-Schema besser nicht verwendet werden.
