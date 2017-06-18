<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_80f45ec1b418f5b89980fb3a517c0045fe9bf178286df5ee898ca2d5006a49bb extends Twig_Template
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
        $__internal_90f34e39d338e7cc0a18fda460658a0bdd3aa0010b155b70a97b6c078b8f3513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f34e39d338e7cc0a18fda460658a0bdd3aa0010b155b70a97b6c078b8f3513->enter($__internal_90f34e39d338e7cc0a18fda460658a0bdd3aa0010b155b70a97b6c078b8f3513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_2ec97af8a15e2a1d27849b631f518987d37a9106ba5f01118068bd1a39f8c23c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec97af8a15e2a1d27849b631f518987d37a9106ba5f01118068bd1a39f8c23c->enter($__internal_2ec97af8a15e2a1d27849b631f518987d37a9106ba5f01118068bd1a39f8c23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_90f34e39d338e7cc0a18fda460658a0bdd3aa0010b155b70a97b6c078b8f3513->leave($__internal_90f34e39d338e7cc0a18fda460658a0bdd3aa0010b155b70a97b6c078b8f3513_prof);

        
        $__internal_2ec97af8a15e2a1d27849b631f518987d37a9106ba5f01118068bd1a39f8c23c->leave($__internal_2ec97af8a15e2a1d27849b631f518987d37a9106ba5f01118068bd1a39f8c23c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
