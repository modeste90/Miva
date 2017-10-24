<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Descriptions
 *
 * @ORM\Table("descriptions")
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repository\DescriptionsRepository")
 */
class Descriptions{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\Produits", inversedBy="descriptions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $produit;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100)
     */
    private $description;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId(){
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Descriptions
     */
    public function setDescription($description){
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription(){
        return $this->description;
    }

    /**
     * Set produit
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Produits $produit
     * @return Descriptions
     */
    public function setProduit(\Ecommerce\EcommerceBundle\Entity\Produits $produit){
        $this->produit = $produit;
        return $this;
    }

    /**
     * Get produit
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Produits 
     */
    public function getProduit(){
        return $this->produit;
    }
}
