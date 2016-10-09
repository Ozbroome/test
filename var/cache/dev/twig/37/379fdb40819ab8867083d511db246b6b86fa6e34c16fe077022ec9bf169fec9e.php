<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_281dbd860f6fbfe2cec8d1c1f7a65e6d16f3ee0ee109f2f5a5a1bc85c8ca37d2 extends Twig_Template
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
        $__internal_8e99dcffc1f5ddc2dda7c24aff72d76cb4179e4536719ac62e5925d7d879d4a5 = $this->env->getExtension("native_profiler");
        $__internal_8e99dcffc1f5ddc2dda7c24aff72d76cb4179e4536719ac62e5925d7d879d4a5->enter($__internal_8e99dcffc1f5ddc2dda7c24aff72d76cb4179e4536719ac62e5925d7d879d4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_8e99dcffc1f5ddc2dda7c24aff72d76cb4179e4536719ac62e5925d7d879d4a5->leave($__internal_8e99dcffc1f5ddc2dda7c24aff72d76cb4179e4536719ac62e5925d7d879d4a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
