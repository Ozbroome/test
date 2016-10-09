<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_11b39e0f7e3643313aaa201ff235b13b90a9c4190372ae408141723a13c2ab45 extends Twig_Template
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
        $__internal_96eab8f78fce81f0595fcfead415049d61fbd26410bf680cfef036e64cf18f51 = $this->env->getExtension("native_profiler");
        $__internal_96eab8f78fce81f0595fcfead415049d61fbd26410bf680cfef036e64cf18f51->enter($__internal_96eab8f78fce81f0595fcfead415049d61fbd26410bf680cfef036e64cf18f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_96eab8f78fce81f0595fcfead415049d61fbd26410bf680cfef036e64cf18f51->leave($__internal_96eab8f78fce81f0595fcfead415049d61fbd26410bf680cfef036e64cf18f51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}
