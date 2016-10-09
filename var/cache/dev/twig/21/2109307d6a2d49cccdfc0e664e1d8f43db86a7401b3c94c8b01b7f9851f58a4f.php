<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2f38ccd8ad8ef2d3cc4abb7b7394f3e8c2157df9dfd8c4d64b7e29d3da6b7bb7 extends Twig_Template
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
        $__internal_740d154cf17bddca03c060253f6f7088c878244cdf4699625cca82b0d3634cc9 = $this->env->getExtension("native_profiler");
        $__internal_740d154cf17bddca03c060253f6f7088c878244cdf4699625cca82b0d3634cc9->enter($__internal_740d154cf17bddca03c060253f6f7088c878244cdf4699625cca82b0d3634cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_740d154cf17bddca03c060253f6f7088c878244cdf4699625cca82b0d3634cc9->leave($__internal_740d154cf17bddca03c060253f6f7088c878244cdf4699625cca82b0d3634cc9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
