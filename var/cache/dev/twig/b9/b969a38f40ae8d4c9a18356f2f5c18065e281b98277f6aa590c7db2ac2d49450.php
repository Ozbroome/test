<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_195ef32c6a4b5412afe0d39643f4f1c1e2b32b6aed1fd038a010a502d421e2c8 extends Twig_Template
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
        $__internal_08d777271a85f2850924c5988b85359fc4d44cd423f519a3a434fc82d1df0eab = $this->env->getExtension("native_profiler");
        $__internal_08d777271a85f2850924c5988b85359fc4d44cd423f519a3a434fc82d1df0eab->enter($__internal_08d777271a85f2850924c5988b85359fc4d44cd423f519a3a434fc82d1df0eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_08d777271a85f2850924c5988b85359fc4d44cd423f519a3a434fc82d1df0eab->leave($__internal_08d777271a85f2850924c5988b85359fc4d44cd423f519a3a434fc82d1df0eab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
