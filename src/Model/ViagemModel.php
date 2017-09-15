<?php
namespace Trwip\Model;

class ViagemModel
{
    private $seq_viagem;
    private $seq_organizador;
    private $val_orcamento;
    private $dat_checkin;
    private $dat_checkout;
    private $num_minimo;
    private $num_maximo;
    private $txt_parceiro;
    private $txt_informacoes;
    private $med_foto;
    private $dat_inativo;
    //Campo de log dat_cadastro com valor padrao (data atual) no bd

    /**
     * Gets the value of seq_viagem.
     *
     * @return mixed
     */
    public function getSeqViagem()
    {
        return $this->seq_viagem;
    }

    /**
     * Sets the value of seq_viagem.
     *
     * @param mixed $seq_viagem the seq viagem
     *
     * @return self
     */
    private function setSeqViagem($seq_viagem)
    {
        $this->seq_viagem = $seq_viagem;

        return $this;
    }

    /**
     * Gets the value of seq_organizador.
     *
     * @return mixed
     */
    public function getSeqOrganizador()
    {
        return $this->seq_organizador;
    }

    /**
     * Sets the value of seq_organizador.
     *
     * @param mixed $seq_organizador the seq organizador
     *
     * @return self
     */
    private function setSeqOrganizador($seq_organizador)
    {
        $this->seq_organizador = $seq_organizador;

        return $this;
    }

    /**
     * Gets the value of val_orcamento.
     *
     * @return mixed
     */
    public function getValOrcamento()
    {
        return $this->val_orcamento;
    }

    /**
     * Sets the value of val_orcamento.
     *
     * @param mixed $val_orcamento the val orcamento
     *
     * @return self
     */
    private function setValOrcamento($val_orcamento)
    {
        $this->val_orcamento = $val_orcamento;

        return $this;
    }

    /**
     * Gets the value of dat_checkin.
     *
     * @return mixed
     */
    public function getDatCheckin()
    {
        return $this->dat_checkin;
    }

    /**
     * Sets the value of dat_checkin.
     *
     * @param mixed $dat_checkin the dat checkin
     *
     * @return self
     */
    private function setDatCheckin($dat_checkin)
    {
        $this->dat_checkin = $dat_checkin;

        return $this;
    }

    /**
     * Gets the value of dat_checkout.
     *
     * @return mixed
     */
    public function getDatCheckout()
    {
        return $this->dat_checkout;
    }

    /**
     * Sets the value of dat_checkout.
     *
     * @param mixed $dat_checkout the dat checkout
     *
     * @return self
     */
    private function setDatCheckout($dat_checkout)
    {
        $this->dat_checkout = $dat_checkout;

        return $this;
    }

    /**
     * Gets the value of num_minimo.
     *
     * @return mixed
     */
    public function getNumMinimo()
    {
        return $this->num_minimo;
    }

    /**
     * Sets the value of num_minimo.
     *
     * @param mixed $num_minimo the num minimo
     *
     * @return self
     */
    private function setNumMinimo($num_minimo)
    {
        $this->num_minimo = $num_minimo;

        return $this;
    }

    /**
     * Gets the value of num_maximo.
     *
     * @return mixed
     */
    public function getNumMaximo()
    {
        return $this->num_maximo;
    }

    /**
     * Sets the value of num_maximo.
     *
     * @param mixed $num_maximo the num maximo
     *
     * @return self
     */
    private function setNumMaximo($num_maximo)
    {
        $this->num_maximo = $num_maximo;

        return $this;
    }

    /**
     * Gets the value of txt_parceiro.
     *
     * @return mixed
     */
    public function getTxtParceiro()
    {
        return $this->txt_parceiro;
    }

    /**
     * Sets the value of txt_parceiro.
     *
     * @param mixed $txt_parceiro the txt parceiro
     *
     * @return self
     */
    private function setTxtParceiro($txt_parceiro)
    {
        $this->txt_parceiro = $txt_parceiro;

        return $this;
    }

    /**
     * Gets the value of txt_informacoes.
     *
     * @return mixed
     */
    public function getTxtInformacoes()
    {
        return $this->txt_informacoes;
    }

    /**
     * Sets the value of txt_informacoes.
     *
     * @param mixed $txt_informacoes the txt informacoes
     *
     * @return self
     */
    private function setTxtInformacoes($txt_informacoes)
    {
        $this->txt_informacoes = $txt_informacoes;

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
    private function setMedFoto($med_foto)
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
    private function setDatInativo($dat_inativo)
    {
        $this->dat_inativo = $dat_inativo;

        return $this;
    }
}
