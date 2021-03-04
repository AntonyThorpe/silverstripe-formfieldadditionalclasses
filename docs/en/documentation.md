# Documentation of Silverstripe Form Field Additional Classes
New `FormField` methods listed below: 
## Adding New Classes to a Form Field
* `addHolderClass` adds a CSS class to the opening `div` of the Field Holder template
* `addHolderValidationMessageClass` provides the class on the validation `span`
* `addHolderDescriptionClass` adds a CSS class to the description `div`
* `addLeftLabelClass` and `addRightLabelClass` adds classes to the left and right labels
* `addMiddleColumnClass` adds a CSS class to the Middle Column `div`
## Removing Existing Classes from a Form Field
* `removeHolderClass` removes a CSS class from the opening `div` of the Field Holder template
* `removeHolderValidationMessageClass` removed a CSS class on the validation `span`
* `removeHolderDescriptionClass` removes a CSS class from the description `div`
* `removeLeftLabelClass` and `removeRightLabelClass` removes classes from the left and right labels
* `removeMiddleColumnClass` removes a CSS class from the Middle Column `div`
## Getting Classes for a Form Field
* `getHolderClass` provides the CSS classes for the opening `div` of the Field Holder template.  In a template `$HolderClass`.
* `getHolderValidationMessageClass` provides the CSS classes for the validation `span`.  In a template `$HolderValidationMessageClass`.
* `getHolderDescriptionClass` provides the CSS classes for the description `div`.  In a template `$HolderDescriptionClass`.
* `getLeftLabelClass` and `getRightLabelClass` provides the classes for the left and right labels.  In a template either `$LeftLabelClass` or `$RightLabelClass`.
* `getMiddleColumnClass` provides the CSS classes for the Middle Column `div`.  In a template `$MiddleColumnClass`.
