<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2fcef14243818e5667f4708bc365ecb63f1f4680eb12289b759e34716c36d759 extends Twig_Template
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
        $__internal_b2d379807e0ce2f578d9a6675f2a7c7fe7ce55732df3a9f3574173701dd8f2ca = $this->env->getExtension("native_profiler");
        $__internal_b2d379807e0ce2f578d9a6675f2a7c7fe7ce55732df3a9f3574173701dd8f2ca->enter($__internal_b2d379807e0ce2f578d9a6675f2a7c7fe7ce55732df3a9f3574173701dd8f2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b2d379807e0ce2f578d9a6675f2a7c7fe7ce55732df3a9f3574173701dd8f2ca->leave($__internal_b2d379807e0ce2f578d9a6675f2a7c7fe7ce55732df3a9f3574173701dd8f2ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}
