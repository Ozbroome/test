<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_da6d5055735e66aeebacaa7ddd5983d76f8c5c3df099cf14c4539e110f2694cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7440a25dbe7fae25716e52da20e11dc91083d3d17e378bae21728edd1db57e46 = $this->env->getExtension("native_profiler");
        $__internal_7440a25dbe7fae25716e52da20e11dc91083d3d17e378bae21728edd1db57e46->enter($__internal_7440a25dbe7fae25716e52da20e11dc91083d3d17e378bae21728edd1db57e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7440a25dbe7fae25716e52da20e11dc91083d3d17e378bae21728edd1db57e46->leave($__internal_7440a25dbe7fae25716e52da20e11dc91083d3d17e378bae21728edd1db57e46_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_427d324b72d8a970d732b6dc7a87409930b87568d18aaa2885724ce73d19d976 = $this->env->getExtension("native_profiler");
        $__internal_427d324b72d8a970d732b6dc7a87409930b87568d18aaa2885724ce73d19d976->enter($__internal_427d324b72d8a970d732b6dc7a87409930b87568d18aaa2885724ce73d19d976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_427d324b72d8a970d732b6dc7a87409930b87568d18aaa2885724ce73d19d976->leave($__internal_427d324b72d8a970d732b6dc7a87409930b87568d18aaa2885724ce73d19d976_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_41a7a61fd18e992ce9737cb5daf863ca258ba7d3e931e1ee1f30da4fe8431c71 = $this->env->getExtension("native_profiler");
        $__internal_41a7a61fd18e992ce9737cb5daf863ca258ba7d3e931e1ee1f30da4fe8431c71->enter($__internal_41a7a61fd18e992ce9737cb5daf863ca258ba7d3e931e1ee1f30da4fe8431c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_41a7a61fd18e992ce9737cb5daf863ca258ba7d3e931e1ee1f30da4fe8431c71->leave($__internal_41a7a61fd18e992ce9737cb5daf863ca258ba7d3e931e1ee1f30da4fe8431c71_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bffe9d640d8760047f3d5da884f8a9b7a2d174cf65c709748c2e508de2b3f36e = $this->env->getExtension("native_profiler");
        $__internal_bffe9d640d8760047f3d5da884f8a9b7a2d174cf65c709748c2e508de2b3f36e->enter($__internal_bffe9d640d8760047f3d5da884f8a9b7a2d174cf65c709748c2e508de2b3f36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_bffe9d640d8760047f3d5da884f8a9b7a2d174cf65c709748c2e508de2b3f36e->leave($__internal_bffe9d640d8760047f3d5da884f8a9b7a2d174cf65c709748c2e508de2b3f36e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
