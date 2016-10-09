<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_55b273e5176d1092abf7c1bc937af9677662757b77818a1291ea875abf19ed13 extends Twig_Template
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
        $__internal_0ae0a582fc3f50e3f8e762a85d7bcb97a01b09ff14f124559239e8a39f550a73 = $this->env->getExtension("native_profiler");
        $__internal_0ae0a582fc3f50e3f8e762a85d7bcb97a01b09ff14f124559239e8a39f550a73->enter($__internal_0ae0a582fc3f50e3f8e762a85d7bcb97a01b09ff14f124559239e8a39f550a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0ae0a582fc3f50e3f8e762a85d7bcb97a01b09ff14f124559239e8a39f550a73->leave($__internal_0ae0a582fc3f50e3f8e762a85d7bcb97a01b09ff14f124559239e8a39f550a73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}
