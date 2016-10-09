<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_5270f593dbd932b57f11c30ad85d9828bef4a3fa183d411c875f1046ec9c8781 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fb4783740016d209bc95f4978f8208932be83f75b4d28d7bd68294382dd3651 = $this->env->getExtension("native_profiler");
        $__internal_1fb4783740016d209bc95f4978f8208932be83f75b4d28d7bd68294382dd3651->enter($__internal_1fb4783740016d209bc95f4978f8208932be83f75b4d28d7bd68294382dd3651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fb4783740016d209bc95f4978f8208932be83f75b4d28d7bd68294382dd3651->leave($__internal_1fb4783740016d209bc95f4978f8208932be83f75b4d28d7bd68294382dd3651_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3001eefaecb78b8a50e5ae4810c723cec4b024c13847dbd228f56856642a9094 = $this->env->getExtension("native_profiler");
        $__internal_3001eefaecb78b8a50e5ae4810c723cec4b024c13847dbd228f56856642a9094->enter($__internal_3001eefaecb78b8a50e5ae4810c723cec4b024c13847dbd228f56856642a9094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3001eefaecb78b8a50e5ae4810c723cec4b024c13847dbd228f56856642a9094->leave($__internal_3001eefaecb78b8a50e5ae4810c723cec4b024c13847dbd228f56856642a9094_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_46d9d021799cd4ae3e0a2ccc2c97881c93fd35bfe792b7074f46c951df9387b0 = $this->env->getExtension("native_profiler");
        $__internal_46d9d021799cd4ae3e0a2ccc2c97881c93fd35bfe792b7074f46c951df9387b0->enter($__internal_46d9d021799cd4ae3e0a2ccc2c97881c93fd35bfe792b7074f46c951df9387b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_46d9d021799cd4ae3e0a2ccc2c97881c93fd35bfe792b7074f46c951df9387b0->leave($__internal_46d9d021799cd4ae3e0a2ccc2c97881c93fd35bfe792b7074f46c951df9387b0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ff67d493af6ef43c3f6b0ee33876eb76956a8c3b191d605ca2e9a83ce1a72324 = $this->env->getExtension("native_profiler");
        $__internal_ff67d493af6ef43c3f6b0ee33876eb76956a8c3b191d605ca2e9a83ce1a72324->enter($__internal_ff67d493af6ef43c3f6b0ee33876eb76956a8c3b191d605ca2e9a83ce1a72324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ff67d493af6ef43c3f6b0ee33876eb76956a8c3b191d605ca2e9a83ce1a72324->leave($__internal_ff67d493af6ef43c3f6b0ee33876eb76956a8c3b191d605ca2e9a83ce1a72324_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
