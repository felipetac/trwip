<?php
namespace Trwip\Model;

class ViajanteModel
{
    private $seq_viajante;
    private $num_documento;
    private $num_telefone;
    private $des_endereco;
    private $tip_genero;
    private $val_renda;
    private $tip_continente;
    private $cod_pais;
    private $cod_estado;
    private $cod_cidade;
    private $med_foto;
    private $dat_inativo;
    //Campo de log dat_cadastro com valor padrao (data atual) no bd

    /**
     * Gets the value of seq_viajante.
     *
     * @return mixed
     */
    public function getSeqViajante()
    {
        return $this->seq_viajante;
    }

    /**
     * Sets the value of seq_viajante.
     *
     * @param mixed $seq_viajante the seq viajante
     *
     * @return self
     */
    private function _setSeqViajante($seq_viajante)
    {
        $this->seq_viajante = $seq_viajante;

        return $this;
    }

    /**
     * Gets the value of num_documento.
     *
     * @return mixed
     */
    public function getNumDocumento()
    {
        return $this->num_documento;
    }

    /**
     * Sets the value of num_documento.
     *
     * @param mixed $num_documento the num documento
     *
     * @return self
     */
    private function _setNumDocumento($num_documento)
    {
        $this->num_documento = $num_documento;

        return $this;
    }

    /**
     * Gets the value of num_telefone.
     *
     * @return mixed
     */
    public function getNumTelefone()
    {
        return $this->num_telefone;
    }

    /**
     * Sets the value of num_telefone.
     *
     * @param mixed $num_telefone the num telefone
     *
     * @return self
     */
    private function _setNumTelefone($num_telefone)
    {
        $this->num_telefone = $num_telefone;

        return $this;
    }

    /**
     * Gets the value of des_endereco.
     *
     * @return mixed
     */
    public function getDesEndereco()
    {
        return $this->des_endereco;
    }

    /**
     * Sets the value of des_endereco.
     *
     * @param mixed $des_endereco the des endereco
     *
     * @return self
     */
    private function _setDesEndereco($des_endereco)
    {
        $this->des_endereco = $des_endereco;

        return $this;
    }

    /**
     * Gets the value of tip_genero.
     *
     * @return mixed
     */
    public function getTipGenero()
    {
        return $this->tip_genero;
    }

    /**
     * Sets the value of tip_genero.
     *
     * @param mixed $tip_genero the tip genero
     *
     * @return self
     */
    private function _setTipGenero($tip_genero)
    {
        $this->tip_genero = $tip_genero;

        return $this;
    }

    /**
     * Gets the value of val_renda.
     *
     * @return mixed
     */
    public function getValRenda()
    {
        return $this->val_renda;
    }

    /**
     * Sets the value of val_renda.
     *
     * @param mixed $val_renda the val renda
     *
     * @return self
     */
    private function _setValRenda($val_renda)
    {
        $this->val_renda = $val_renda;

        return $this;
    }

    /**
     * Gets the value of tip_continente.
     *
     * @return mixed
     */
    public function getTipContinente()
    {
        return $this->tip_continente;
    }

    /**
     * Sets the value of tip_continente.
     *
     * @param mixed $tip_continente the tip continente
     *
     * @return self
     */
    private function _setTipContinente($tip_continente)
    {
        $this->tip_continente = $tip_continente;

        return $this;
    }

    /**
     * Gets the value of cod_pais.
     *
     * @return mixed
     */
    public function getCodPais()
    {
        return $this->cod_pais;
    }

    /**
     * Sets the value of cod_pais.
     *
     * @param mixed $cod_pais the cod pais
     *
     * @return self
     */
    private function _setCodPais($cod_pais)
    {
        $this->cod_pais = $cod_pais;

        return $this;
    }

    /**
     * Gets the value of cod_estado.
     *
     * @return mixed
     */
    public function getCodEstado()
    {
        return $this->cod_estado;
    }

    /**
     * Sets the value of cod_estado.
     *
     * @param mixed $cod_estado the cod estado
     *
     * @return self
     */
    private function _setCodEstado($cod_estado)
    {
        $this->cod_estado = $cod_estado;

        return $this;
    }

    /**
     * Gets the value of cod_cidade.
     *
     * @return mixed
     */
    public function getCodCidade()
    {
        return $this->cod_cidade;
    }

    /**
     * Sets the value of cod_cidade.
     *
     * @param mixed $cod_cidade the cod cidade
     *
     * @return self
     */
    private function _setCodCidade($cod_cidade)
    {
        $this->cod_cidade = $cod_cidade;

        return $this;
    }

    /**
     * Gets the value of med_foto.
     *
     * @return mixed
     */
    public function getMedFoto()
    {
        return $this->med_foto;
    }

    /**
     * Sets the value of med_foto.
     *
     * @param mixed $med_foto the med foto
     *
     * @return self
     */
    private function _setMedFoto($med_foto)
    {
        $this->med_foto = $med_foto;

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
