<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_93a88366a3313b6a436ed315f78077139f509b8d8674d0d604d416b89bbe1f17 extends Twig_Template
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
        $__internal_7fa5007edf130e32058aa538cf872a69dedf5b25ce33aee766cf0a742543d3a8 = $this->env->getExtension("native_profiler");
        $__internal_7fa5007edf130e32058aa538cf872a69dedf5b25ce33aee766cf0a742543d3a8->enter($__internal_7fa5007edf130e32058aa538cf872a69dedf5b25ce33aee766cf0a742543d3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7fa5007edf130e32058aa538cf872a69dedf5b25ce33aee766cf0a742543d3a8->leave($__internal_7fa5007edf130e32058aa538cf872a69dedf5b25ce33aee766cf0a742543d3a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
