<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c1d53d0a3d4b99d0597c57bc768f6d94a41799257895a08511a8bd5c008569a0 extends Twig_Template
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
        $__internal_6cdfac1689cd44d067f9e07a7971b42872b059ae339b6c04942a176ebd843215 = $this->env->getExtension("native_profiler");
        $__internal_6cdfac1689cd44d067f9e07a7971b42872b059ae339b6c04942a176ebd843215->enter($__internal_6cdfac1689cd44d067f9e07a7971b42872b059ae339b6c04942a176ebd843215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6cdfac1689cd44d067f9e07a7971b42872b059ae339b6c04942a176ebd843215->leave($__internal_6cdfac1689cd44d067f9e07a7971b42872b059ae339b6c04942a176ebd843215_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
