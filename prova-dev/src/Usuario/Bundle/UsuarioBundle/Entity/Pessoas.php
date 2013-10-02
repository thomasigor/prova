<?php

namespace Usuario\Bundle\UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *  Pessoas
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Usuario\Bundle\UsuarioBundle\Entity\ PessoasRepository")
 */
class  Pessoas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name=""nome: text email: text telefone: integer"", type="string", length=255)
     */
    private $"nome:TextEmail:TextTelefone:Integer";

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="text")
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="text")
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="telefone", type="integer")
     */
    private $telefone;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set "nome:TextEmail:TextTelefone:Integer"
     *
     * @param string $"nome:TextEmail:TextTelefone:Integer"
     * @return  Pessoas
     */
    public function set"nome:TextEmail:TextTelefone:Integer"($"nome:TextEmail:TextTelefone:Integer")
    {
        $this->"nome:TextEmail:TextTelefone:Integer" = $"nome:TextEmail:TextTelefone:Integer";
    
        return $this;
    }

    /**
     * Get "nome:TextEmail:TextTelefone:Integer"
     *
     * @return string 
     */
    public function get"nome:TextEmail:TextTelefone:Integer"()
    {
        return $this->"nome:TextEmail:TextTelefone:Integer";
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return  Pessoas
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    
        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return  Pessoas
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telefone
     *
     * @param integer $telefone
     * @return  Pessoas
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    
        return $this;
    }

    /**
     * Get telefone
     *
     * @return integer 
     */
    public function getTelefone()
    {
        return $this->telefone;
    }
}
