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
        $__internal_77115be491425a72ebad8f77f3330281d21474e634473d30ac47aa89b54e08e9 = $this->env->getExtension("native_profiler");
        $__internal_77115be491425a72ebad8f77f3330281d21474e634473d30ac47aa89b54e08e9->enter($__internal_77115be491425a72ebad8f77f3330281d21474e634473d30ac47aa89b54e08e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77115be491425a72ebad8f77f3330281d21474e634473d30ac47aa89b54e08e9->leave($__internal_77115be491425a72ebad8f77f3330281d21474e634473d30ac47aa89b54e08e9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ed395e0f7f1906e5b8e63ad0a83579fd9893baa36dffd58eed9716b06a1e696b = $this->env->getExtension("native_profiler");
        $__internal_ed395e0f7f1906e5b8e63ad0a83579fd9893baa36dffd58eed9716b06a1e696b->enter($__internal_ed395e0f7f1906e5b8e63ad0a83579fd9893baa36dffd58eed9716b06a1e696b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ed395e0f7f1906e5b8e63ad0a83579fd9893baa36dffd58eed9716b06a1e696b->leave($__internal_ed395e0f7f1906e5b8e63ad0a83579fd9893baa36dffd58eed9716b06a1e696b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b81379e3a5f8bb50057f211d288f25863e930c97b2f9c2e7cc6afdec619cd83 = $this->env->getExtension("native_profiler");
        $__internal_6b81379e3a5f8bb50057f211d288f25863e930c97b2f9c2e7cc6afdec619cd83->enter($__internal_6b81379e3a5f8bb50057f211d288f25863e930c97b2f9c2e7cc6afdec619cd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6b81379e3a5f8bb50057f211d288f25863e930c97b2f9c2e7cc6afdec619cd83->leave($__internal_6b81379e3a5f8bb50057f211d288f25863e930c97b2f9c2e7cc6afdec619cd83_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d72acbfed4bb7c31aa346af87b8166b6d9f714d16c158784113d3df074b0f32 = $this->env->getExtension("native_profiler");
        $__internal_5d72acbfed4bb7c31aa346af87b8166b6d9f714d16c158784113d3df074b0f32->enter($__internal_5d72acbfed4bb7c31aa346af87b8166b6d9f714d16c158784113d3df074b0f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5d72acbfed4bb7c31aa346af87b8166b6d9f714d16c158784113d3df074b0f32->leave($__internal_5d72acbfed4bb7c31aa346af87b8166b6d9f714d16c158784113d3df074b0f32_prof);

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
