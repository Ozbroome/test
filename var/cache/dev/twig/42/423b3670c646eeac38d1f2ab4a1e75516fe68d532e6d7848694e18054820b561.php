<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_a13478916ad008b08cbc157bcec6849e4a631d55c43b3fb1eaf0df632ec44cb3 extends Twig_Template
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
        $__internal_4092699dc598040036e4924c5076998b90b0903f36051b410f54571cface8bfd = $this->env->getExtension("native_profiler");
        $__internal_4092699dc598040036e4924c5076998b90b0903f36051b410f54571cface8bfd->enter($__internal_4092699dc598040036e4924c5076998b90b0903f36051b410f54571cface8bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4092699dc598040036e4924c5076998b90b0903f36051b410f54571cface8bfd->leave($__internal_4092699dc598040036e4924c5076998b90b0903f36051b410f54571cface8bfd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
    }
}
