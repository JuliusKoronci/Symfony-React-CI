<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_806514d38d4c3c5e5203947a1a95768e4ae29ced04b03f10b45695a92e9cf14a extends Twig_Template
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
        $__internal_6b81b419b67abb3c516e3b1adf21880788ad861146b26cd30117e620f0fdf120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b81b419b67abb3c516e3b1adf21880788ad861146b26cd30117e620f0fdf120->enter($__internal_6b81b419b67abb3c516e3b1adf21880788ad861146b26cd30117e620f0fdf120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_523cc33a4c39aa0b00a56c9f673ba854e9b4719e973b7f5016c33a7a98598a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_523cc33a4c39aa0b00a56c9f673ba854e9b4719e973b7f5016c33a7a98598a88->enter($__internal_523cc33a4c39aa0b00a56c9f673ba854e9b4719e973b7f5016c33a7a98598a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_6b81b419b67abb3c516e3b1adf21880788ad861146b26cd30117e620f0fdf120->leave($__internal_6b81b419b67abb3c516e3b1adf21880788ad861146b26cd30117e620f0fdf120_prof);

        
        $__internal_523cc33a4c39aa0b00a56c9f673ba854e9b4719e973b7f5016c33a7a98598a88->leave($__internal_523cc33a4c39aa0b00a56c9f673ba854e9b4719e973b7f5016c33a7a98598a88_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
