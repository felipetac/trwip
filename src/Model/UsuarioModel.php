<?php
namespace Trwip\Model;

class UsuarioModel
{
    private $seq_usuario;
    private $nom_viajante;
    private $eml_acesso;
    private $val_senha;
    private $dat_inativo;
    //Campo de log dat_cadastro com valor padrao (data atual) no bd

    /**
     * Gets the value of seq_usuario.
     *
     * @return mixed
     */
    public function getSeqUsuario()
    {
        return $this->seq_usuario;
    }

    /**
     * Sets the value of seq_usuario.
     *
     * @param mixed $seq_usuario the seq usuario
     *
     * @return self
     */
    private function _setSeqUsuario($seq_usuario)
    {
        $this->seq_usuario = $seq_usuario;

        return $this;
    }

    /**
     * Gets the value of nom_viajante.
     *
     * @return mixed
     */
    public function getNomViajante()
    {
        return $this->nom_viajante;
    }

    /**
     * Sets the value of nom_viajante.
     *
     * @param mixed $nom_viajante the nom viajante
     *
     * @return self
     */
    private function _setNomViajante($nom_viajante)
    {
        $this->nom_viajante = $nom_viajante;

        return $this;
    }

    /**
     * Gets the value of eml_acesso.
     *
     * @return mixed
     */
    public function getEmlAcesso()
    {
        return $this->eml_acesso;
    }

    /**
     * Sets the value of eml_acesso.
     *
     * @param mixed $eml_acesso the eml acesso
     *
     * @return self
     */
    private function _setEmlAcesso($eml_acesso)
    {
        $this->eml_acesso = $eml_acesso;

        return $this;
    }

    /**
     * Gets the value of val_senha.
     *
     * @return mixed
     */
    public function getValSenha()
    {
        return $this->val_senha;
    }

    /**
     * Sets the value of val_senha.
     *
     * @param mixed $val_senha the val senha
     *
     * @return self
     */
    private function _setValSenha($val_senha)
    {
        $this->val_senha = $val_senha;

        return $this;
    }

    /**
     * Gets the value of dat_inativo.
     *
     * @return mixed
     */
    public function getDatInativo()
    {
        return $this->dat_inativo;
    }

    /**
     * Sets the value of dat_inativo.
     *
     * @param mixed $dat_inativo the dat inativo
     *
     * @return self
     */
    private function _setDatInativo($dat_inativo)
    {
        $this->dat_inativo = $dat_inativo;

        return $this;
    }
}
