<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f7047ffdc8ad2710d4519c967b3fab6f7b84e3ae7b56b7175e39fdd1d4299af1 extends Twig_Template
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
        $__internal_d1873dc1bb02c1d7f3ef2272af54e392fa70d807b0921be28804c5c1a97a56b6 = $this->env->getExtension("native_profiler");
        $__internal_d1873dc1bb02c1d7f3ef2272af54e392fa70d807b0921be28804c5c1a97a56b6->enter($__internal_d1873dc1bb02c1d7f3ef2272af54e392fa70d807b0921be28804c5c1a97a56b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_d1873dc1bb02c1d7f3ef2272af54e392fa70d807b0921be28804c5c1a97a56b6->leave($__internal_d1873dc1bb02c1d7f3ef2272af54e392fa70d807b0921be28804c5c1a97a56b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
