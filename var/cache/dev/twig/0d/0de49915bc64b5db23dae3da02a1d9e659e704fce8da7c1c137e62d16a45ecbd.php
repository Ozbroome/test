<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_041dbd9c83762eaa4409450c7f0401f54c1862736260bd9a42da76dc6817b1cf extends Twig_Template
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
        $__internal_239976594b4195a91fbe74b007850f3a23d9c836c6e24200fbfea4a625de6c79 = $this->env->getExtension("native_profiler");
        $__internal_239976594b4195a91fbe74b007850f3a23d9c836c6e24200fbfea4a625de6c79->enter($__internal_239976594b4195a91fbe74b007850f3a23d9c836c6e24200fbfea4a625de6c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_239976594b4195a91fbe74b007850f3a23d9c836c6e24200fbfea4a625de6c79->leave($__internal_239976594b4195a91fbe74b007850f3a23d9c836c6e24200fbfea4a625de6c79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
