<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_0c4cde5472c0da4d511bf88d7ce58a5672dcd39a2d4a8a426b8d6f6a507d1342 extends Twig_Template
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
        $__internal_6adf297def6dcaf8d2e95bbd333cd01aa57c15676c95f76556ac75c1c0c60eec = $this->env->getExtension("native_profiler");
        $__internal_6adf297def6dcaf8d2e95bbd333cd01aa57c15676c95f76556ac75c1c0c60eec->enter($__internal_6adf297def6dcaf8d2e95bbd333cd01aa57c15676c95f76556ac75c1c0c60eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_6adf297def6dcaf8d2e95bbd333cd01aa57c15676c95f76556ac75c1c0c60eec->leave($__internal_6adf297def6dcaf8d2e95bbd333cd01aa57c15676c95f76556ac75c1c0c60eec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}
