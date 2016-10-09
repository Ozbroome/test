<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_ec3b87f309a104fc5f0fda8a5373f287098fbc4ae3c7e2b04f684450b438f301 extends Twig_Template
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
        $__internal_f2e52685c50c02c999ddb026de5b3dff6d0256891e76e2c72744e09ff0cb4afd = $this->env->getExtension("native_profiler");
        $__internal_f2e52685c50c02c999ddb026de5b3dff6d0256891e76e2c72744e09ff0cb4afd->enter($__internal_f2e52685c50c02c999ddb026de5b3dff6d0256891e76e2c72744e09ff0cb4afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f2e52685c50c02c999ddb026de5b3dff6d0256891e76e2c72744e09ff0cb4afd->leave($__internal_f2e52685c50c02c999ddb026de5b3dff6d0256891e76e2c72744e09ff0cb4afd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
