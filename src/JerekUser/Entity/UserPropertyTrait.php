<?php

namespace JerekUser\Entity;

trait UserPropertyTrait
{
    /**
     * @var \ZfcUser\Entity\User
     * @ORM\ManyToOne(targetEntity="\ZfcUser\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     */
    private $user;

    /**
     * @param \ZfcUser\Entity\User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return \ZfcUser\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
