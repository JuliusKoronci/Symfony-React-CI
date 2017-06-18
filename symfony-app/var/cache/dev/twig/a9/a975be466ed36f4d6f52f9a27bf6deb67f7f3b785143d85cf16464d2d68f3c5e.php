<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_187903e721194a68d3a073c43fac08e09b97e743b6c556db44ad8c9be9f2ade4 extends Twig_Template
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
        $__internal_d313b772afedc9b88f1b480213ec5cf577ee8b54435b8a1aa28a4981aab01e14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d313b772afedc9b88f1b480213ec5cf577ee8b54435b8a1aa28a4981aab01e14->enter($__internal_d313b772afedc9b88f1b480213ec5cf577ee8b54435b8a1aa28a4981aab01e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_54c0a9bec40d990f146cd26b7f1bd229b55eedc9e692181a9a17d67ec775293d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c0a9bec40d990f146cd26b7f1bd229b55eedc9e692181a9a17d67ec775293d->enter($__internal_54c0a9bec40d990f146cd26b7f1bd229b55eedc9e692181a9a17d67ec775293d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_d313b772afedc9b88f1b480213ec5cf577ee8b54435b8a1aa28a4981aab01e14->leave($__internal_d313b772afedc9b88f1b480213ec5cf577ee8b54435b8a1aa28a4981aab01e14_prof);

        
        $__internal_54c0a9bec40d990f146cd26b7f1bd229b55eedc9e692181a9a17d67ec775293d->leave($__internal_54c0a9bec40d990f146cd26b7f1bd229b55eedc9e692181a9a17d67ec775293d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
