<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_314c65fc7cbd80e716b31aeee79b3ab497ecefa1ddc80260acb3ed30e9573545 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_113e8ad6d6be477192233a2603db2d8956b1d7045c75b6dcfc92b49da3a6c5ab = $this->env->getExtension("native_profiler");
        $__internal_113e8ad6d6be477192233a2603db2d8956b1d7045c75b6dcfc92b49da3a6c5ab->enter($__internal_113e8ad6d6be477192233a2603db2d8956b1d7045c75b6dcfc92b49da3a6c5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_113e8ad6d6be477192233a2603db2d8956b1d7045c75b6dcfc92b49da3a6c5ab->leave($__internal_113e8ad6d6be477192233a2603db2d8956b1d7045c75b6dcfc92b49da3a6c5ab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ad4505b384560f30bca34270b77a9ce7236d6df69090af64017a14d6f196f4b = $this->env->getExtension("native_profiler");
        $__internal_9ad4505b384560f30bca34270b77a9ce7236d6df69090af64017a14d6f196f4b->enter($__internal_9ad4505b384560f30bca34270b77a9ce7236d6df69090af64017a14d6f196f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9ad4505b384560f30bca34270b77a9ce7236d6df69090af64017a14d6f196f4b->leave($__internal_9ad4505b384560f30bca34270b77a9ce7236d6df69090af64017a14d6f196f4b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_973fa9081052843a8635b35b75ce590d101ca90c795307013c9fddf82ec61982 = $this->env->getExtension("native_profiler");
        $__internal_973fa9081052843a8635b35b75ce590d101ca90c795307013c9fddf82ec61982->enter($__internal_973fa9081052843a8635b35b75ce590d101ca90c795307013c9fddf82ec61982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_973fa9081052843a8635b35b75ce590d101ca90c795307013c9fddf82ec61982->leave($__internal_973fa9081052843a8635b35b75ce590d101ca90c795307013c9fddf82ec61982_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f19322b099f8d733653fa86da5f819b306e257e354ae50584ece6cc232335d3 = $this->env->getExtension("native_profiler");
        $__internal_3f19322b099f8d733653fa86da5f819b306e257e354ae50584ece6cc232335d3->enter($__internal_3f19322b099f8d733653fa86da5f819b306e257e354ae50584ece6cc232335d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3f19322b099f8d733653fa86da5f819b306e257e354ae50584ece6cc232335d3->leave($__internal_3f19322b099f8d733653fa86da5f819b306e257e354ae50584ece6cc232335d3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
