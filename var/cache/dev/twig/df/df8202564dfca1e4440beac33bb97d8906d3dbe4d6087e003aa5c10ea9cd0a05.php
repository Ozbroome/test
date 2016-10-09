<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_de51bbf1689399ac2a74c703761c68c83af1cade788816a96bc4da6f821cf3b3 extends Twig_Template
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
        $__internal_9979214550819ef430599d54eef1f06d446a78ee81aea0228f9a80263df0bbe5 = $this->env->getExtension("native_profiler");
        $__internal_9979214550819ef430599d54eef1f06d446a78ee81aea0228f9a80263df0bbe5->enter($__internal_9979214550819ef430599d54eef1f06d446a78ee81aea0228f9a80263df0bbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_9979214550819ef430599d54eef1f06d446a78ee81aea0228f9a80263df0bbe5->leave($__internal_9979214550819ef430599d54eef1f06d446a78ee81aea0228f9a80263df0bbe5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
