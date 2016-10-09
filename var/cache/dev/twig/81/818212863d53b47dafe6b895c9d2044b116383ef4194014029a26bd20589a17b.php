<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9bacc99fadedd547dbc398969206f4e23d1b1b04f62b33bbca5b3cb76295237b extends Twig_Template
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
        $__internal_892f160a8beec331655a87b095a1c57392eba524ba3db8ba41dea19ddf8bf0f7 = $this->env->getExtension("native_profiler");
        $__internal_892f160a8beec331655a87b095a1c57392eba524ba3db8ba41dea19ddf8bf0f7->enter($__internal_892f160a8beec331655a87b095a1c57392eba524ba3db8ba41dea19ddf8bf0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_892f160a8beec331655a87b095a1c57392eba524ba3db8ba41dea19ddf8bf0f7->leave($__internal_892f160a8beec331655a87b095a1c57392eba524ba3db8ba41dea19ddf8bf0f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
    }
}
