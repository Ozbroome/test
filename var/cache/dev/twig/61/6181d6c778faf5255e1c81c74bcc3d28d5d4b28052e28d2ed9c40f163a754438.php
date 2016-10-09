<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_64ee432b39f9321c4c64f0719497c98fba0fb077f4f07f1f84d7a9cfffc3a6ae extends Twig_Template
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
        $__internal_7a5994ccf43c8aef70d9c69e5ca709f34d96f3596caf2a5ef55ef4d83b1f31bc = $this->env->getExtension("native_profiler");
        $__internal_7a5994ccf43c8aef70d9c69e5ca709f34d96f3596caf2a5ef55ef4d83b1f31bc->enter($__internal_7a5994ccf43c8aef70d9c69e5ca709f34d96f3596caf2a5ef55ef4d83b1f31bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_7a5994ccf43c8aef70d9c69e5ca709f34d96f3596caf2a5ef55ef4d83b1f31bc->leave($__internal_7a5994ccf43c8aef70d9c69e5ca709f34d96f3596caf2a5ef55ef4d83b1f31bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }
}
