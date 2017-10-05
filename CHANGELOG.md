CHANGELOG
=========

### v1.0.0

Archetype One

### v0.20.0

This package has since been deprecated by Sylius and removed from 
the core. As a result, this repository is forked and maintained by
Fosyl (friendsofsylius).

The package is renamed from `sylius/archetype` to `fosyl/archetype`
and marked for a 0.20 release on Packagist.

The directory structure of the classes has been changed but should not
affect autoloading.

Compatibility with Sylius is maintained for versions 0.19 and 1.0.

In order to achieve this, the following changes have been made:

* Typehints are removed and replaced with duck-typing, so that
  instances of `Sylius\Component\Variation\Model\OptionInterface`
  and `Sylius\Component\Product\Model\ProductOptionInterface` are
  permitted when adding options.

* Methods from the `Sylius\Component\Variation\Model\VariableInterface`
  have been copied to
  `Sylius\Component\Archetype\Model\ArchetypeSubjectInterface`, so
  implementing this interface is no longer required, but the same
  method names are still expected.


### v0.13.0

* Initial dev release.
