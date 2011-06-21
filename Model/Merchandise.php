<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * (c) Daniel Kucharski <daniel@xerias.be>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Vespolina\MerchandiseBundle\Model;

use Vespolina\MerchandiseBundle\Model\MerchandiseInterface;

class Merchandise implements MerchandiseInterface
{

    protected $productReferences;
    protected $nodes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->productReferences = array();

    }


    public function addNode($name, MerchandiseNodeInterface $node)
    {

        $this->nodes[$name] = $node;
    }

    public function getNode($name)
    {

        if (array_key_exists($name, $this->nodes))
        {
            return $this->nodes[$name];
        }
    }


     public function __get($property)
     {

         return $this->getNode($property);

     }

   
}