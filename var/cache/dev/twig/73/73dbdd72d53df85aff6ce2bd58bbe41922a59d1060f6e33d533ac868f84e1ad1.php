<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e49f6545fcd925c1635bde0cacb817272c37934033a98c89e3c782403b19dbb1 extends Twig_Template
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
        $__internal_08b77a05018034d3a21f7b52ff301a747ab8a6b83f007fcca83d9a8253280254 = $this->env->getExtension("native_profiler");
        $__internal_08b77a05018034d3a21f7b52ff301a747ab8a6b83f007fcca83d9a8253280254->enter($__internal_08b77a05018034d3a21f7b52ff301a747ab8a6b83f007fcca83d9a8253280254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_08b77a05018034d3a21f7b52ff301a747ab8a6b83f007fcca83d9a8253280254->leave($__internal_08b77a05018034d3a21f7b52ff301a747ab8a6b83f007fcca83d9a8253280254_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
