# cemerson/trespass

A library for modifying private properties of PHP 7 classes from an external context.

Whether it's a good idea to trample all over private properties or not, I don't know, but there may be several reasons
you would want to. My use case was providing a database layer with the opportunity to inject insert IDs, current dates
etc into an entity class without providing setters which user-land code could abuse or misuse.

Usage is very simple - simply call the static method `Trespass::setProperties()` and pass in the object and an array of
property values you want to set.

Future versions of this library may offer more options such as the ability to not overwrite non-empty properties, or
checking for the existence of them before setting. Suggestions, Issues & Pull Requests all welcome!
