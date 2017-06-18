<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_9d4dcb5d3946d131f19bf4d57f2c901f66444b05ef31fee2efa364e761611690 extends Twig_Template
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
        $__internal_72a0b6cba4d6a7917a6c977a1d9ccfaa42ea716da662bfde02e6b2eaabcf8a68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72a0b6cba4d6a7917a6c977a1d9ccfaa42ea716da662bfde02e6b2eaabcf8a68->enter($__internal_72a0b6cba4d6a7917a6c977a1d9ccfaa42ea716da662bfde02e6b2eaabcf8a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_471c1d2e6f6742f54159c5ee553818635acb6048337e433086104b6b1844f1ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_471c1d2e6f6742f54159c5ee553818635acb6048337e433086104b6b1844f1ce->enter($__internal_471c1d2e6f6742f54159c5ee553818635acb6048337e433086104b6b1844f1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72a0b6cba4d6a7917a6c977a1d9ccfaa42ea716da662bfde02e6b2eaabcf8a68->leave($__internal_72a0b6cba4d6a7917a6c977a1d9ccfaa42ea716da662bfde02e6b2eaabcf8a68_prof);

        
        $__internal_471c1d2e6f6742f54159c5ee553818635acb6048337e433086104b6b1844f1ce->leave($__internal_471c1d2e6f6742f54159c5ee553818635acb6048337e433086104b6b1844f1ce_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_81ebca577b47473837f2008e7479084183c245a86f4893fd25ef8cd2761c6210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81ebca577b47473837f2008e7479084183c245a86f4893fd25ef8cd2761c6210->enter($__internal_81ebca577b47473837f2008e7479084183c245a86f4893fd25ef8cd2761c6210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7e99aac551d55126bc009ca54ea37fef9bd7e740d3e260d6c2340a25781b3f08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e99aac551d55126bc009ca54ea37fef9bd7e740d3e260d6c2340a25781b3f08->enter($__internal_7e99aac551d55126bc009ca54ea37fef9bd7e740d3e260d6c2340a25781b3f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7e99aac551d55126bc009ca54ea37fef9bd7e740d3e260d6c2340a25781b3f08->leave($__internal_7e99aac551d55126bc009ca54ea37fef9bd7e740d3e260d6c2340a25781b3f08_prof);

        
        $__internal_81ebca577b47473837f2008e7479084183c245a86f4893fd25ef8cd2761c6210->leave($__internal_81ebca577b47473837f2008e7479084183c245a86f4893fd25ef8cd2761c6210_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6f4ccebbc0c7370f00b7d280d6a2badeebbeaec70b8c74bf39e6de20fdff85cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f4ccebbc0c7370f00b7d280d6a2badeebbeaec70b8c74bf39e6de20fdff85cd->enter($__internal_6f4ccebbc0c7370f00b7d280d6a2badeebbeaec70b8c74bf39e6de20fdff85cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8670d58dee6ea660f941d525e1a8c503f587681cb53eb482b788cf5fadbd7ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8670d58dee6ea660f941d525e1a8c503f587681cb53eb482b788cf5fadbd7ea6->enter($__internal_8670d58dee6ea660f941d525e1a8c503f587681cb53eb482b788cf5fadbd7ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8670d58dee6ea660f941d525e1a8c503f587681cb53eb482b788cf5fadbd7ea6->leave($__internal_8670d58dee6ea660f941d525e1a8c503f587681cb53eb482b788cf5fadbd7ea6_prof);

        
        $__internal_6f4ccebbc0c7370f00b7d280d6a2badeebbeaec70b8c74bf39e6de20fdff85cd->leave($__internal_6f4ccebbc0c7370f00b7d280d6a2badeebbeaec70b8c74bf39e6de20fdff85cd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_249299c6121beab33b7388d818386685ebc8fb631e140f8c015db9c2958501fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_249299c6121beab33b7388d818386685ebc8fb631e140f8c015db9c2958501fa->enter($__internal_249299c6121beab33b7388d818386685ebc8fb631e140f8c015db9c2958501fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_810e68c5c11f41ff8c7aecc51884d5621c90c8d474d0a40898a30bb4710ea7c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_810e68c5c11f41ff8c7aecc51884d5621c90c8d474d0a40898a30bb4710ea7c3->enter($__internal_810e68c5c11f41ff8c7aecc51884d5621c90c8d474d0a40898a30bb4710ea7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_810e68c5c11f41ff8c7aecc51884d5621c90c8d474d0a40898a30bb4710ea7c3->leave($__internal_810e68c5c11f41ff8c7aecc51884d5621c90c8d474d0a40898a30bb4710ea7c3_prof);

        
        $__internal_249299c6121beab33b7388d818386685ebc8fb631e140f8c015db9c2958501fa->leave($__internal_249299c6121beab33b7388d818386685ebc8fb631e140f8c015db9c2958501fa_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
", "WebProfilerBundle:Collector:router.html.twig", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
