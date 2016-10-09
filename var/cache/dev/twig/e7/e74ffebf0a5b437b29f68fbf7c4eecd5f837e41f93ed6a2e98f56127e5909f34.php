<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0cbb1c3505902c1910f62c62b1f6a6c1b89a4c8efe9197be1a192ba23e74515b extends Twig_Template
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
        $__internal_f922ea1c15e36c7a994e6d8e1063fe1dd0c85bb95beb7c5416c2ac35fcb20906 = $this->env->getExtension("native_profiler");
        $__internal_f922ea1c15e36c7a994e6d8e1063fe1dd0c85bb95beb7c5416c2ac35fcb20906->enter($__internal_f922ea1c15e36c7a994e6d8e1063fe1dd0c85bb95beb7c5416c2ac35fcb20906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f922ea1c15e36c7a994e6d8e1063fe1dd0c85bb95beb7c5416c2ac35fcb20906->leave($__internal_f922ea1c15e36c7a994e6d8e1063fe1dd0c85bb95beb7c5416c2ac35fcb20906_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
