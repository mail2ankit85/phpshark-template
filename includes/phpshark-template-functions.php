<?php 

class phpshark_twig_template implements \Twig\Loader\LoaderInterface{
    private $_filelist = [];
    private $_template_path_1;
    private $_template_path_2;
    private $_cache_path;

    public function __construct(){
        $this->_template_path_1 = PHPST_PLUGBASE.'public'.DS;
        $this->_template_path_2 = PHPST_PLUGBASE.'public'.DS.'partials'.DS;
        $this->_cache_path = PHPST_PLUGBASE.'cache'.DS;

        foreach (glob("{$this->_template_path_2}*.php") as $filename) {
            array_push($this->_filelist, $filename);
        }
        foreach (glob("{$this->_template_path_1}*.php") as $filename) {
            array_push($this->_filelist, $filename);
         }
        foreach (glob("{$this->_template_path_2}*.html") as $filename) {
            array_push($this->_filelist, $filename);
        }
        foreach (glob("{$this->_template_path_1}*.html") as $filename) {
            array_push($this->_filelist, $filename);
        }
    }

    private function phpshark_template_chain_loader(){
        $loader_ar = [];
        $chainhtmls = [];
        foreach($this->_filelist as $files){
            $inner_loader = new \Twig\Loader\ArrayLoader([
                $bases => file_get_contents($files)
            ]);
            array_push($chainhtmls,$inner_loader);
        }
        $newchainloader = new \Twig\Loader\ChainLoader($chainhtmls);
        return $twig = new \Twig\Environment($newchainloader, [
            'cache' => $this->_cache_path,
            'debug' => true
        ]);
    }

    private function phpshark_template_filesystem_loader(){
        $loader = new \Twig\Loader\FilesystemLoader([$this->_template_path_1,$this->_template_path_2]);
        return $twig = new \Twig\Environment($loader, [
            'cache' => $this->_cache_path,
            'debug' => true
        ]);
    }
    
    public function getSourceContext($name){}
    public function getCacheKey($name){}
    public function isFresh($name, $time){}
    public function exists($name){}

    public function phpshark_template_render($load_html_page, $variable = []){
        $twig = $this->phpshark_template_filesystem_loader();
        $template = $twig->load($load_html_page);
        return $template->render($variable);
    }
    
    public function phpshark_template_addPath($loc){
        $loader = $this->phpshark_template_filesystem_loader();
        $loader->addPath($loc);
    }
    
    public function phpshark_template_prependPath($loc){
        $loader = $this->phpshark_template_filesystem_loader();
        $loader->prependPath($loc);
    }
    
    
}

/***
 * SAMPLE TESTING CODE
 */

// $template = new phpshark_twig_template();
// $d = $template->phpshark_template_render('test.php', ['variable1' => 'ankit']);
// echo $d;


