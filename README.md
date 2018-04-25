Bolt CMS 3 - Twig json_decode filter
======================

This extension boasts Bolt CMS 3 with an additional Twig filter to decode json data with json_decode function.

To use this extension, just add `json_decode()` as a filter next to any text-containing field with json data type.

Usage:

```twig
    {% set json = record.jsonfield|json_decode() %}
    {{ json.title }}
```
