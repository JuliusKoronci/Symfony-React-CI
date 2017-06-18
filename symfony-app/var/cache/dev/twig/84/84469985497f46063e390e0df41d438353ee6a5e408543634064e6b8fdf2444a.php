<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_b58cac7a8709f0ca8f695c86caa2e85e284e776ea6671dcf8e995869df45968c extends Twig_Template
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
        $__internal_83dc34d7f2d699b9588808c50aeeb5e4c347a4c109bd0c77cd194deb6beb0bc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83dc34d7f2d699b9588808c50aeeb5e4c347a4c109bd0c77cd194deb6beb0bc3->enter($__internal_83dc34d7f2d699b9588808c50aeeb5e4c347a4c109bd0c77cd194deb6beb0bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_46a09ef1df3500fd8e87409ba10b233e09204530750f02f32a86909edf73d481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46a09ef1df3500fd8e87409ba10b233e09204530750f02f32a86909edf73d481->enter($__internal_46a09ef1df3500fd8e87409ba10b233e09204530750f02f32a86909edf73d481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_83dc34d7f2d699b9588808c50aeeb5e4c347a4c109bd0c77cd194deb6beb0bc3->leave($__internal_83dc34d7f2d699b9588808c50aeeb5e4c347a4c109bd0c77cd194deb6beb0bc3_prof);

        
        $__internal_46a09ef1df3500fd8e87409ba10b233e09204530750f02f32a86909edf73d481->leave($__internal_46a09ef1df3500fd8e87409ba10b233e09204530750f02f32a86909edf73d481_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
