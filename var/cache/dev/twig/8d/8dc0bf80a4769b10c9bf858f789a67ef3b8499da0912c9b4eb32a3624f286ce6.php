<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_032063fe2f3604eba7c67c8de89305c265768707ab4544fcbdf37afb4c47d6b6 extends Twig_Template
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
        $__internal_01a642db9e67161667a48f784188dac9456c4c579bd18bfc67218d8123f62243 = $this->env->getExtension("native_profiler");
        $__internal_01a642db9e67161667a48f784188dac9456c4c579bd18bfc67218d8123f62243->enter($__internal_01a642db9e67161667a48f784188dac9456c4c579bd18bfc67218d8123f62243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_01a642db9e67161667a48f784188dac9456c4c579bd18bfc67218d8123f62243->leave($__internal_01a642db9e67161667a48f784188dac9456c4c579bd18bfc67218d8123f62243_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
    }
}
