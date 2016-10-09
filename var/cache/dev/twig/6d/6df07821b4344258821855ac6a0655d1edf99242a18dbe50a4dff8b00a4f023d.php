<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_7ea4276e9f26447c05c8cac66cf71ccfe6646f818d0ea3bbfccd6b81dbee2e20 extends Twig_Template
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
        $__internal_74bdf541f766d4d9618bc2ef275e3eb5e799aefc57f1b3b4db35c21607e307b1 = $this->env->getExtension("native_profiler");
        $__internal_74bdf541f766d4d9618bc2ef275e3eb5e799aefc57f1b3b4db35c21607e307b1->enter($__internal_74bdf541f766d4d9618bc2ef275e3eb5e799aefc57f1b3b4db35c21607e307b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_74bdf541f766d4d9618bc2ef275e3eb5e799aefc57f1b3b4db35c21607e307b1->leave($__internal_74bdf541f766d4d9618bc2ef275e3eb5e799aefc57f1b3b4db35c21607e307b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
