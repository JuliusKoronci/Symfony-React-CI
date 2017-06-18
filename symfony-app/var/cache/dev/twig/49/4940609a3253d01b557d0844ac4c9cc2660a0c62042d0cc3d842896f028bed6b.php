<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7d06bd9bcd94c5d6586aaa1904dfaa84b0c09748642926c7fa857875dfeaffb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_4a3509ab6283761b1f97448ba3720d6ad316c5ad53bb1bebcc6c554b6c91a32e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a3509ab6283761b1f97448ba3720d6ad316c5ad53bb1bebcc6c554b6c91a32e->enter($__internal_4a3509ab6283761b1f97448ba3720d6ad316c5ad53bb1bebcc6c554b6c91a32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_3c48779e5ea0262fee567544b8078293f1584d2e1a455ef852eafdaf1f757806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c48779e5ea0262fee567544b8078293f1584d2e1a455ef852eafdaf1f757806->enter($__internal_3c48779e5ea0262fee567544b8078293f1584d2e1a455ef852eafdaf1f757806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a3509ab6283761b1f97448ba3720d6ad316c5ad53bb1bebcc6c554b6c91a32e->leave($__internal_4a3509ab6283761b1f97448ba3720d6ad316c5ad53bb1bebcc6c554b6c91a32e_prof);

        
        $__internal_3c48779e5ea0262fee567544b8078293f1584d2e1a455ef852eafdaf1f757806->leave($__internal_3c48779e5ea0262fee567544b8078293f1584d2e1a455ef852eafdaf1f757806_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9cc386a192f0fbe339d1abf3c19cf48b605fbb2566b202e07d73449bcdad7020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cc386a192f0fbe339d1abf3c19cf48b605fbb2566b202e07d73449bcdad7020->enter($__internal_9cc386a192f0fbe339d1abf3c19cf48b605fbb2566b202e07d73449bcdad7020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_273e3b6bf4b573f9dcd8518776750a98951c042ad1d3178456a8146ad3bcef66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273e3b6bf4b573f9dcd8518776750a98951c042ad1d3178456a8146ad3bcef66->enter($__internal_273e3b6bf4b573f9dcd8518776750a98951c042ad1d3178456a8146ad3bcef66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_273e3b6bf4b573f9dcd8518776750a98951c042ad1d3178456a8146ad3bcef66->leave($__internal_273e3b6bf4b573f9dcd8518776750a98951c042ad1d3178456a8146ad3bcef66_prof);

        
        $__internal_9cc386a192f0fbe339d1abf3c19cf48b605fbb2566b202e07d73449bcdad7020->leave($__internal_9cc386a192f0fbe339d1abf3c19cf48b605fbb2566b202e07d73449bcdad7020_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_962979038b8720385bb1addca154d9981f6b5da39be13103d5eec21bb4c778b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_962979038b8720385bb1addca154d9981f6b5da39be13103d5eec21bb4c778b3->enter($__internal_962979038b8720385bb1addca154d9981f6b5da39be13103d5eec21bb4c778b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f643cbbedb2c58820b19424a728c7b468a7ee4c9c0a52f65d103e74c07833e57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f643cbbedb2c58820b19424a728c7b468a7ee4c9c0a52f65d103e74c07833e57->enter($__internal_f643cbbedb2c58820b19424a728c7b468a7ee4c9c0a52f65d103e74c07833e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_f643cbbedb2c58820b19424a728c7b468a7ee4c9c0a52f65d103e74c07833e57->leave($__internal_f643cbbedb2c58820b19424a728c7b468a7ee4c9c0a52f65d103e74c07833e57_prof);

        
        $__internal_962979038b8720385bb1addca154d9981f6b5da39be13103d5eec21bb4c778b3->leave($__internal_962979038b8720385bb1addca154d9981f6b5da39be13103d5eec21bb4c778b3_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3480386dec13eff3e5927551410db514ef3d51190cd7f66ed4ff2e5ee7d00a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3480386dec13eff3e5927551410db514ef3d51190cd7f66ed4ff2e5ee7d00a9->enter($__internal_e3480386dec13eff3e5927551410db514ef3d51190cd7f66ed4ff2e5ee7d00a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_775039cac7f6cd644fe78140773f1ba0fbc55bbd2167002e212c908532c2ba28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_775039cac7f6cd644fe78140773f1ba0fbc55bbd2167002e212c908532c2ba28->enter($__internal_775039cac7f6cd644fe78140773f1ba0fbc55bbd2167002e212c908532c2ba28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_775039cac7f6cd644fe78140773f1ba0fbc55bbd2167002e212c908532c2ba28->leave($__internal_775039cac7f6cd644fe78140773f1ba0fbc55bbd2167002e212c908532c2ba28_prof);

        
        $__internal_e3480386dec13eff3e5927551410db514ef3d51190cd7f66ed4ff2e5ee7d00a9->leave($__internal_e3480386dec13eff3e5927551410db514ef3d51190cd7f66ed4ff2e5ee7d00a9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
