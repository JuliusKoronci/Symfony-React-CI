<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_12262f68278541c8f6260640047655b65b24a0b45489b4e5cc17db0f93d2c2bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ffa383aa1fbcc00c785288c2bee94ade27bc81f397a77578546b39c3da5a683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ffa383aa1fbcc00c785288c2bee94ade27bc81f397a77578546b39c3da5a683->enter($__internal_3ffa383aa1fbcc00c785288c2bee94ade27bc81f397a77578546b39c3da5a683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_7a4a252c5dc2e1cb97e55036a066077eb7c118494b89980d7625297d65e2b770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a4a252c5dc2e1cb97e55036a066077eb7c118494b89980d7625297d65e2b770->enter($__internal_7a4a252c5dc2e1cb97e55036a066077eb7c118494b89980d7625297d65e2b770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_3ffa383aa1fbcc00c785288c2bee94ade27bc81f397a77578546b39c3da5a683->leave($__internal_3ffa383aa1fbcc00c785288c2bee94ade27bc81f397a77578546b39c3da5a683_prof);

        
        $__internal_7a4a252c5dc2e1cb97e55036a066077eb7c118494b89980d7625297d65e2b770->leave($__internal_7a4a252c5dc2e1cb97e55036a066077eb7c118494b89980d7625297d65e2b770_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
