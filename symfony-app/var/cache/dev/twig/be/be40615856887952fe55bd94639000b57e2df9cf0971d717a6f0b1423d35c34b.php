<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_a4ba03b7cdaa38f515e219a6c307a640bbca76dba11a455bb3b67457af773df3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d820bb2f52484623ba0d1250cf0a3fdceb53f72fab887c9c9f187e3758ed0ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d820bb2f52484623ba0d1250cf0a3fdceb53f72fab887c9c9f187e3758ed0ef->enter($__internal_3d820bb2f52484623ba0d1250cf0a3fdceb53f72fab887c9c9f187e3758ed0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_0448f4a3d593d29baccb4570c2b8ff7b6ba18edd45fe91d82dd13c1bdfe6f0e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0448f4a3d593d29baccb4570c2b8ff7b6ba18edd45fe91d82dd13c1bdfe6f0e6->enter($__internal_0448f4a3d593d29baccb4570c2b8ff7b6ba18edd45fe91d82dd13c1bdfe6f0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d820bb2f52484623ba0d1250cf0a3fdceb53f72fab887c9c9f187e3758ed0ef->leave($__internal_3d820bb2f52484623ba0d1250cf0a3fdceb53f72fab887c9c9f187e3758ed0ef_prof);

        
        $__internal_0448f4a3d593d29baccb4570c2b8ff7b6ba18edd45fe91d82dd13c1bdfe6f0e6->leave($__internal_0448f4a3d593d29baccb4570c2b8ff7b6ba18edd45fe91d82dd13c1bdfe6f0e6_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_e75c3b3e11ccec995ed13d4c249c23a62cf99c21a72453d1cb9637bd7013c589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e75c3b3e11ccec995ed13d4c249c23a62cf99c21a72453d1cb9637bd7013c589->enter($__internal_e75c3b3e11ccec995ed13d4c249c23a62cf99c21a72453d1cb9637bd7013c589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_12b4463cd884dd7b833629979da0ccf78f9f983a667cd1eb46cecf43174abe47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b4463cd884dd7b833629979da0ccf78f9f983a667cd1eb46cecf43174abe47->enter($__internal_12b4463cd884dd7b833629979da0ccf78f9f983a667cd1eb46cecf43174abe47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 27, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 27, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 29, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 29, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_12b4463cd884dd7b833629979da0ccf78f9f983a667cd1eb46cecf43174abe47->leave($__internal_12b4463cd884dd7b833629979da0ccf78f9f983a667cd1eb46cecf43174abe47_prof);

        
        $__internal_e75c3b3e11ccec995ed13d4c249c23a62cf99c21a72453d1cb9637bd7013c589->leave($__internal_e75c3b3e11ccec995ed13d4c249c23a62cf99c21a72453d1cb9637bd7013c589_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b7b0761b9d2ca694f7ca8d6679db88b6290ef677f2ca8f69ba345cee7d7882db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7b0761b9d2ca694f7ca8d6679db88b6290ef677f2ca8f69ba345cee7d7882db->enter($__internal_b7b0761b9d2ca694f7ca8d6679db88b6290ef677f2ca8f69ba345cee7d7882db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c1094bef6ac908339781343f22194d0d303d6c3e0c571d1adff309ad7d9a867f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1094bef6ac908339781343f22194d0d303d6c3e0c571d1adff309ad7d9a867f->enter($__internal_c1094bef6ac908339781343f22194d0d303d6c3e0c571d1adff309ad7d9a867f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 35, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 36, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_c1094bef6ac908339781343f22194d0d303d6c3e0c571d1adff309ad7d9a867f->leave($__internal_c1094bef6ac908339781343f22194d0d303d6c3e0c571d1adff309ad7d9a867f_prof);

        
        $__internal_b7b0761b9d2ca694f7ca8d6679db88b6290ef677f2ca8f69ba345cee7d7882db->leave($__internal_b7b0761b9d2ca694f7ca8d6679db88b6290ef677f2ca8f69ba345cee7d7882db_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
