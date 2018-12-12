<?php
/**
* The easy Container Class of PHP
* @author Anke 
* @version 1.0
*/
require_once 'ContainerInterface.php';
class EasyContainer implements ContainerInterface
{
    private $containers = [];

    public function __construct()
    {
        
    }

    /*
     * class container register
     * @param $abstrat    class   class instance
     * @param $parameter  string  calss param
     */
    public function bindContainer($abstrat, $parameter)
    {
        $this->containers[] = [$abstrat, $parameter];
    }

    /*
     * get class container
     */
    public function getContainer()
    {
        for($start = count($this->containers)-1; $start>=0; $start--){
            $container = $this->containers[$start]; 
            if(empty($container[0]->$container[1])) continue;
            return $container[0]->$container[1];
        }
    }
    
}