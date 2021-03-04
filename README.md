# silverstripe-formfieldadditionalclasses
Through new methods on the FormField, CSS classes can be added to any Field Holder template.  That is, to the opening div, Validation span, Middle Column/Description div, and Left/Right label.

[![Build Status](https://travis-ci.org/AntonyThorpe/silverstripe-formfieldadditionalclasses.svg?branch=master)](https://travis-ci.org/AntonyThorpe/silverstripe-formfieldadditionalclasses)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/AntonyThorpe/silverstripe-formfieldadditionalclasses/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/AntonyThorpe/silverstripe-formfieldadditionalclasses/?branch=master)
[![Latest Stable Version](https://poser.pugx.org/antonythorpe/silverstripe-formfieldadditionalclasses/v/stable)](https://packagist.org/packages/antonythorpe/silverstripe-formfieldadditionalclasses)
[![Total Downloads](https://poser.pugx.org/antonythorpe/silverstripe-formfieldadditionalclasses/downloads)](//packagist.org/packages/antonythorpe/silverstripe-formfieldadditionalclasses)
[![Latest Unstable Version](https://poser.pugx.org/antonythorpe/silverstripe-formfieldadditionalclasses/v/unstable)](https://packagist.org/packages/antonythorpe/silverstripe-formfieldadditionalclasses)
[![License](https://poser.pugx.org/antonythorpe/silverstripe-formfieldadditionalclasses/license)](https://packagist.org/packages/antonythorpe/silverstripe-formfieldadditionalclasses)

## Why use this Silverstripe module?
For styling of Form Fields

## How it works
Extends the `FormField` class

## Example
```php
    CheckboxField::create('Example', 'Checkbox Example')
        ->addHolderClass('form-check')
        ->addRightLabelClass('form-check-label')
        ->addExtraClass('form-check-input') // note: existing SilverStripe functionality
        ->addHolderValidationMessageClass('alert alert-danger')
        ->addHolderDescriptionClass('blueday');
```
Would create:
```html
    <div id="Form_Form_CheckboxFieldExample_Holder" class="field checkbox form-check">
        <input type="checkbox" name="Example" value="1" class="checkbox form-check-input" id="Form_Form_Example">
        <label class="right form-check-label" for="Form_Form_Example">Checkbox Example</label>
        <span class="message alert alert-danger bad">Opps!</span>
        <span class="description blueday">Helpful note to the user</span>
    </div>
```

## Approach of this Module
The classes in this module mostly apply to the Field Holder template.  The central `$Field` remains untouched (the existing SilverStripe function `addExtraClass` can be used to add CSS classes to this).  Note: the `addExtraClass` has been removed from the holder templates now that there are new methods to use.  In addition, default classes are in place that match the existing classes in the SilverStripe holder templates so there should not be too much carnage when installing this module into an existing project.

## Requirements
[Silverstripe](http://www.silverstripe.org)

## Documentation
[Index](/docs/en/index.md)

## Pull Requests are Welcome
Feel free to send a pull request.  Please don't forget the tests!

## Support
None sorry.

## Change Log
[Link](changelog.md)

## Contributions
[Link](contributing.md)

## License
[MIT](LICENSE)
