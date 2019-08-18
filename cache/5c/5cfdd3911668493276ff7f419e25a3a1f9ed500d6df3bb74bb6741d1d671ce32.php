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

/* form-registeration-complete.html */
class __TwigTemplate_f1192898550f3f7663e03f17bcb4c7528888c4cd3d1b982e69edf3e1a0c0d795 extends \Twig\Template
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
        echo "
<form id=\"confirmation-form\" method=\"post\" action=\"\">

        <div class=\"form-body my-3 p-2\"> 
        
            <div class=\"form-row\">
        
                <div class=\"col-md-6 offset-md-3\">  
        
                    <div class=\"form-group\">  
                        <label class=\"form-label\" for=\"username\">Enter Username:</label>
                        <input class=\"form-control\" name=\"username\" id=\"username\" type=\"text\" />
                    </div>
        
                    <div class=\"form-group\">  
                        <label class=\"form-label\" for=\"password\">Enter a password:</label>
                        <input class=\"form-control\" name=\"password\" id=\"password\" type=\"password\" />
                    </div>
        
                    <div class=\"form-group\">  
                        <label class=\"form-label\" for=\"repeat-password\">Re-Enter your password:</label>
                        <input class=\"form-control\" name=\"repeat-password\" id=\"repeat-password\" type=\"password\" />
                    </div>
        
                    <div class=\"form-group d-flex flex-column justify-content-center\">
                        <div id=\"g-recaptcha\"></div>
                    </div>
        
                    <input class=\"d-none\" name=\"form\" type=\"text\" value=\"register-complete\" />
        
                    <div class=\"form-group d-flex justify-content-center mt-5\">    
                        <button id=\"submitbtn\" class=\"btn btn-primary\" type=\"submit\" value=\"Register\">Create My Login</button>
                    </div>
        
                </div>
        
            </div>
        
        </div>
        
        </form>
        ";
    }

    public function getTemplateName()
    {
        return "form-registeration-complete.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<form id=\"confirmation-form\" method=\"post\" action=\"\">

        <div class=\"form-body my-3 p-2\"> 
        
            <div class=\"form-row\">
        
                <div class=\"col-md-6 offset-md-3\">  
        
                    <div class=\"form-group\">  
                        <label class=\"form-label\" for=\"username\">Enter Username:</label>
                        <input class=\"form-control\" name=\"username\" id=\"username\" type=\"text\" />
                    </div>
        
                    <div class=\"form-group\">  
                        <label class=\"form-label\" for=\"password\">Enter a password:</label>
                        <input class=\"form-control\" name=\"password\" id=\"password\" type=\"password\" />
                    </div>
        
                    <div class=\"form-group\">  
                        <label class=\"form-label\" for=\"repeat-password\">Re-Enter your password:</label>
                        <input class=\"form-control\" name=\"repeat-password\" id=\"repeat-password\" type=\"password\" />
                    </div>
        
                    <div class=\"form-group d-flex flex-column justify-content-center\">
                        <div id=\"g-recaptcha\"></div>
                    </div>
        
                    <input class=\"d-none\" name=\"form\" type=\"text\" value=\"register-complete\" />
        
                    <div class=\"form-group d-flex justify-content-center mt-5\">    
                        <button id=\"submitbtn\" class=\"btn btn-primary\" type=\"submit\" value=\"Register\">Create My Login</button>
                    </div>
        
                </div>
        
            </div>
        
        </div>
        
        </form>
        ", "form-registeration-complete.html", "/Applications/MAMP/htdocs/server/fixopr/wp-content/plugins/phpshark-template/public/partials/form-registeration-complete.html");
    }
}
