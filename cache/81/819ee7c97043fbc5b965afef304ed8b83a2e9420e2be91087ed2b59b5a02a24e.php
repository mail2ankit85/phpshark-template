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

/* form-forgot-password.html */
class __TwigTemplate_73faf73d79618001feb2e00e4daebc6d05de89d007eb49c96b5f5bfd9a40026d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<form id=\"password-reset-form\" method=\"post\" action=\"\">

        <div class=\"form-body my-3 p-2\">
            <div class=\"form-row\">
                <div class=\"col-md-6 offset-md-3\">
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"username-email\">Username/Email<span class=\"mandatory\">*</span>:</label>
                        <input id=\"username-email\" type=\"text\" name=\"username-email\" class=\"form-control\"/>
                    </div>

                    <!-- <div class=\"form-group d-flex flex-column justify-content-center\">
                        <div id=\"g-recaptcha\"></div>
                    </div> -->

                    <input class=\"d-none\" name=\"form\" type=\"text\" value=\"forgot\" />

                    <div class=\"form-group d-flex justify-content-center mt-3\">
                        <button id=\"submitbtn\" class=\"btn btn-primary\" type=\"submit\" value=\"forgot-password\">Send me a rest link</button>
                    </div>
                </div>
            </div>
        </div>

    </form>
";
    }

    public function getTemplateName()
    {
        return "form-forgot-password.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form id=\"password-reset-form\" method=\"post\" action=\"\">

        <div class=\"form-body my-3 p-2\">
            <div class=\"form-row\">
                <div class=\"col-md-6 offset-md-3\">
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"username-email\">Username/Email<span class=\"mandatory\">*</span>:</label>
                        <input id=\"username-email\" type=\"text\" name=\"username-email\" class=\"form-control\"/>
                    </div>

                    <!-- <div class=\"form-group d-flex flex-column justify-content-center\">
                        <div id=\"g-recaptcha\"></div>
                    </div> -->

                    <input class=\"d-none\" name=\"form\" type=\"text\" value=\"forgot\" />

                    <div class=\"form-group d-flex justify-content-center mt-3\">
                        <button id=\"submitbtn\" class=\"btn btn-primary\" type=\"submit\" value=\"forgot-password\">Send me a rest link</button>
                    </div>
                </div>
            </div>
        </div>

    </form>
", "form-forgot-password.html", "/Applications/MAMP/htdocs/new/crs/wp-content/plugins/phpshark-template/public/partials/form-forgot-password.html");
    }
}
