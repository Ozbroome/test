<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_26f2e155c5243bb6e1c45294d78cb2178d227152a89086bd1d7c18cce1cce629 extends Twig_Template
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
        $__internal_9885d20f8a3391c038452108d84d835232067a29628d6dadffe997c431abb040 = $this->env->getExtension("native_profiler");
        $__internal_9885d20f8a3391c038452108d84d835232067a29628d6dadffe997c431abb040->enter($__internal_9885d20f8a3391c038452108d84d835232067a29628d6dadffe997c431abb040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9885d20f8a3391c038452108d84d835232067a29628d6dadffe997c431abb040->leave($__internal_9885d20f8a3391c038452108d84d835232067a29628d6dadffe997c431abb040_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
