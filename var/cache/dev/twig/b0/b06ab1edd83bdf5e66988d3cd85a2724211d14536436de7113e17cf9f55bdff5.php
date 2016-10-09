<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_76e1a653165ded9ab894877230499601f68bb1bd9c3a9ef0dc4719b230fa8568 extends Twig_Template
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
        $__internal_a36640c9118eddc99d2b0aa96cc76bd9b1ec586c31459a4ab72ab3cc6790b79a = $this->env->getExtension("native_profiler");
        $__internal_a36640c9118eddc99d2b0aa96cc76bd9b1ec586c31459a4ab72ab3cc6790b79a->enter($__internal_a36640c9118eddc99d2b0aa96cc76bd9b1ec586c31459a4ab72ab3cc6790b79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_a36640c9118eddc99d2b0aa96cc76bd9b1ec586c31459a4ab72ab3cc6790b79a->leave($__internal_a36640c9118eddc99d2b0aa96cc76bd9b1ec586c31459a4ab72ab3cc6790b79a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
