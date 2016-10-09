<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_c9116123cd82fc6f49c8b704f506892b9192534b95abc3302045fb5549375db1 extends Twig_Template
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
        $__internal_57d3b5a833783dcdddb28b0d267dfc86348e1f1a2bf94e3152cf2184cc3c1c07 = $this->env->getExtension("native_profiler");
        $__internal_57d3b5a833783dcdddb28b0d267dfc86348e1f1a2bf94e3152cf2184cc3c1c07->enter($__internal_57d3b5a833783dcdddb28b0d267dfc86348e1f1a2bf94e3152cf2184cc3c1c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_57d3b5a833783dcdddb28b0d267dfc86348e1f1a2bf94e3152cf2184cc3c1c07->leave($__internal_57d3b5a833783dcdddb28b0d267dfc86348e1f1a2bf94e3152cf2184cc3c1c07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
