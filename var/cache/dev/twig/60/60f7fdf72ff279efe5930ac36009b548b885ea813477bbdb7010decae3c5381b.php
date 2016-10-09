<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_5d6b7a1bd7af3101fab380f6f6b9aa7e146b2ee78f13ae3e8d08b33579a0d4df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7c504ad5f0fb64187baf881ffa618f81da7b42214ca68ce3e2fd4d75da612d4 = $this->env->getExtension("native_profiler");
        $__internal_e7c504ad5f0fb64187baf881ffa618f81da7b42214ca68ce3e2fd4d75da612d4->enter($__internal_e7c504ad5f0fb64187baf881ffa618f81da7b42214ca68ce3e2fd4d75da612d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e7c504ad5f0fb64187baf881ffa618f81da7b42214ca68ce3e2fd4d75da612d4->leave($__internal_e7c504ad5f0fb64187baf881ffa618f81da7b42214ca68ce3e2fd4d75da612d4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a11b41ae57293fd028b7bf566e5f01205740cb5fa7fed460840299979a99e0cf = $this->env->getExtension("native_profiler");
        $__internal_a11b41ae57293fd028b7bf566e5f01205740cb5fa7fed460840299979a99e0cf->enter($__internal_a11b41ae57293fd028b7bf566e5f01205740cb5fa7fed460840299979a99e0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a11b41ae57293fd028b7bf566e5f01205740cb5fa7fed460840299979a99e0cf->leave($__internal_a11b41ae57293fd028b7bf566e5f01205740cb5fa7fed460840299979a99e0cf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
