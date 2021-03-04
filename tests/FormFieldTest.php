<?php

namespace AntonyThorpe\FormFieldAdditionalClasses\Tests;

use SilverStripe\Dev\SapphireTest;
use SilverStripe\Forms\FormField;

/**
 * FormFieldTest
 */
class FormFieldTest extends SapphireTest
{
    public function testAddSingleClass()
    {
        $field = FormField::create('Example', 'Example')
            ->addHolderClass('single-holder')
            ->addHolderValidationMessageClass('single-holder-validation-message')
            ->addHolderDescriptionClass('description single-holder-description')
            ->addLeftLabelClass('left single-left-label')
            ->addRightLabelClass('right single-right-label')
            ->addMiddleColumnClass('middleColumn single-middle-column');

        $this->assertEquals(
            'message single-holder-validation-message',
            $field->getHolderValidationMessageClass(),
            'Holder Validation Message class is added'
        );

        $this->assertEquals(
            'description single-holder-description',
            $field->getHolderDescriptionClass(),
            'Holder Discription class is added'
        );

        $this->assertEquals(
            'left single-left-label',
            $field->getLeftLabelClass(),
            'left single-left-label class is added'
        );

        $this->assertEquals(
            'right single-right-label',
            $field->getRightLabelClass(),
            'Right Label class is added'
        );

        $this->assertEquals(
            'middleColumn single-middle-column',
            $field->getMiddleColumnClass(),
            'Middle Column class is added'
        );
    }

    public function testAddMultipleClasses()
    {
        $field = FormField::create('Example', 'Example')
            ->addHolderClass('single-holder second-holder')
            ->addHolderValidationMessageClass('single-holder-validation-message second-holder-validation-message')
            ->addHolderDescriptionClass('description single-holder-description second-holder-description')
            ->addLeftLabelClass('left single-left-label second-left-label')
            ->addRightLabelClass('right single-right-label second-right-label')
            ->addMiddleColumnClass('middleColumn single-middle-column second-middle-column');

        $this->assertEquals(
            'message single-holder-validation-message second-holder-validation-message',
            $field->getHolderValidationMessageClass(),
            'Holder Validation Message classes have been added'
        );

        $this->assertEquals(
            'description single-holder-description second-holder-description',
            $field->getHolderDescriptionClass(),
            'Holder Description classes have been added'
        );

        $this->assertEquals(
            'left single-left-label second-left-label',
            $field->getLeftLabelClass(),
            'Left Label classes have been added'
        );

        $this->assertEquals(
            'right single-right-label second-right-label',
            $field->getRightLabelClass(),
            'Right Label classes have been added'
        );

        $this->assertEquals(
            'middleColumn single-middle-column second-middle-column',
            $field->getMiddleColumnClass(),
            'Middle Column classes have been added'
        );
    }

    public function testRemoveSingleClass()
    {
        $field = FormField::create('Example', 'Example')
            ->addHolderClass('single-holder second-holder')
            ->addHolderValidationMessageClass('single-holder-validation-message second-holder-validation-message')
            ->addHolderDescriptionClass('description single-holder-description second-holder-description')
            ->addLeftLabelClass('left single-left-label second-left-label')
            ->addRightLabelClass('right single-right-label second-right-label')
            ->addMiddleColumnClass('middleColumn single-middle-column second-middle-column');

        $field->removeHolderClass('second-holder')
            ->removeHolderValidationMessageClass('second-holder-validation-message')
            ->removeHolderDescriptionClass('second-holder-description')
            ->removeLeftLabelClass('second-left-label')
            ->removeRightLabelClass('second-right-label')
            ->removeMiddleColumnClass('second-middle-column');

        $this->assertEquals(
            'message single-holder-validation-message',
            $field->getHolderValidationMessageClass(),
            'single-holder-validation-message class remains'
        );

        $this->assertEquals(
            'description single-holder-description',
            $field->getHolderDescriptionClass(),
            'description single-holder-description class remains'
        );

        $this->assertEquals(
            'left single-left-label',
            $field->getLeftLabelClass(),
            'left single-left-label class remains'
        );

        $this->assertEquals(
            'right single-right-label',
            $field->getRightLabelClass(),
            'right single-right-label class remains'
        );

        $this->assertEquals(
            'middleColumn single-middle-column',
            $field->getMiddleColumnClass(),
            'middleColumn single-middle-column class remains'
        );
    }

    public function testRemoveMultipleClass()
    {
        $field = FormField::create('Example', 'Example')
            ->addHolderClass('single-holder second-holder second-holder third-holder')
            ->addHolderValidationMessageClass('single-holder-validation-message second-holder-validation-message third-holder-validation-message')
            ->addHolderDescriptionClass('description single-holder-description second-holder-description third-holder-description')
            ->addLeftLabelClass('left single-left-label second-left-label third-left-label')
            ->addRightLabelClass('right single-right-label second-right-label third-right-label')
            ->addMiddleColumnClass('middleColumn single-middle-column second-middle-column third-middle-column');

        $field->removeHolderClass('second-holder third-holder')
            ->removeHolderValidationMessageClass('second-holder-validation-message third-holder-validation-message')
            ->removeHolderDescriptionClass('second-holder-description third-holder-description')
            ->removeLeftLabelClass('second-left-label third-left-label')
            ->removeRightLabelClass('second-right-label third-right-label')
            ->removeMiddleColumnClass('second-middle-column third-middle-column');

        $this->assertEquals(
            'message single-holder-validation-message',
            $field->getHolderValidationMessageClass(),
            'single-holder-validation-message class remains'
        );

        $this->assertEquals(
            'description single-holder-description',
            $field->getHolderDescriptionClass(),
            'description single-holder-description class remains'
        );

        $this->assertEquals(
            'left single-left-label',
            $field->getLeftLabelClass(),
            'left single-left-label class remains'
        );

        $this->assertEquals(
            'right single-right-label',
            $field->getRightLabelClass(),
            'right single-right-label class remains'
        );

        $this->assertEquals(
            'middleColumn single-middle-column',
            $field->getMiddleColumnClass(),
            'middleColumn single-middle-column class remains'
        );
    }
}
