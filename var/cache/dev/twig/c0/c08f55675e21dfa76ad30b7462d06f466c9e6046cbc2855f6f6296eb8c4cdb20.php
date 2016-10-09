<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_216edb1d17c28660b048fe91ea8321ad8378c69b1e9888342fc1e042e40a552e extends Twig_Template
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
        $__internal_66a26e68fddebc499befc57616e27df68756488026c65532a442aad5a82496e2 = $this->env->getExtension("native_profiler");
        $__internal_66a26e68fddebc499befc57616e27df68756488026c65532a442aad5a82496e2->enter($__internal_66a26e68fddebc499befc57616e27df68756488026c65532a442aad5a82496e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_66a26e68fddebc499befc57616e27df68756488026c65532a442aad5a82496e2->leave($__internal_66a26e68fddebc499befc57616e27df68756488026c65532a442aad5a82496e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}
