<?php

/* base.html.twig */
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
        $__internal_8bd075a6d3af47904262a6014315899b0f7dc21c55690488c13b5618c2b8ce8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bd075a6d3af47904262a6014315899b0f7dc21c55690488c13b5618c2b8ce8f->enter($__internal_8bd075a6d3af47904262a6014315899b0f7dc21c55690488c13b5618c2b8ce8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6cf505da270855b06d082ee9e07c998baa36ddc493a1c4f38d46b4d3ca5eb8f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf505da270855b06d082ee9e07c998baa36ddc493a1c4f38d46b4d3ca5eb8f4->enter($__internal_6cf505da270855b06d082ee9e07c998baa36ddc493a1c4f38d46b4d3ca5eb8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8bd075a6d3af47904262a6014315899b0f7dc21c55690488c13b5618c2b8ce8f->leave($__internal_8bd075a6d3af47904262a6014315899b0f7dc21c55690488c13b5618c2b8ce8f_prof);

        
        $__internal_6cf505da270855b06d082ee9e07c998baa36ddc493a1c4f38d46b4d3ca5eb8f4->leave($__internal_6cf505da270855b06d082ee9e07c998baa36ddc493a1c4f38d46b4d3ca5eb8f4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a5179701c4fd912375ba0c72a963924c3b3aff69d960222a26273720b980594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a5179701c4fd912375ba0c72a963924c3b3aff69d960222a26273720b980594->enter($__internal_9a5179701c4fd912375ba0c72a963924c3b3aff69d960222a26273720b980594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_002cd59cb032d184142bcee2dc3af9de45ac4b135a86a88a086adf9720ea268f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_002cd59cb032d184142bcee2dc3af9de45ac4b135a86a88a086adf9720ea268f->enter($__internal_002cd59cb032d184142bcee2dc3af9de45ac4b135a86a88a086adf9720ea268f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_002cd59cb032d184142bcee2dc3af9de45ac4b135a86a88a086adf9720ea268f->leave($__internal_002cd59cb032d184142bcee2dc3af9de45ac4b135a86a88a086adf9720ea268f_prof);

        
        $__internal_9a5179701c4fd912375ba0c72a963924c3b3aff69d960222a26273720b980594->leave($__internal_9a5179701c4fd912375ba0c72a963924c3b3aff69d960222a26273720b980594_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_539bec59d26c9d2537763754ad717c5f9fb1182b5cc9d5392f4116db364ec284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_539bec59d26c9d2537763754ad717c5f9fb1182b5cc9d5392f4116db364ec284->enter($__internal_539bec59d26c9d2537763754ad717c5f9fb1182b5cc9d5392f4116db364ec284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_aa957f9fa6c6cc901ec621e91963bd8f349689234a5cdde40982c7adc649fcda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa957f9fa6c6cc901ec621e91963bd8f349689234a5cdde40982c7adc649fcda->enter($__internal_aa957f9fa6c6cc901ec621e91963bd8f349689234a5cdde40982c7adc649fcda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_aa957f9fa6c6cc901ec621e91963bd8f349689234a5cdde40982c7adc649fcda->leave($__internal_aa957f9fa6c6cc901ec621e91963bd8f349689234a5cdde40982c7adc649fcda_prof);

        
        $__internal_539bec59d26c9d2537763754ad717c5f9fb1182b5cc9d5392f4116db364ec284->leave($__internal_539bec59d26c9d2537763754ad717c5f9fb1182b5cc9d5392f4116db364ec284_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_201fbc59a7f2e6539fabc5588846a2eecec9008ce0ed718d960c07e84ccf2f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_201fbc59a7f2e6539fabc5588846a2eecec9008ce0ed718d960c07e84ccf2f13->enter($__internal_201fbc59a7f2e6539fabc5588846a2eecec9008ce0ed718d960c07e84ccf2f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1764deeefd04be29acb1ae3652808849e21594e1a46ed6eb761690ebcee3717f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1764deeefd04be29acb1ae3652808849e21594e1a46ed6eb761690ebcee3717f->enter($__internal_1764deeefd04be29acb1ae3652808849e21594e1a46ed6eb761690ebcee3717f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1764deeefd04be29acb1ae3652808849e21594e1a46ed6eb761690ebcee3717f->leave($__internal_1764deeefd04be29acb1ae3652808849e21594e1a46ed6eb761690ebcee3717f_prof);

        
        $__internal_201fbc59a7f2e6539fabc5588846a2eecec9008ce0ed718d960c07e84ccf2f13->leave($__internal_201fbc59a7f2e6539fabc5588846a2eecec9008ce0ed718d960c07e84ccf2f13_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_111d53c94befd96f30cc4422f5a1301242e02ec09b730d60e7f8937454ae9afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_111d53c94befd96f30cc4422f5a1301242e02ec09b730d60e7f8937454ae9afd->enter($__internal_111d53c94befd96f30cc4422f5a1301242e02ec09b730d60e7f8937454ae9afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_97a9185691b394ee253095bfb22f764f610b41676e68d54643dd4cc736742230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a9185691b394ee253095bfb22f764f610b41676e68d54643dd4cc736742230->enter($__internal_97a9185691b394ee253095bfb22f764f610b41676e68d54643dd4cc736742230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_97a9185691b394ee253095bfb22f764f610b41676e68d54643dd4cc736742230->leave($__internal_97a9185691b394ee253095bfb22f764f610b41676e68d54643dd4cc736742230_prof);

        
        $__internal_111d53c94befd96f30cc4422f5a1301242e02ec09b730d60e7f8937454ae9afd->leave($__internal_111d53c94befd96f30cc4422f5a1301242e02ec09b730d60e7f8937454ae9afd_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "/Users/juliuskoronci/Desktop/sites/CI/app/Resources/views/base.html.twig");
    }
}
