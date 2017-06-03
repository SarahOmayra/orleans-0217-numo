<?php

namespace NumoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SnLink
 *
 * @ORM\Table(name="sn_link")
 * @ORM\Entity(repositoryClass="NumoBundle\Repository\SnLinkRepository")
 */
class SnLink
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;


    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="snLink")
     *
     */
    protected $user;

    /**
     * @ORM\ManyToMany(targetEntity="SocialNetwork", inversedBy="snLink")
     *
     */
    protected $socialNetworks;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return SnLink
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}

