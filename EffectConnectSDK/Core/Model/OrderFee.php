<?php

    namespace EffectConnectSDK\Core\Model;

    use EffectConnectSDK\Core\Abstracts\ApiModel;
    use EffectConnectSDK\Core\Interfaces\ApiModelInterface;

    /**
     * Class OrderFee
     *
     * @author  Stefan Van den Heuvel
     * @company Koek & Peer
     * @product EffectConnect
     * @package EffectConnectSDK
     */
    final class OrderFee extends ApiModel implements ApiModelInterface
    {
        const FEE_TYPE_COMMISSION   = 'commission';
        const FEE_TYPE_SHIPPING     = 'shipping';
        const FEE_TYPE_TRANSACTION  = 'transaction';

        /**
         * REQUIRED
         *
         * @var string $_type
         */
        protected $_type;
        /**
         * REQUIRED
         * @var float $_amount
         */
        protected $_amount;

        public function getName()
        {
            return 'fee';
        }

        /**
         * @return string
         */
        public function getType()
        {
            return $this->_type;
        }

        /**
         * @param string $type
         *
         * @return OrderFee
         */
        public function setType($type)
        {
            $this->_type = $type;

            return $this;
        }

        /**
         * @return float
         */
        public function getAmount()
        {
            return $this->_amount;
        }

        /**
         * @param float $amount
         *
         * @return OrderFee
         */
        public function setAmount($amount)
        {
            $this->_amount = $amount;

            return $this;
        }
    }