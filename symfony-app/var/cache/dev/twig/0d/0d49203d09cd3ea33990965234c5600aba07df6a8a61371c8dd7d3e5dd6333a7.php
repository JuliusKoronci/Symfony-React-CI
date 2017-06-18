<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_1c63371d7a8462c6ccda381095dc3bc69e3c984370e698c45f73108759b97b62 extends Twig_Template
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
        $__internal_c5aca44b209a412db9ecf765a26ecd5e4162607fd9412ea77b901db1e147d8db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5aca44b209a412db9ecf765a26ecd5e4162607fd9412ea77b901db1e147d8db->enter($__internal_c5aca44b209a412db9ecf765a26ecd5e4162607fd9412ea77b901db1e147d8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_69e8a727ae8210132872916451427d315da9c87293429411b4067133ef62daae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e8a727ae8210132872916451427d315da9c87293429411b4067133ef62daae->enter($__internal_69e8a727ae8210132872916451427d315da9c87293429411b4067133ef62daae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_c5aca44b209a412db9ecf765a26ecd5e4162607fd9412ea77b901db1e147d8db->leave($__internal_c5aca44b209a412db9ecf765a26ecd5e4162607fd9412ea77b901db1e147d8db_prof);

        
        $__internal_69e8a727ae8210132872916451427d315da9c87293429411b4067133ef62daae->leave($__internal_69e8a727ae8210132872916451427d315da9c87293429411b4067133ef62daae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
