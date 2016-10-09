<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c087eb2af4428893274e41d9cc39c0f98a3bd9ef58152c3172cc2debc0619e6f extends Twig_Template
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
        $__internal_775db93ba3dc0f38dbce90732335217e22908ee9ddcc13a01ff9992068f483a3 = $this->env->getExtension("native_profiler");
        $__internal_775db93ba3dc0f38dbce90732335217e22908ee9ddcc13a01ff9992068f483a3->enter($__internal_775db93ba3dc0f38dbce90732335217e22908ee9ddcc13a01ff9992068f483a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_775db93ba3dc0f38dbce90732335217e22908ee9ddcc13a01ff9992068f483a3->leave($__internal_775db93ba3dc0f38dbce90732335217e22908ee9ddcc13a01ff9992068f483a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
    }
}
