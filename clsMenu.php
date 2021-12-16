<?php

    class Menu {
        
        private $aItems = array();
        private $aIds = array();
        private $aLinks = array();

        public function getMenu() {
            $html = $this->setCss();
            $html .= $this->setHtml();
            $html .= $this->setJS();

            return $html; 
        }

        public function addItems($item, $ids, $buttonLink) {
            array_push($this->aItems, $item);
            array_push($this->aIds, $ids);
            array_push($this->aLinks, $buttonLink);
        }

        private function setHtml(){
            $html =' <div id="header"> 
                        <a href=index.php><img id="Logo" src="images/vista kantine.png"></a>'; //put your logo here 

                        foreach($this->aItems as $key => $value) {   

                            $menuitem = str_replace("_", " ", $value);
                            $id = $this->aIds[$key];
                            $link = $this->aLinks[$key];

                            $html .= "<a href='$link'><button id='$id'>$menuitem</button></a>";
                        }
                      
            $html .= '</div>';
          return $html;
        }

        
        private function setCss(){
            $css = "<link rel='stylesheet' href='stylemenu.css'>";
            return $css;
        }

        private function setJS(){
            
            $js = "<script src='functionsmenu.js'></script>";
            return $js;
        }    
        
    }
//paste into index:
//<?php
//require_once("clsMenu.php");
//$objMenu = new Menu();
//$objMenu->addItems('Button3', 'topButton3');
//$objMenu->addItems('Button2', 'topButton2');
//$objMenu->addItems('Button1', 'topButton1');
//?) <-- Close here
//echo $objMenu->getMenu(); ?) where you want the menu to go (usually at to of <body>)
// ) = > 
?>