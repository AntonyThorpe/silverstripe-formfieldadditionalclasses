<?php

namespace AntonyThorpe\FormFieldAdditionalClasses;

use SilverStripe\Core\Extension;

class FormFieldExtension extends Extension
{
    /**
     * @var array CSS classes applied to the Field Holder template
     */
    protected $holderClass = ['field' => 'field'];

    /**
     * @var array CSS classes applied to the Field Holder template Validation Message
     */
    protected $holderValidationMessageClass = ['message' => 'message'];

    /**
     * @var array CSS classes applied to the Field Holder Description
     */
    protected $holderDescriptionClass = ['description' => 'description'];

    /**
     * @var array CSS classes applied to the Left Label
     */
    protected $leftLabelClass = ['left' => 'left'];

    /**
     * @var array CSS classes applied to the Right Label
     */
    protected $rightLabelClass = ['right' => 'right'];

    /**
     * @var array CSS classes applied to the Middle Column
     */
    protected $middleColumnClass = ['middleColumn' => 'middleColumn'];

    /**
     * Helper function to add/remove classes
     *
     * @param string $input CSS classes
     * @param string $variable protected static name
     * @param string $type Add/unset class
     */
    protected function classHelper($input, $variable, $type = 'add')
    {
        $classes = preg_split('/\s+/', $input);
        foreach ($classes as $class) {
            if ($type == 'add') {
                $this->$variable[$class] = $class;
            } else {
                unset($this->$variable[$class]);
            }
        }
    }

    /**
     * Add one or more CSS classes to the Field Holder template
     *
     * @param string $input CSS class or classes
     * @return $this
     */
    public function addHolderClass($input)
    {
        $this->classHelper($input, 'holderClass');
        return $this;
    }

    /**
     * Remove one or more CSS classes from the Field Holder template
     *
     * @param string $input CSS class or classes
     * @return $this
     */
    public function removeHolderClass($input)
    {
        $this->classHelper($input, 'holderClass', 'unset');
        return $this;
    }

    /**
     * Compiles all CSS-classes for the Field Holder
     * Optionally includes a "form-group--no-label" class if no title was set on the FormField
     *
     * @return string
     */
    public function getHolderClass()
    {
        $classes = [];
        $classes[] = $this->owner->Type();

        if (!empty($this->holderClass)) {
            $classes = array_merge(
                array_values($this->holderClass),
                $classes
            );
        }

        if (!$this->owner->Title()) {
            $classes[] = 'form-group--no-label';
        }

        // Allow custom styling of any element in the container based on validation errors,
        // e.g. red borders on input tags.
        //
        // CSS class needs to be different from the one rendered through.
        if ($this->owner->getMessage()) {
            $classes[] = $this->getHolderValidationMessageClass();
            $classes[] = $this->owner->getMessageType();
        }

        return implode(' ', $classes);
    }

    /**
     * Add one or more CSS classes to the Field Holder template for display when there is a Validation Message
     *
     * @param string $input CSS class or classes
     * @return $this
     */
    public function addHolderValidationMessageClass($input)
    {
        $this->classHelper($input, 'holderValidationMessageClass');
        return $this;
    }

    /**
     * Remove one or more CSS classes from the Field Holder template for display when there is a Validation Message
     *
     * @param string $input CSS class or classes
     * @return $this
     */
    public function removeHolderValidationMessageClass($input)
    {
        $this->classHelper($input, 'holderValidationMessageClass', 'unset');
        return $this;
    }

    /**
     * Get CSS validation classes used in the Field Holder Validation Message
     *
     * @return string
     */
    public function getHolderValidationMessageClass()
    {
        return implode(' ', $this->holderValidationMessageClass);
    }

    /**
     * Add one or more CSS classes to the Field Holder Description
     *
     * @param string $input CSS class or classes
     * @return $this
     */
    public function addHolderDescriptionClass($input)
    {
        $this->classHelper($input, 'holderDescriptionClass');
        return $this;
    }

    /**
     * Remove one or more CSS classes from the Field Holder Description
     *
     * @param string $input CSS class or classes
     * @return $this
     */
    public function removeHolderDescriptionClass($input)
    {
        $this->classHelper($input, 'holderDescriptionClass', 'unset');
        return $this;
    }

    /**
     * Get CSS validation classes used in the Field Holder template Description
     *
     * @return string
     */
    public function getHolderDescriptionClass()
    {
        return implode(' ', $this->holderDescriptionClass);
    }

    /**
     * Add one or more CSS classes to the Left Label
     *
     * @param string $input CSS class or classes
     * @return $this
     */
    public function addLeftLabelClass($input)
    {
        $this->classHelper($input, 'leftLabelClass');
        return $this;
    }

    /**
     * Remove one or more CSS classes from the Left Label
     *
     * @param string $input CSS class or classes
     * @return $this
     */
    public function removeLeftLabelClass($input)
    {
        $this->classHelper($input, 'leftLabelClass', 'unset');
        return $this;
    }

    /**
     * Get CSS classes for the Left Label
     *
     * @return string
     */
    public function getLeftLabelClass()
    {
        return implode(' ', $this->leftLabelClass);
    }

    /**
     * Add one or more CSS classes to the Right Label
     *
     * @param string $input CSS class or classes
     * @return $this
     */
    public function addRightLabelClass($input)
    {
        $this->classHelper($input, 'rightLabelClass');
        return $this;
    }

    /**
     * Remove one or more CSS classes from the Right Label
     *
     * @param string $input CSS class or classes
     * @return $this
     */
    public function removeRightLabelClass($input)
    {
        $this->classHelper($input, 'rightLabelClass', 'unset');
        return $this;
    }

    /**
     * Get CSS classes for the Right Label
     *
     * @return string
     */
    public function getRightLabelClass()
    {
        return implode(' ', $this->rightLabelClass);
    }

    /**
     * Add one or more CSS classes to the Middle Column
     *
     * @param string $input CSS class or classes
     * @return $this
     */
    public function addMiddleColumnClass($input)
    {
        $this->classHelper($input, 'middleColumnClass');
        return $this;
    }

    /**
     * Remove one or more CSS classes from the Middle Column
     *
     * @param string $input CSS class or classes
     * @return $this
     */
    public function removeMiddleColumnClass($input)
    {
        $this->classHelper($input, 'middleColumnClass', 'unset');
        return $this;
    }

    /**
     * Get CSS classes for the Middle Column
     *
     * @return string
     */
    public function getMiddleColumnClass()
    {
        return implode(' ', $this->middleColumnClass);
    }
}
