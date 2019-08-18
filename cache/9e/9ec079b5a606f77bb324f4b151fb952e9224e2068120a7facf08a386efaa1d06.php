<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* password-change.html */
class __TwigTemplate_0bf212ac6be9d21b3a5e82b6cf0b05d31d67c18287eb3d9e4a77ad159145c890 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base-dialog-center-logged-user.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base-dialog-center-logged-user.html", "password-change.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        if (((($context["ind"] ?? null) != null) && (($context["ind"] ?? null) == true))) {
            // line 5
            echo "        <div class=\"p-3\">

            <div class=\"alert alert-success alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <strong>Success!</strong> Your password has been successfully changed!
            </div>

        </div>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if (((($context["ind"] ?? null) != null) && (($context["ind"] ?? null) == false))) {
            // line 16
            echo "    <div class=\"p-3\">

            <div class=\"alert alert-danger alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <strong>Error!</strong> Sorry! The password is not updated. Either you did not re-type your password correctly. 
                or you old password is wrong.
            </div>

        </div>
    ";
        }
    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    <div class=\"form-heading my-3 p-2\"> 
        <h3 class=\"d-flex justify-content-center\">Password Change</h3>
        <h6 class=\"d-flex justify-content-center\">Change your Account Password</h6>
    </div>
    <hr/>

    ";
        // line 35
        $this->loadTemplate("form-reset-2.html", "password-change.html", 35)->display($context);
    }

    public function getTemplateName()
    {
        return "password-change.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 35,  88 => 29,  84 => 28,  70 => 16,  68 => 15,  65 => 14,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-dialog-center-logged-user.html\" %}

{% block messages %}
    {% if ( ind != null and ind == true  ) %}
        <div class=\"p-3\">

            <div class=\"alert alert-success alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <strong>Success!</strong> Your password has been successfully changed!
            </div>

        </div>
    {% endif %}

    {% if ( ind != null and ind == false ) %}
    <div class=\"p-3\">

            <div class=\"alert alert-danger alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <strong>Error!</strong> Sorry! The password is not updated. Either you did not re-type your password correctly. 
                or you old password is wrong.
            </div>

        </div>
    {% endif %}
{% endblock %}

{% block body %}
    <div class=\"form-heading my-3 p-2\"> 
        <h3 class=\"d-flex justify-content-center\">Password Change</h3>
        <h6 class=\"d-flex justify-content-center\">Change your Account Password</h6>
    </div>
    <hr/>

    {% include 'form-reset-2.html' %}
{% endblock %}

", "password-change.html", "/Applications/MAMP/htdocs/server/fixopr/wp-content/plugins/phpshark-template/public/password-change.html");
    }
}
