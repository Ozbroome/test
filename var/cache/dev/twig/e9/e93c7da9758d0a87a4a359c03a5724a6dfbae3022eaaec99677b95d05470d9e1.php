<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f4cfe53b22315d145af2cfd19670f77127d1be7845ae01f2fb41123c5c63beb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_735bb4977778cfdfe86b3e2a393ee097ad53a8b241f344958541608d850c86f9 = $this->env->getExtension("native_profiler");
        $__internal_735bb4977778cfdfe86b3e2a393ee097ad53a8b241f344958541608d850c86f9->enter($__internal_735bb4977778cfdfe86b3e2a393ee097ad53a8b241f344958541608d850c86f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_735bb4977778cfdfe86b3e2a393ee097ad53a8b241f344958541608d850c86f9->leave($__internal_735bb4977778cfdfe86b3e2a393ee097ad53a8b241f344958541608d850c86f9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9cb38285bb32111be4a99c8af507ae2438da443f415ae0a50f9b540bdd9c2ec6 = $this->env->getExtension("native_profiler");
        $__internal_9cb38285bb32111be4a99c8af507ae2438da443f415ae0a50f9b540bdd9c2ec6->enter($__internal_9cb38285bb32111be4a99c8af507ae2438da443f415ae0a50f9b540bdd9c2ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9cb38285bb32111be4a99c8af507ae2438da443f415ae0a50f9b540bdd9c2ec6->leave($__internal_9cb38285bb32111be4a99c8af507ae2438da443f415ae0a50f9b540bdd9c2ec6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f54bfe198448d7fbe47149558c4aaee5fc18da2a18a6ec5865981ee0495d766 = $this->env->getExtension("native_profiler");
        $__internal_5f54bfe198448d7fbe47149558c4aaee5fc18da2a18a6ec5865981ee0495d766->enter($__internal_5f54bfe198448d7fbe47149558c4aaee5fc18da2a18a6ec5865981ee0495d766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5f54bfe198448d7fbe47149558c4aaee5fc18da2a18a6ec5865981ee0495d766->leave($__internal_5f54bfe198448d7fbe47149558c4aaee5fc18da2a18a6ec5865981ee0495d766_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b130e4e1c7109cb4dd705fa3b7bd9a671a2f917fcef24d910a059db04752189d = $this->env->getExtension("native_profiler");
        $__internal_b130e4e1c7109cb4dd705fa3b7bd9a671a2f917fcef24d910a059db04752189d->enter($__internal_b130e4e1c7109cb4dd705fa3b7bd9a671a2f917fcef24d910a059db04752189d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b130e4e1c7109cb4dd705fa3b7bd9a671a2f917fcef24d910a059db04752189d->leave($__internal_b130e4e1c7109cb4dd705fa3b7bd9a671a2f917fcef24d910a059db04752189d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
