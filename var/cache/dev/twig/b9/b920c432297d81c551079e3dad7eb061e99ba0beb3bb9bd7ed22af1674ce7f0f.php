<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_85919a9be65d54000fd29bb392b008342e9c43c0fa92b1f6fc51b6790a059898 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_b939483d2671a9e77ef5547fb647d1119a44931a45cb0d3d2bf0dda52928685b = $this->env->getExtension("native_profiler");
        $__internal_b939483d2671a9e77ef5547fb647d1119a44931a45cb0d3d2bf0dda52928685b->enter($__internal_b939483d2671a9e77ef5547fb647d1119a44931a45cb0d3d2bf0dda52928685b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b939483d2671a9e77ef5547fb647d1119a44931a45cb0d3d2bf0dda52928685b->leave($__internal_b939483d2671a9e77ef5547fb647d1119a44931a45cb0d3d2bf0dda52928685b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_47c3b550afaea56129392c5625094c4a79f4fbd047ce845ee539a04761fb61f0 = $this->env->getExtension("native_profiler");
        $__internal_47c3b550afaea56129392c5625094c4a79f4fbd047ce845ee539a04761fb61f0->enter($__internal_47c3b550afaea56129392c5625094c4a79f4fbd047ce845ee539a04761fb61f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_47c3b550afaea56129392c5625094c4a79f4fbd047ce845ee539a04761fb61f0->leave($__internal_47c3b550afaea56129392c5625094c4a79f4fbd047ce845ee539a04761fb61f0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_742cc7a63f921e00df37799022b56f4044639ebd679e7bcd200d8d7de4d2f720 = $this->env->getExtension("native_profiler");
        $__internal_742cc7a63f921e00df37799022b56f4044639ebd679e7bcd200d8d7de4d2f720->enter($__internal_742cc7a63f921e00df37799022b56f4044639ebd679e7bcd200d8d7de4d2f720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_742cc7a63f921e00df37799022b56f4044639ebd679e7bcd200d8d7de4d2f720->leave($__internal_742cc7a63f921e00df37799022b56f4044639ebd679e7bcd200d8d7de4d2f720_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5e4d94ff51c92d7219f945c6b2be50da48d8a5990155661a96f50f6c6d459b64 = $this->env->getExtension("native_profiler");
        $__internal_5e4d94ff51c92d7219f945c6b2be50da48d8a5990155661a96f50f6c6d459b64->enter($__internal_5e4d94ff51c92d7219f945c6b2be50da48d8a5990155661a96f50f6c6d459b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5e4d94ff51c92d7219f945c6b2be50da48d8a5990155661a96f50f6c6d459b64->leave($__internal_5e4d94ff51c92d7219f945c6b2be50da48d8a5990155661a96f50f6c6d459b64_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
