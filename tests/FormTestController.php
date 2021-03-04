<?php

namespace AntonyThorpe\FormFieldAdditionalClasses\Tests;

use SilverStripe\Control\Controller;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\Dev\TestOnly;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\CompositeField;
use SilverStripe\Forms\FieldGroup;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\Form;
use SilverStripe\Forms\FormAction;
use SilverStripe\Forms\OptionsetField;
use SilverStripe\Forms\TextField;
use SilverStripe\View\SSViewer;

class FormTestController extends Controller implements TestOnly
{
    protected $template = 'BlankPage';

    public function Link($action = null)
    {
        return Controller::join_links(
            'FormTestController',
            $this->getRequest()->latestParam('Action'),
            $this->getRequest()->latestParam('ID'),
            $action
        );
    }

    public function Form()
    {
        $form = Form::create(
            $this,
            'Form',
            FieldList::create(
                TextField::create('Spaceship', 'Spaceship'),
                CheckboxField::create('CheckboxFieldExample', 'Checkbox Field Example'),
                CompositeField::create(
                    TextField::create('CompositeFieldOne', 'Composite Field One'),
                    TextField::create('CompositeFieldTwo', 'Composite Field Two'),
                )->setTitle('Composite Field Name'),
                OptionsetField::create(
                    'Accessories',
                    'Accessories',
                    array(
                        'Flying High DVD' => 'Flying High DVD',
                        'Zero Gravity Pillow' => 'Zero Gravity Pillow',
                        'Rocket Replica' => 'Rocket Replica'
                    ),
                    'Zero Gravity Pillow'
                )->setDescription('Make your selection'),
                FieldGroup::create(
                    TextField::create('FieldGroupFieldOne', 'FieldGroup Field One'),
                    TextField::create('FieldGroupFieldTwo', 'FieldGroup Field Two'),
                )->setTitle('Blast Off')
                // add any new fields here and then write assertion tests
            ),
            FieldList::create(
                FormAction::create('doSubmit', 'Submit')
            )
        );
        return $form;
    }
}
