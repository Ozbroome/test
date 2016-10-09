<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c403a725bfaa2e9494e17caed1e022a989b3deb846bb383fc16584ff5eaeb029 extends Twig_Template
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
        $__internal_eda11d5a626d183dfa156dc746fe9e54ee87c28300d2687a6ccb2a7f2e8fb369 = $this->env->getExtension("native_profiler");
        $__internal_eda11d5a626d183dfa156dc746fe9e54ee87c28300d2687a6ccb2a7f2e8fb369->enter($__internal_eda11d5a626d183dfa156dc746fe9e54ee87c28300d2687a6ccb2a7f2e8fb369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_eda11d5a626d183dfa156dc746fe9e54ee87c28300d2687a6ccb2a7f2e8fb369->leave($__internal_eda11d5a626d183dfa156dc746fe9e54ee87c28300d2687a6ccb2a7f2e8fb369_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }
}
