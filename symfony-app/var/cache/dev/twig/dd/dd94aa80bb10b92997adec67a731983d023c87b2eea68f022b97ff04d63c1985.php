<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_aa3446e39023810349f2cc665a338f6b2fe69a9b58f94aa4a2abe506ed03d4f3 extends Twig_Template
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
        $__internal_fd7db4a43f2d80da89d53d70a15dd54cbceeb2de18383cce2926b3a01d1dd941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd7db4a43f2d80da89d53d70a15dd54cbceeb2de18383cce2926b3a01d1dd941->enter($__internal_fd7db4a43f2d80da89d53d70a15dd54cbceeb2de18383cce2926b3a01d1dd941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_7a04932a5d771bbec3c070321f3463360b7cbe6bdd904b71d73f68f685b82e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a04932a5d771bbec3c070321f3463360b7cbe6bdd904b71d73f68f685b82e05->enter($__internal_7a04932a5d771bbec3c070321f3463360b7cbe6bdd904b71d73f68f685b82e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_fd7db4a43f2d80da89d53d70a15dd54cbceeb2de18383cce2926b3a01d1dd941->leave($__internal_fd7db4a43f2d80da89d53d70a15dd54cbceeb2de18383cce2926b3a01d1dd941_prof);

        
        $__internal_7a04932a5d771bbec3c070321f3463360b7cbe6bdd904b71d73f68f685b82e05->leave($__internal_7a04932a5d771bbec3c070321f3463360b7cbe6bdd904b71d73f68f685b82e05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
