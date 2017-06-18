<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_29d5b9acb8b59a3ed6803451a0e844bd447110129248c8e828a14b06479c9f5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_0686a78fb970e2cddf219846bda1d21fb65a9f315898f088f23ef5c9692f7352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0686a78fb970e2cddf219846bda1d21fb65a9f315898f088f23ef5c9692f7352->enter($__internal_0686a78fb970e2cddf219846bda1d21fb65a9f315898f088f23ef5c9692f7352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_fc822a7b6ca0a9be86fde5374a7204f34845668d988da91fdaf81aa1769ad2b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc822a7b6ca0a9be86fde5374a7204f34845668d988da91fdaf81aa1769ad2b5->enter($__internal_fc822a7b6ca0a9be86fde5374a7204f34845668d988da91fdaf81aa1769ad2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0686a78fb970e2cddf219846bda1d21fb65a9f315898f088f23ef5c9692f7352->leave($__internal_0686a78fb970e2cddf219846bda1d21fb65a9f315898f088f23ef5c9692f7352_prof);

        
        $__internal_fc822a7b6ca0a9be86fde5374a7204f34845668d988da91fdaf81aa1769ad2b5->leave($__internal_fc822a7b6ca0a9be86fde5374a7204f34845668d988da91fdaf81aa1769ad2b5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_110eed982591860e6c8425c278741c3899abd9bcd4c5459bea5dc067e10f5f5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_110eed982591860e6c8425c278741c3899abd9bcd4c5459bea5dc067e10f5f5d->enter($__internal_110eed982591860e6c8425c278741c3899abd9bcd4c5459bea5dc067e10f5f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e2cde016152bd12eb26fa663437dad8f13ba5762db033112e36bf27732dbdc11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2cde016152bd12eb26fa663437dad8f13ba5762db033112e36bf27732dbdc11->enter($__internal_e2cde016152bd12eb26fa663437dad8f13ba5762db033112e36bf27732dbdc11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e2cde016152bd12eb26fa663437dad8f13ba5762db033112e36bf27732dbdc11->leave($__internal_e2cde016152bd12eb26fa663437dad8f13ba5762db033112e36bf27732dbdc11_prof);

        
        $__internal_110eed982591860e6c8425c278741c3899abd9bcd4c5459bea5dc067e10f5f5d->leave($__internal_110eed982591860e6c8425c278741c3899abd9bcd4c5459bea5dc067e10f5f5d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_423cf76153124867fe37622aca0be6bdd961b8c512d5680ecf98eb5d28e4969d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_423cf76153124867fe37622aca0be6bdd961b8c512d5680ecf98eb5d28e4969d->enter($__internal_423cf76153124867fe37622aca0be6bdd961b8c512d5680ecf98eb5d28e4969d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0608fa81e4ff8d669cae62d36dadf588d385f7d11ca3157e40ac1eff9b24402f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0608fa81e4ff8d669cae62d36dadf588d385f7d11ca3157e40ac1eff9b24402f->enter($__internal_0608fa81e4ff8d669cae62d36dadf588d385f7d11ca3157e40ac1eff9b24402f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0608fa81e4ff8d669cae62d36dadf588d385f7d11ca3157e40ac1eff9b24402f->leave($__internal_0608fa81e4ff8d669cae62d36dadf588d385f7d11ca3157e40ac1eff9b24402f_prof);

        
        $__internal_423cf76153124867fe37622aca0be6bdd961b8c512d5680ecf98eb5d28e4969d->leave($__internal_423cf76153124867fe37622aca0be6bdd961b8c512d5680ecf98eb5d28e4969d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
