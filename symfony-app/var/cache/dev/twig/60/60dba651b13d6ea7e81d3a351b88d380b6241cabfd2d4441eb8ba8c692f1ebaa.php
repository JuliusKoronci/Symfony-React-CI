<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_960cc3be75184c21bd0211d399a14a6f5d32f0719283805a69cdf9b0eb692a34 extends Twig_Template
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
        $__internal_62584022c71a70de12eab7456b55dce859babc7bbda8faf15aa516f9fcca895b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62584022c71a70de12eab7456b55dce859babc7bbda8faf15aa516f9fcca895b->enter($__internal_62584022c71a70de12eab7456b55dce859babc7bbda8faf15aa516f9fcca895b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_442ecb88ca73495f63de4e4ebb986e746f9e962e32142060a26f19405471af35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_442ecb88ca73495f63de4e4ebb986e746f9e962e32142060a26f19405471af35->enter($__internal_442ecb88ca73495f63de4e4ebb986e746f9e962e32142060a26f19405471af35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_62584022c71a70de12eab7456b55dce859babc7bbda8faf15aa516f9fcca895b->leave($__internal_62584022c71a70de12eab7456b55dce859babc7bbda8faf15aa516f9fcca895b_prof);

        
        $__internal_442ecb88ca73495f63de4e4ebb986e746f9e962e32142060a26f19405471af35->leave($__internal_442ecb88ca73495f63de4e4ebb986e746f9e962e32142060a26f19405471af35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
