<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_a35d0b0ab9abdb71feabb92426e521a55785391dafe19bf288854c5c6c466715 extends Twig_Template
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
        $__internal_cd9e4d7a82f4504d88895fa095fed77aafd641f82f7c1d0bb0206497d431931a = $this->env->getExtension("native_profiler");
        $__internal_cd9e4d7a82f4504d88895fa095fed77aafd641f82f7c1d0bb0206497d431931a->enter($__internal_cd9e4d7a82f4504d88895fa095fed77aafd641f82f7c1d0bb0206497d431931a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cd9e4d7a82f4504d88895fa095fed77aafd641f82f7c1d0bb0206497d431931a->leave($__internal_cd9e4d7a82f4504d88895fa095fed77aafd641f82f7c1d0bb0206497d431931a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
