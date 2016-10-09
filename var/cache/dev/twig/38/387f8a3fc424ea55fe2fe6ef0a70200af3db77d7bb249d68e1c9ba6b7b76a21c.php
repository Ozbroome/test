<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f1747757c99d333c5ceb06749b507f67ef47882060dd64de057cf35f98896cab extends Twig_Template
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
        $__internal_c95fbb13c9d2405d0992674f03306131a4134ac66ac4db12ddea5f466d0c5d2f = $this->env->getExtension("native_profiler");
        $__internal_c95fbb13c9d2405d0992674f03306131a4134ac66ac4db12ddea5f466d0c5d2f->enter($__internal_c95fbb13c9d2405d0992674f03306131a4134ac66ac4db12ddea5f466d0c5d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c95fbb13c9d2405d0992674f03306131a4134ac66ac4db12ddea5f466d0c5d2f->leave($__internal_c95fbb13c9d2405d0992674f03306131a4134ac66ac4db12ddea5f466d0c5d2f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
