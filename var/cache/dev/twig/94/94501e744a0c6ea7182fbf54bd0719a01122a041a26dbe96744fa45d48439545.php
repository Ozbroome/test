<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9c7b0acfd9742c71dac8188248ed67831a859650b03ae64455a10603450af05b extends Twig_Template
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
        $__internal_c5dcdb7a63e7b31a486438ad8d695aa0cdda55ffb5d72334b6635e011a4200f8 = $this->env->getExtension("native_profiler");
        $__internal_c5dcdb7a63e7b31a486438ad8d695aa0cdda55ffb5d72334b6635e011a4200f8->enter($__internal_c5dcdb7a63e7b31a486438ad8d695aa0cdda55ffb5d72334b6635e011a4200f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c5dcdb7a63e7b31a486438ad8d695aa0cdda55ffb5d72334b6635e011a4200f8->leave($__internal_c5dcdb7a63e7b31a486438ad8d695aa0cdda55ffb5d72334b6635e011a4200f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
