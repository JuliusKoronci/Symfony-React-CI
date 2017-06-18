<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_c34bcd784bf76fe6e1ae1055b03aa6416cd6dea51a155fce564a814c0d24cbd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_660ef2d6d5d91206d09ff999d83d5fd7df58a2f5d6a8d227da79271662f561fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_660ef2d6d5d91206d09ff999d83d5fd7df58a2f5d6a8d227da79271662f561fb->enter($__internal_660ef2d6d5d91206d09ff999d83d5fd7df58a2f5d6a8d227da79271662f561fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_2ee6e2b2fb387a018b224f90cf7aea6c91386d26fd606bac7c2db900d54da2b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee6e2b2fb387a018b224f90cf7aea6c91386d26fd606bac7c2db900d54da2b2->enter($__internal_2ee6e2b2fb387a018b224f90cf7aea6c91386d26fd606bac7c2db900d54da2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_660ef2d6d5d91206d09ff999d83d5fd7df58a2f5d6a8d227da79271662f561fb->leave($__internal_660ef2d6d5d91206d09ff999d83d5fd7df58a2f5d6a8d227da79271662f561fb_prof);

        
        $__internal_2ee6e2b2fb387a018b224f90cf7aea6c91386d26fd606bac7c2db900d54da2b2->leave($__internal_2ee6e2b2fb387a018b224f90cf7aea6c91386d26fd606bac7c2db900d54da2b2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8883ce68abe73be3b5ea314625e9cfc299d19223e32da3958da0434801973edd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8883ce68abe73be3b5ea314625e9cfc299d19223e32da3958da0434801973edd->enter($__internal_8883ce68abe73be3b5ea314625e9cfc299d19223e32da3958da0434801973edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0e71a09e435b61fb65448c364ed75101f063138ece64d306b3f616a85859c4a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e71a09e435b61fb65448c364ed75101f063138ece64d306b3f616a85859c4a6->enter($__internal_0e71a09e435b61fb65448c364ed75101f063138ece64d306b3f616a85859c4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_0e71a09e435b61fb65448c364ed75101f063138ece64d306b3f616a85859c4a6->leave($__internal_0e71a09e435b61fb65448c364ed75101f063138ece64d306b3f616a85859c4a6_prof);

        
        $__internal_8883ce68abe73be3b5ea314625e9cfc299d19223e32da3958da0434801973edd->leave($__internal_8883ce68abe73be3b5ea314625e9cfc299d19223e32da3958da0434801973edd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
