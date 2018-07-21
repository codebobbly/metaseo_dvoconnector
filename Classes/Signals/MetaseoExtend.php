<?php

namespace RGU\MetaseoDvoconnector\Signals;

class MetaseoExtend {
    /**
     * Metaseo Signal for page metadata
     * see -> \Metaseo\Metaseo\Page\Part\MetatagPart->processMetaTags
     *
     * @param $args
     * @param $obj
     * @return array
     */
    public function metatagOutput($args, $obj) {
      // Modify the parameter $args here

      $mapper =array(
        'image.url' => 'image:url',
        'image.alt' => 'image:alt',
        'image.width' => 'image:width',
        'image.height' => 'image:height',
        'image.type' => 'image:type',
       );

       foreach ($mapper as $key => $value) {

         if($args["og.".$key]["attributes"]["property"] === "og:".$key) {
           $args["og.".$key]["attributes"]["property"] = "og:".$value;
         }

       }

       return array($args, $obj);

    }

}
