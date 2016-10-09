<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_5f578b45f398b6d1ca91dc714bac1014283c760c86f343ba4bfcda178d02aa13 extends Twig_Template
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
        $__internal_b336c20759acdfd56962e8de8377798977a12b9525f653fcc33a045caac25eb4 = $this->env->getExtension("native_profiler");
        $__internal_b336c20759acdfd56962e8de8377798977a12b9525f653fcc33a045caac25eb4->enter($__internal_b336c20759acdfd56962e8de8377798977a12b9525f653fcc33a045caac25eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_b336c20759acdfd56962e8de8377798977a12b9525f653fcc33a045caac25eb4->leave($__internal_b336c20759acdfd56962e8de8377798977a12b9525f653fcc33a045caac25eb4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
    }
}
