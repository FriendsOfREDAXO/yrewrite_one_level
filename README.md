# URL-Schema »One-level« für YRewrite

Implementiert ein kurzes URL-Schema für alle Unterseiten auf Basis von [yrewrite](https://github.com/yakamara/redaxo_yrewrite).

## Schema

__Vorher:__

`example.tld/en/coffee/beans/india/malabar.html`  _(yrewrite 1)_  
`example.tld/en/coffee/beans/india/malabar/`  _(yrewrite 2)_  

__Nachher:__

`example.tld/en/malabar`  _(ohne trailing slash)_  

⚠️ Wichtig: Das Schema ist nur dann sinnvoll, wenn Seiten innerhalb einer Sprache __nicht mehrfach vorkommen__. Gäbe es etwa den Malabar-Kaffee nicht nur in 🇮🇳 Indien, sondern auch in 🇧🇷 Brasilien, sollte dieses URL-Schema besser nicht verwendet werden!

