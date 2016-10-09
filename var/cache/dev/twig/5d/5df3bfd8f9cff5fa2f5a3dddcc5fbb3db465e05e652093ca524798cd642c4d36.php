<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_bb4c1bee481884c47de9a00b43a7c75b54f79f1b33f1fd6ee2b3009789071193 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d57feba92605e1911b7f646356d8cf2b435cdb0b6ca8549b5c3f78a062ab6d9 = $this->env->getExtension("native_profiler");
        $__internal_1d57feba92605e1911b7f646356d8cf2b435cdb0b6ca8549b5c3f78a062ab6d9->enter($__internal_1d57feba92605e1911b7f646356d8cf2b435cdb0b6ca8549b5c3f78a062ab6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1d57feba92605e1911b7f646356d8cf2b435cdb0b6ca8549b5c3f78a062ab6d9->leave($__internal_1d57feba92605e1911b7f646356d8cf2b435cdb0b6ca8549b5c3f78a062ab6d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
