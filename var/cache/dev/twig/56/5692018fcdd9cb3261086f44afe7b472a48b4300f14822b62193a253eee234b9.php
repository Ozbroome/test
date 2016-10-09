<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_2666cf896cbcdd355f08d2174d6f378c0898342b4c5f370d930668224631558d extends Twig_Template
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
        $__internal_15ec2511c785517efc7095a684a54a3e06c7ce45d6374959eed8321840e633fd = $this->env->getExtension("native_profiler");
        $__internal_15ec2511c785517efc7095a684a54a3e06c7ce45d6374959eed8321840e633fd->enter($__internal_15ec2511c785517efc7095a684a54a3e06c7ce45d6374959eed8321840e633fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_15ec2511c785517efc7095a684a54a3e06c7ce45d6374959eed8321840e633fd->leave($__internal_15ec2511c785517efc7095a684a54a3e06c7ce45d6374959eed8321840e633fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
