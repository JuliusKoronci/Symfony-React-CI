<?php

/* ::base.html.twig */
class __TwigTemplate_374afc3716d5c733e378af6ba74d61075bb3101f2c9ac793ad82662383f0f14e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a6a5ec0f7687b4d6353767ae2d1ffc14c8f3da31b0e62288ad08e6f710e5ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a6a5ec0f7687b4d6353767ae2d1ffc14c8f3da31b0e62288ad08e6f710e5ffe->enter($__internal_3a6a5ec0f7687b4d6353767ae2d1ffc14c8f3da31b0e62288ad08e6f710e5ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_0545f3e3a8fe1dce11cb68f363d5bf2a9d5cdd3e11da6375cb690ad31a2571c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0545f3e3a8fe1dce11cb68f363d5bf2a9d5cdd3e11da6375cb690ad31a2571c6->enter($__internal_0545f3e3a8fe1dce11cb68f363d5bf2a9d5cdd3e11da6375cb690ad31a2571c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_3a6a5ec0f7687b4d6353767ae2d1ffc14c8f3da31b0e62288ad08e6f710e5ffe->leave($__internal_3a6a5ec0f7687b4d6353767ae2d1ffc14c8f3da31b0e62288ad08e6f710e5ffe_prof);

        
        $__internal_0545f3e3a8fe1dce11cb68f363d5bf2a9d5cdd3e11da6375cb690ad31a2571c6->leave($__internal_0545f3e3a8fe1dce11cb68f363d5bf2a9d5cdd3e11da6375cb690ad31a2571c6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f067d3eea440e351f6517a7a34233068059519cbaabaa74e5b38d93dd4e9e9b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f067d3eea440e351f6517a7a34233068059519cbaabaa74e5b38d93dd4e9e9b2->enter($__internal_f067d3eea440e351f6517a7a34233068059519cbaabaa74e5b38d93dd4e9e9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5dc6fa9c6adb3e723183c453a517847d8b613e38acbed6ac5206ccf723ca43e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dc6fa9c6adb3e723183c453a517847d8b613e38acbed6ac5206ccf723ca43e0->enter($__internal_5dc6fa9c6adb3e723183c453a517847d8b613e38acbed6ac5206ccf723ca43e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5dc6fa9c6adb3e723183c453a517847d8b613e38acbed6ac5206ccf723ca43e0->leave($__internal_5dc6fa9c6adb3e723183c453a517847d8b613e38acbed6ac5206ccf723ca43e0_prof);

        
        $__internal_f067d3eea440e351f6517a7a34233068059519cbaabaa74e5b38d93dd4e9e9b2->leave($__internal_f067d3eea440e351f6517a7a34233068059519cbaabaa74e5b38d93dd4e9e9b2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2bb2a50c5fbf8933d363081f98446b2ed26e836aa25e87826a0561aa1f4ed119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bb2a50c5fbf8933d363081f98446b2ed26e836aa25e87826a0561aa1f4ed119->enter($__internal_2bb2a50c5fbf8933d363081f98446b2ed26e836aa25e87826a0561aa1f4ed119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0d20c1e93f4ff3b54d919bbe0b7cebb5c3a01a4fc9bc59badbb7984f8a1eb754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d20c1e93f4ff3b54d919bbe0b7cebb5c3a01a4fc9bc59badbb7984f8a1eb754->enter($__internal_0d20c1e93f4ff3b54d919bbe0b7cebb5c3a01a4fc9bc59badbb7984f8a1eb754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0d20c1e93f4ff3b54d919bbe0b7cebb5c3a01a4fc9bc59badbb7984f8a1eb754->leave($__internal_0d20c1e93f4ff3b54d919bbe0b7cebb5c3a01a4fc9bc59badbb7984f8a1eb754_prof);

        
        $__internal_2bb2a50c5fbf8933d363081f98446b2ed26e836aa25e87826a0561aa1f4ed119->leave($__internal_2bb2a50c5fbf8933d363081f98446b2ed26e836aa25e87826a0561aa1f4ed119_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_14810e6b76c463c6af786d516cc77035c032e2ad91de839b74e67dfead2d508f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14810e6b76c463c6af786d516cc77035c032e2ad91de839b74e67dfead2d508f->enter($__internal_14810e6b76c463c6af786d516cc77035c032e2ad91de839b74e67dfead2d508f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6458c6a3ad83987af39db6d51af7f23938b334ac548fa56832f1fca56c925008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6458c6a3ad83987af39db6d51af7f23938b334ac548fa56832f1fca56c925008->enter($__internal_6458c6a3ad83987af39db6d51af7f23938b334ac548fa56832f1fca56c925008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6458c6a3ad83987af39db6d51af7f23938b334ac548fa56832f1fca56c925008->leave($__internal_6458c6a3ad83987af39db6d51af7f23938b334ac548fa56832f1fca56c925008_prof);

        
        $__internal_14810e6b76c463c6af786d516cc77035c032e2ad91de839b74e67dfead2d508f->leave($__internal_14810e6b76c463c6af786d516cc77035c032e2ad91de839b74e67dfead2d508f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f8ed531411f2532f16436f06847d1b0f28d3fca23e617a6e2af1fa78d505493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f8ed531411f2532f16436f06847d1b0f28d3fca23e617a6e2af1fa78d505493->enter($__internal_5f8ed531411f2532f16436f06847d1b0f28d3fca23e617a6e2af1fa78d505493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5dca015197c1c198385e7d3cb4e6da482ce30fa96420220e08b7bb62c2391453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dca015197c1c198385e7d3cb4e6da482ce30fa96420220e08b7bb62c2391453->enter($__internal_5dca015197c1c198385e7d3cb4e6da482ce30fa96420220e08b7bb62c2391453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5dca015197c1c198385e7d3cb4e6da482ce30fa96420220e08b7bb62c2391453->leave($__internal_5dca015197c1c198385e7d3cb4e6da482ce30fa96420220e08b7bb62c2391453_prof);

        
        $__internal_5f8ed531411f2532f16436f06847d1b0f28d3fca23e617a6e2af1fa78d505493->leave($__internal_5f8ed531411f2532f16436f06847d1b0f28d3fca23e617a6e2af1fa78d505493_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Users/juliuskoronci/Desktop/sites/CI/app/Resources/views/base.html.twig");
    }
}
