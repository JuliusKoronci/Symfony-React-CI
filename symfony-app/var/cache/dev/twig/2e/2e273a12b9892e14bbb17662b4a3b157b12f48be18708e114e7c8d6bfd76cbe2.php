<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_517e88b75f14ea1de497c90a68dd963a4b480deb9c528b6c3b99eeace4053bc2 extends Twig_Template
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
        $__internal_b0e5519dbaeb325ca6b21b79ce45ac83219ea5f1a873a1c5982e62cd1e619fc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0e5519dbaeb325ca6b21b79ce45ac83219ea5f1a873a1c5982e62cd1e619fc4->enter($__internal_b0e5519dbaeb325ca6b21b79ce45ac83219ea5f1a873a1c5982e62cd1e619fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_cb7c432e962af008c7d377628b162d0e3f51e24360307fe50dc8ded3b89ae02b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb7c432e962af008c7d377628b162d0e3f51e24360307fe50dc8ded3b89ae02b->enter($__internal_cb7c432e962af008c7d377628b162d0e3f51e24360307fe50dc8ded3b89ae02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b0e5519dbaeb325ca6b21b79ce45ac83219ea5f1a873a1c5982e62cd1e619fc4->leave($__internal_b0e5519dbaeb325ca6b21b79ce45ac83219ea5f1a873a1c5982e62cd1e619fc4_prof);

        
        $__internal_cb7c432e962af008c7d377628b162d0e3f51e24360307fe50dc8ded3b89ae02b->leave($__internal_cb7c432e962af008c7d377628b162d0e3f51e24360307fe50dc8ded3b89ae02b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
