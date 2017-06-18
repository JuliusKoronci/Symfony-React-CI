<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_9497d66c169b185b91c843fecd722b95f18d0efcae6957491d2dee65a5ea5c6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_656d25ed42daa2936c44d4f587a6d7dcf70b4a5f81707f24b9160805de0f6e52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_656d25ed42daa2936c44d4f587a6d7dcf70b4a5f81707f24b9160805de0f6e52->enter($__internal_656d25ed42daa2936c44d4f587a6d7dcf70b4a5f81707f24b9160805de0f6e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_05b80522671c432d87b16c3dd06abdea2468127c77383650b0679d5b9dfc4ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b80522671c432d87b16c3dd06abdea2468127c77383650b0679d5b9dfc4ad8->enter($__internal_05b80522671c432d87b16c3dd06abdea2468127c77383650b0679d5b9dfc4ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_656d25ed42daa2936c44d4f587a6d7dcf70b4a5f81707f24b9160805de0f6e52->leave($__internal_656d25ed42daa2936c44d4f587a6d7dcf70b4a5f81707f24b9160805de0f6e52_prof);

        
        $__internal_05b80522671c432d87b16c3dd06abdea2468127c77383650b0679d5b9dfc4ad8->leave($__internal_05b80522671c432d87b16c3dd06abdea2468127c77383650b0679d5b9dfc4ad8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_728dbc5afad982e3ba76f8910349e25306c6632c024c7dfae176b7f7eaa80115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_728dbc5afad982e3ba76f8910349e25306c6632c024c7dfae176b7f7eaa80115->enter($__internal_728dbc5afad982e3ba76f8910349e25306c6632c024c7dfae176b7f7eaa80115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_03c0cc3b93d234969fdab45a2ae9441145bdf87802d97862fa84c32bceb16327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c0cc3b93d234969fdab45a2ae9441145bdf87802d97862fa84c32bceb16327->enter($__internal_03c0cc3b93d234969fdab45a2ae9441145bdf87802d97862fa84c32bceb16327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_03c0cc3b93d234969fdab45a2ae9441145bdf87802d97862fa84c32bceb16327->leave($__internal_03c0cc3b93d234969fdab45a2ae9441145bdf87802d97862fa84c32bceb16327_prof);

        
        $__internal_728dbc5afad982e3ba76f8910349e25306c6632c024c7dfae176b7f7eaa80115->leave($__internal_728dbc5afad982e3ba76f8910349e25306c6632c024c7dfae176b7f7eaa80115_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e73b1f1329f95b54790455fd48da035674d8720c3a6f4623b56bef3eedd96d11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e73b1f1329f95b54790455fd48da035674d8720c3a6f4623b56bef3eedd96d11->enter($__internal_e73b1f1329f95b54790455fd48da035674d8720c3a6f4623b56bef3eedd96d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b2da023307724f456f8ad29711426a3c08010c09aa525b1eb4868e707cc6ff10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2da023307724f456f8ad29711426a3c08010c09aa525b1eb4868e707cc6ff10->enter($__internal_b2da023307724f456f8ad29711426a3c08010c09aa525b1eb4868e707cc6ff10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b2da023307724f456f8ad29711426a3c08010c09aa525b1eb4868e707cc6ff10->leave($__internal_b2da023307724f456f8ad29711426a3c08010c09aa525b1eb4868e707cc6ff10_prof);

        
        $__internal_e73b1f1329f95b54790455fd48da035674d8720c3a6f4623b56bef3eedd96d11->leave($__internal_e73b1f1329f95b54790455fd48da035674d8720c3a6f4623b56bef3eedd96d11_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_5deb2cac668224f6c4c3b87c86c438c6095be929f9477f3c3b1e4977fb7f2e35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5deb2cac668224f6c4c3b87c86c438c6095be929f9477f3c3b1e4977fb7f2e35->enter($__internal_5deb2cac668224f6c4c3b87c86c438c6095be929f9477f3c3b1e4977fb7f2e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_431386d805cf67f8c3d470a26dc1a526c3493aa6dc2848a2bded317c397e3981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431386d805cf67f8c3d470a26dc1a526c3493aa6dc2848a2bded317c397e3981->enter($__internal_431386d805cf67f8c3d470a26dc1a526c3493aa6dc2848a2bded317c397e3981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_431386d805cf67f8c3d470a26dc1a526c3493aa6dc2848a2bded317c397e3981->leave($__internal_431386d805cf67f8c3d470a26dc1a526c3493aa6dc2848a2bded317c397e3981_prof);

        
        $__internal_5deb2cac668224f6c4c3b87c86c438c6095be929f9477f3c3b1e4977fb7f2e35->leave($__internal_5deb2cac668224f6c4c3b87c86c438c6095be929f9477f3c3b1e4977fb7f2e35_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
