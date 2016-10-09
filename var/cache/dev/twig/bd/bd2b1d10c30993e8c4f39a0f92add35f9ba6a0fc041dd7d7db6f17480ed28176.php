<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_35d3e49f9b16a00426e05f9701e099cfe424ba471903aa1f60e6994a84a49199 extends Twig_Template
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
        $__internal_d9a266c28d9961cad31b770923eb35b3b2e4a2fb3bef9472e9f301b253d9448f = $this->env->getExtension("native_profiler");
        $__internal_d9a266c28d9961cad31b770923eb35b3b2e4a2fb3bef9472e9f301b253d9448f->enter($__internal_d9a266c28d9961cad31b770923eb35b3b2e4a2fb3bef9472e9f301b253d9448f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_d9a266c28d9961cad31b770923eb35b3b2e4a2fb3bef9472e9f301b253d9448f->leave($__internal_d9a266c28d9961cad31b770923eb35b3b2e4a2fb3bef9472e9f301b253d9448f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
    }
}
