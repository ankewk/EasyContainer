<?php
/**
* The easy Container Interface of PHP
* @author Anke 
* @version 1.0
*/
interface ContainerInterface
{
    public function bindContainer($abstrat, $parameter);//register container class
    public function getContainer();//get container
}