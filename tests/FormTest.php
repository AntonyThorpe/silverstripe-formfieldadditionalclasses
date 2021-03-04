<?php

namespace AntonyThorpe\FormFieldAdditionalClasses\Tests;

use SilverStripe\Dev\FunctionalTest;
use AntonyThorpe\FormFieldAdditionalClasses\Tests\FormTestController;

/**
 * FormTest
 *
 * Controller tests
 */
class FormTest extends FunctionalTest
{
    protected static $disable_theme = true;

    protected static $extra_controllers = [
        FormTestController::class
    ];

    public function testFormWithStandardClasses()
    {
        $page = $this->get('FormTestController');
        $this->assertEquals(200, $page->getStatusCode(), "a page should load");
        $body = $page->getBody();

        $this->assertContains(
            '<div id="Form_Form_Spaceship_Holder" class="field text">',
            $body,
            'TextField holder with default classes'
        );

        $this->assertExactHTMLMatchBySelector(
            '#Form_Form_Spaceship_Holder label.left',
            [
                '<label class="left" for="Form_Form_Spaceship">Spaceship</label>'
            ]
        );

        $this->assertExactHTMLMatchBySelector(
            '#Form_Form_Spaceship_Holder .middleColumn',
            [
                '<div class="middleColumn"><input type="text" name="Spaceship" class="text" id="Form_Form_Spaceship" /></div>'
            ]
        );

        $this->assertContains(
            '<div id="Form_Form_CheckboxFieldExample_Holder" class="field checkbox">',
            $body,
            'CheckboxField holder with default classes'
        );

        $this->assertExactHTMLMatchBySelector(
            '#Form_Form_CheckboxFieldExample_Holder label.right',
            [
                '<label class="right" for="Form_Form_CheckboxFieldExample">Checkbox Field Example</label>'
            ]
        );

        $this->assertContains(
            '<div class="CompositeField field composite" id="Form_Form_CompositeFieldOneCompositeFieldTwo_Holder">',
            $body,
            'CompositeField holder with default classes'
        );

        $this->assertExactHTMLMatchBySelector(
            '#Form_Form_CompositeFieldOne_Holder label.left',
            [
                '<label class="left" for="Form_Form_CompositeFieldOne">Composite Field One</label>'
            ]
        );

        $this->assertExactHTMLMatchBySelector(
            '#Form_Form_CompositeFieldOne_Holder .middleColumn',
            [
                '<div class="middleColumn"><input type="text" name="CompositeFieldOne" class="text" id="Form_Form_CompositeFieldOne" /></div>'
            ]
        );

        $this->assertContains(
            '<div id="Form_Form_Accessories_Holder" class="field optionset">',
            $body,
            'OptionsetField holder with default classes'
        );

        $this->assertExactHTMLMatchBySelector(
            '#Form_Form_Accessories_Holder label.left',
            [
                '<label class="left">Accessories</label>'
            ]
        );

        $this->assertPartialHTMLMatchBySelector(
            '#Form_Form_Accessories_Holder div.middleColumn',
            [
                '<div class="middleColumn">
<ul class="optionset" id="Form_Form_Accessories" role="listbox">
<li class="odd valFlying_High_DVD" role="option"><input id="Form_Form_Accessories_Flying_High_DVD" class="radio" name="Accessories" type="radio" value="Flying High DVD" /> <label for="Form_Form_Accessories_Flying_High_DVD">Flying High DVD</label></li>
<li class="even valZero_Gravity_Pillow" role="option"><input id="Form_Form_Accessories_Zero_Gravity_Pillow" class="radio" name="Accessories" type="radio" value="Zero Gravity Pillow" checked="checked" /> <label for="Form_Form_Accessories_Zero_Gravity_Pillow">Zero Gravity Pillow</label></li>
<li class="odd valRocket_Replica" role="option"><input id="Form_Form_Accessories_Rocket_Replica" class="radio" name="Accessories" type="radio" value="Rocket Replica" /> <label for="Form_Form_Accessories_Rocket_Replica">Rocket Replica</label></li>
</ul>
</div>'
            ]
        );

        $this->assertPartialHTMLMatchBySelector(
            '#Form_Form_Accessories_Holder span.description',
            [
                '<span class="description">Make your selection</span>'
            ]
        );

        $this->assertContains(
            '<div id="BlastOff" class="field fieldgroup">',
            $body,
            'FieldGroupField holder with default classes'
        );

        $this->assertExactHTMLMatchBySelector(
            '#Form_Form_FieldGroupFieldOne_Holder label.left',
            [
                '<label class="fieldholder-small-label left" for="Form_Form_FieldGroupFieldOne">FieldGroup Field One</label>'
            ]
        );

        $this->assertExactHTMLMatchBySelector(
            '#BlastOff div.middleColumn',
            [
                '<div class="middleColumn fieldgroup">
<div class="fieldgroup-field first odd">
<div class="fieldholder-small field text" id="Form_Form_FieldGroupFieldOne_Holder"><label class="fieldholder-small-label left" for="Form_Form_FieldGroupFieldOne">FieldGroup Field One</label> <input type="text" name="FieldGroupFieldOne" class="text" id="Form_Form_FieldGroupFieldOne" /></div>
</div>
<div class="fieldgroup-field last even">
<div class="fieldholder-small field text" id="Form_Form_FieldGroupFieldTwo_Holder"><label class="fieldholder-small-label left" for="Form_Form_FieldGroupFieldTwo">FieldGroup Field Two</label> <input type="text" name="FieldGroupFieldTwo" class="text" id="Form_Form_FieldGroupFieldTwo" /></div>
</div>
</div>'
            ]
        );

        // add additional tests here after adding to the form below
    }
}
