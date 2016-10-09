<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_98eafdfa369190633b1c480078105cc9ef28ccaa034411b95accfa5a1ce526e1 extends Twig_Template
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
        $__internal_691ad84b4aa1506a3bfb3a9ea9e4608ac4a1f784588676b4478ad97e38f92cdf = $this->env->getExtension("native_profiler");
        $__internal_691ad84b4aa1506a3bfb3a9ea9e4608ac4a1f784588676b4478ad97e38f92cdf->enter($__internal_691ad84b4aa1506a3bfb3a9ea9e4608ac4a1f784588676b4478ad97e38f92cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_691ad84b4aa1506a3bfb3a9ea9e4608ac4a1f784588676b4478ad97e38f92cdf->leave($__internal_691ad84b4aa1506a3bfb3a9ea9e4608ac4a1f784588676b4478ad97e38f92cdf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
