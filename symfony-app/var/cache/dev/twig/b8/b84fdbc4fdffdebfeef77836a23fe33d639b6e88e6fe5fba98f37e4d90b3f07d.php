<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_7c473e50ffadb89a16a03f273b905470caafbe395c033a8f306e579006f24257 extends Twig_Template
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
        $__internal_21b411bb6553bd23b08f87a0a5a0430ce7df548ccb721d65493bfd8443eafcf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21b411bb6553bd23b08f87a0a5a0430ce7df548ccb721d65493bfd8443eafcf8->enter($__internal_21b411bb6553bd23b08f87a0a5a0430ce7df548ccb721d65493bfd8443eafcf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_7c4f7c4471080a6fd9f0549617a9b42bb41358f1b82fc8ad4fd3d8083deb5d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4f7c4471080a6fd9f0549617a9b42bb41358f1b82fc8ad4fd3d8083deb5d54->enter($__internal_7c4f7c4471080a6fd9f0549617a9b42bb41358f1b82fc8ad4fd3d8083deb5d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_21b411bb6553bd23b08f87a0a5a0430ce7df548ccb721d65493bfd8443eafcf8->leave($__internal_21b411bb6553bd23b08f87a0a5a0430ce7df548ccb721d65493bfd8443eafcf8_prof);

        
        $__internal_7c4f7c4471080a6fd9f0549617a9b42bb41358f1b82fc8ad4fd3d8083deb5d54->leave($__internal_7c4f7c4471080a6fd9f0549617a9b42bb41358f1b82fc8ad4fd3d8083deb5d54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
