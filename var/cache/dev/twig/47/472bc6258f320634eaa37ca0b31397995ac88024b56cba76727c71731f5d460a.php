<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_3d1e902f1429f6b316bf4f23aa1649a5896ae2d05cd182ac0ed752229d1a6890 extends Twig_Template
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
        $__internal_076bc039b1ed36f689174a618a06b570e6fe1e83fa84aec1d8062677169ab418 = $this->env->getExtension("native_profiler");
        $__internal_076bc039b1ed36f689174a618a06b570e6fe1e83fa84aec1d8062677169ab418->enter($__internal_076bc039b1ed36f689174a618a06b570e6fe1e83fa84aec1d8062677169ab418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_076bc039b1ed36f689174a618a06b570e6fe1e83fa84aec1d8062677169ab418->leave($__internal_076bc039b1ed36f689174a618a06b570e6fe1e83fa84aec1d8062677169ab418_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
