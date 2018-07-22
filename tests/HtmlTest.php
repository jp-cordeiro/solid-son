<?php

namespace Solid;

class HtmlTest extends  \PHPUnit\Framework\TestCase {
   public function testRenderizaUmaImagem(){
       $html = new Html;
       $img = $html->img('images/photo.jpg');

       $this->assertEquals('<img src="images/photo.jpg"/>',$img);
   }

   public function testCriaLinkComUmaTagAnchor(){
       $html = new Html;
       $img = $html->img('images/photo.jpg');
       $link = $html->a('http://teste.com',$img);

       $this->assertEquals('<a href="http://teste.com"><img src="images/photo.jpg"/></a>',$link);
   }

   public function testCriarListaNaoOrdenada(){
       $html = new Html;
       $ul = $html->ul('<li>JP</li>');

       $this->assertEquals('<ul><li>JP</li></ul>',$ul);
   }
}