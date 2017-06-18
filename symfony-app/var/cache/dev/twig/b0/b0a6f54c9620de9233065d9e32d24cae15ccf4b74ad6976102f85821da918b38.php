<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6d50e82a460c285905b72b395c01d04901c4293e641d66187ce4174434f732c4 extends Twig_Template
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
        $__internal_8ba89fa2537ae6db921b97a88d5e70fe9ec89cbe6926fdbacd282542d3f3c866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ba89fa2537ae6db921b97a88d5e70fe9ec89cbe6926fdbacd282542d3f3c866->enter($__internal_8ba89fa2537ae6db921b97a88d5e70fe9ec89cbe6926fdbacd282542d3f3c866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_6f72d39bf9beebf8dd9b849f5e5f2b50a2f9cda83f9a6686fa13bff6e89c829d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f72d39bf9beebf8dd9b849f5e5f2b50a2f9cda83f9a6686fa13bff6e89c829d->enter($__internal_6f72d39bf9beebf8dd9b849f5e5f2b50a2f9cda83f9a6686fa13bff6e89c829d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_8ba89fa2537ae6db921b97a88d5e70fe9ec89cbe6926fdbacd282542d3f3c866->leave($__internal_8ba89fa2537ae6db921b97a88d5e70fe9ec89cbe6926fdbacd282542d3f3c866_prof);

        
        $__internal_6f72d39bf9beebf8dd9b849f5e5f2b50a2f9cda83f9a6686fa13bff6e89c829d->leave($__internal_6f72d39bf9beebf8dd9b849f5e5f2b50a2f9cda83f9a6686fa13bff6e89c829d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
