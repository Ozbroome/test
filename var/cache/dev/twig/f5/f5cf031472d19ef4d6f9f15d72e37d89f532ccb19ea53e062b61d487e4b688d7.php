<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_211e8aa26c14fdc3fbda7d02e4858f6e085478a30dce7313057f037f48adbde4 extends Twig_Template
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
        $__internal_5f3ef798c9bb5064ce546130ae28fb4efdee237323282f3bbf9f0feb4ffd3f36 = $this->env->getExtension("native_profiler");
        $__internal_5f3ef798c9bb5064ce546130ae28fb4efdee237323282f3bbf9f0feb4ffd3f36->enter($__internal_5f3ef798c9bb5064ce546130ae28fb4efdee237323282f3bbf9f0feb4ffd3f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5f3ef798c9bb5064ce546130ae28fb4efdee237323282f3bbf9f0feb4ffd3f36->leave($__internal_5f3ef798c9bb5064ce546130ae28fb4efdee237323282f3bbf9f0feb4ffd3f36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
