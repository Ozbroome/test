<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_12425e8569f41f638f96e5e39a58ed5011d880d20e11a46cc822b011e942f501 extends Twig_Template
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
        $__internal_eaa6b0df78b046adf449a7693a042cb05cd446b2fa7876a5c28437605304b22c = $this->env->getExtension("native_profiler");
        $__internal_eaa6b0df78b046adf449a7693a042cb05cd446b2fa7876a5c28437605304b22c->enter($__internal_eaa6b0df78b046adf449a7693a042cb05cd446b2fa7876a5c28437605304b22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_eaa6b0df78b046adf449a7693a042cb05cd446b2fa7876a5c28437605304b22c->leave($__internal_eaa6b0df78b046adf449a7693a042cb05cd446b2fa7876a5c28437605304b22c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
