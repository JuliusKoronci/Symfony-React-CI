<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f7c9f4f4efa2e97cb075fad56f520293477337be5e5d8f43e78afa1f73040abb extends Twig_Template
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
        $__internal_1aeb29a03da99c572d3cfeb779dad8dbf06e03659eb08a4cbcfcdd7871689aee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aeb29a03da99c572d3cfeb779dad8dbf06e03659eb08a4cbcfcdd7871689aee->enter($__internal_1aeb29a03da99c572d3cfeb779dad8dbf06e03659eb08a4cbcfcdd7871689aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_08dfa2cd1414f9a11dfb28670b375e13551f39760c75a67cdbd833a8ea0cb661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08dfa2cd1414f9a11dfb28670b375e13551f39760c75a67cdbd833a8ea0cb661->enter($__internal_08dfa2cd1414f9a11dfb28670b375e13551f39760c75a67cdbd833a8ea0cb661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1aeb29a03da99c572d3cfeb779dad8dbf06e03659eb08a4cbcfcdd7871689aee->leave($__internal_1aeb29a03da99c572d3cfeb779dad8dbf06e03659eb08a4cbcfcdd7871689aee_prof);

        
        $__internal_08dfa2cd1414f9a11dfb28670b375e13551f39760c75a67cdbd833a8ea0cb661->leave($__internal_08dfa2cd1414f9a11dfb28670b375e13551f39760c75a67cdbd833a8ea0cb661_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5b80605ef6539f3cca4e9f39f9c3f4d6c25a01813f7e987d117a7810e0be2ca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b80605ef6539f3cca4e9f39f9c3f4d6c25a01813f7e987d117a7810e0be2ca0->enter($__internal_5b80605ef6539f3cca4e9f39f9c3f4d6c25a01813f7e987d117a7810e0be2ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ec7664f479d747ee2f578962d8fc1b093f4040bacbd10a297fa6dd195ac8c17b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7664f479d747ee2f578962d8fc1b093f4040bacbd10a297fa6dd195ac8c17b->enter($__internal_ec7664f479d747ee2f578962d8fc1b093f4040bacbd10a297fa6dd195ac8c17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ec7664f479d747ee2f578962d8fc1b093f4040bacbd10a297fa6dd195ac8c17b->leave($__internal_ec7664f479d747ee2f578962d8fc1b093f4040bacbd10a297fa6dd195ac8c17b_prof);

        
        $__internal_5b80605ef6539f3cca4e9f39f9c3f4d6c25a01813f7e987d117a7810e0be2ca0->leave($__internal_5b80605ef6539f3cca4e9f39f9c3f4d6c25a01813f7e987d117a7810e0be2ca0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9eef90742fe785264a11e304b389f067dd98ababa96a75f38669c132bee097f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eef90742fe785264a11e304b389f067dd98ababa96a75f38669c132bee097f0->enter($__internal_9eef90742fe785264a11e304b389f067dd98ababa96a75f38669c132bee097f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f3fd3d639d123b82cf6586250706446b9caa78282671d8477279bf41b8addacf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3fd3d639d123b82cf6586250706446b9caa78282671d8477279bf41b8addacf->enter($__internal_f3fd3d639d123b82cf6586250706446b9caa78282671d8477279bf41b8addacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f3fd3d639d123b82cf6586250706446b9caa78282671d8477279bf41b8addacf->leave($__internal_f3fd3d639d123b82cf6586250706446b9caa78282671d8477279bf41b8addacf_prof);

        
        $__internal_9eef90742fe785264a11e304b389f067dd98ababa96a75f38669c132bee097f0->leave($__internal_9eef90742fe785264a11e304b389f067dd98ababa96a75f38669c132bee097f0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c47315e6b37d7258a057c120c09994399438d75811bde00462a033b7082d973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c47315e6b37d7258a057c120c09994399438d75811bde00462a033b7082d973->enter($__internal_5c47315e6b37d7258a057c120c09994399438d75811bde00462a033b7082d973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_834de28f26a1ebde3974ac7fb3b081bc58a2a065c512f6c228c2d36e8a5e7a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834de28f26a1ebde3974ac7fb3b081bc58a2a065c512f6c228c2d36e8a5e7a4f->enter($__internal_834de28f26a1ebde3974ac7fb3b081bc58a2a065c512f6c228c2d36e8a5e7a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_834de28f26a1ebde3974ac7fb3b081bc58a2a065c512f6c228c2d36e8a5e7a4f->leave($__internal_834de28f26a1ebde3974ac7fb3b081bc58a2a065c512f6c228c2d36e8a5e7a4f_prof);

        
        $__internal_5c47315e6b37d7258a057c120c09994399438d75811bde00462a033b7082d973->leave($__internal_5c47315e6b37d7258a057c120c09994399438d75811bde00462a033b7082d973_prof);

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
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
