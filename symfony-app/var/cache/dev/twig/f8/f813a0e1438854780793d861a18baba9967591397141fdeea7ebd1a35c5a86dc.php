<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_431cd2b62524c70869720cd0e7efc50f6d61a4c7b53237546117951785013196 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_272e0c42e9a14327e6da0a96d132fe530fa4ed2638579e42a9c7a72938c123c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_272e0c42e9a14327e6da0a96d132fe530fa4ed2638579e42a9c7a72938c123c3->enter($__internal_272e0c42e9a14327e6da0a96d132fe530fa4ed2638579e42a9c7a72938c123c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_d24fea0f35477b71705d3e1fd4df9027bd8b1e7554ede82b8c6e956a33bc5d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d24fea0f35477b71705d3e1fd4df9027bd8b1e7554ede82b8c6e956a33bc5d17->enter($__internal_d24fea0f35477b71705d3e1fd4df9027bd8b1e7554ede82b8c6e956a33bc5d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_272e0c42e9a14327e6da0a96d132fe530fa4ed2638579e42a9c7a72938c123c3->leave($__internal_272e0c42e9a14327e6da0a96d132fe530fa4ed2638579e42a9c7a72938c123c3_prof);

        
        $__internal_d24fea0f35477b71705d3e1fd4df9027bd8b1e7554ede82b8c6e956a33bc5d17->leave($__internal_d24fea0f35477b71705d3e1fd4df9027bd8b1e7554ede82b8c6e956a33bc5d17_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd49e058ea36152162fc1b32f5cb354b12d41bad4ed5333321f9d5bdaae88556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd49e058ea36152162fc1b32f5cb354b12d41bad4ed5333321f9d5bdaae88556->enter($__internal_fd49e058ea36152162fc1b32f5cb354b12d41bad4ed5333321f9d5bdaae88556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_66693b5a2aed28db7290c5968c5535fc629254f2e67cde8bfedc1a06621c166e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66693b5a2aed28db7290c5968c5535fc629254f2e67cde8bfedc1a06621c166e->enter($__internal_66693b5a2aed28db7290c5968c5535fc629254f2e67cde8bfedc1a06621c166e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_66693b5a2aed28db7290c5968c5535fc629254f2e67cde8bfedc1a06621c166e->leave($__internal_66693b5a2aed28db7290c5968c5535fc629254f2e67cde8bfedc1a06621c166e_prof);

        
        $__internal_fd49e058ea36152162fc1b32f5cb354b12d41bad4ed5333321f9d5bdaae88556->leave($__internal_fd49e058ea36152162fc1b32f5cb354b12d41bad4ed5333321f9d5bdaae88556_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
