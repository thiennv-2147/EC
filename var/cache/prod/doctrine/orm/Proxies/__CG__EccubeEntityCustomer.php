<?php

namespace Proxies\__CG__\Eccube\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Customer extends \Eccube\Entity\Customer implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'id', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'name01', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'name02', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'kana01', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'kana02', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'company_name', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'postal_code', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'addr01', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'addr02', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'email', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'phone_number', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'birth', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'password', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'salt', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'secret_key', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'first_buy_date', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'last_buy_date', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'buy_times', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'buy_total', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'note', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'reset_key', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'reset_expire', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'point', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'create_date', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'update_date', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'CustomerFavoriteProducts', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'CustomerAddresses', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'Orders', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'Status', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'Sex', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'Job', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'Country', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'Pref'];
        }

        return ['__isInitialized__', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'id', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'name01', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'name02', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'kana01', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'kana02', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'company_name', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'postal_code', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'addr01', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'addr02', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'email', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'phone_number', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'birth', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'password', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'salt', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'secret_key', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'first_buy_date', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'last_buy_date', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'buy_times', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'buy_total', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'note', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'reset_key', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'reset_expire', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'point', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'create_date', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'update_date', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'CustomerFavoriteProducts', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'CustomerAddresses', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'Orders', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'Status', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'Sex', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'Job', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'Country', '' . "\0" . 'Eccube\\Entity\\Customer' . "\0" . 'Pref'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Customer $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName01($name01)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName01', [$name01]);

        return parent::setName01($name01);
    }

    /**
     * {@inheritDoc}
     */
    public function getName01()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName01', []);

        return parent::getName01();
    }

    /**
     * {@inheritDoc}
     */
    public function setName02($name02)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName02', [$name02]);

        return parent::setName02($name02);
    }

    /**
     * {@inheritDoc}
     */
    public function getName02()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName02', []);

        return parent::getName02();
    }

    /**
     * {@inheritDoc}
     */
    public function setKana01($kana01 = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKana01', [$kana01]);

        return parent::setKana01($kana01);
    }

    /**
     * {@inheritDoc}
     */
    public function getKana01()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKana01', []);

        return parent::getKana01();
    }

    /**
     * {@inheritDoc}
     */
    public function setKana02($kana02 = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKana02', [$kana02]);

        return parent::setKana02($kana02);
    }

    /**
     * {@inheritDoc}
     */
    public function getKana02()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKana02', []);

        return parent::getKana02();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompanyName($companyName = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompanyName', [$companyName]);

        return parent::setCompanyName($companyName);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompanyName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompanyName', []);

        return parent::getCompanyName();
    }

    /**
     * {@inheritDoc}
     */
    public function setPostalCode($postal_code = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostalCode', [$postal_code]);

        return parent::setPostalCode($postal_code);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostalCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostalCode', []);

        return parent::getPostalCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddr01($addr01 = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddr01', [$addr01]);

        return parent::setAddr01($addr01);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddr01()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddr01', []);

        return parent::getAddr01();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddr02($addr02 = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddr02', [$addr02]);

        return parent::setAddr02($addr02);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddr02()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddr02', []);

        return parent::getAddr02();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoneNumber($phone_number = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoneNumber', [$phone_number]);

        return parent::setPhoneNumber($phone_number);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoneNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoneNumber', []);

        return parent::getPhoneNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setBirth($birth = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBirth', [$birth]);

        return parent::setBirth($birth);
    }

    /**
     * {@inheritDoc}
     */
    public function getBirth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBirth', []);

        return parent::getBirth();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalt($salt = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalt', [$salt]);

        return parent::setSalt($salt);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function setSecretKey($secretKey)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSecretKey', [$secretKey]);

        return parent::setSecretKey($secretKey);
    }

    /**
     * {@inheritDoc}
     */
    public function getSecretKey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSecretKey', []);

        return parent::getSecretKey();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstBuyDate($firstBuyDate = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstBuyDate', [$firstBuyDate]);

        return parent::setFirstBuyDate($firstBuyDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstBuyDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstBuyDate', []);

        return parent::getFirstBuyDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastBuyDate($lastBuyDate = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastBuyDate', [$lastBuyDate]);

        return parent::setLastBuyDate($lastBuyDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastBuyDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastBuyDate', []);

        return parent::getLastBuyDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setBuyTimes($buyTimes = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBuyTimes', [$buyTimes]);

        return parent::setBuyTimes($buyTimes);
    }

    /**
     * {@inheritDoc}
     */
    public function getBuyTimes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBuyTimes', []);

        return parent::getBuyTimes();
    }

    /**
     * {@inheritDoc}
     */
    public function setBuyTotal($buyTotal = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBuyTotal', [$buyTotal]);

        return parent::setBuyTotal($buyTotal);
    }

    /**
     * {@inheritDoc}
     */
    public function getBuyTotal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBuyTotal', []);

        return parent::getBuyTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function setNote($note = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNote', [$note]);

        return parent::setNote($note);
    }

    /**
     * {@inheritDoc}
     */
    public function getNote()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNote', []);

        return parent::getNote();
    }

    /**
     * {@inheritDoc}
     */
    public function setResetKey($resetKey = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResetKey', [$resetKey]);

        return parent::setResetKey($resetKey);
    }

    /**
     * {@inheritDoc}
     */
    public function getResetKey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResetKey', []);

        return parent::getResetKey();
    }

    /**
     * {@inheritDoc}
     */
    public function setResetExpire($resetExpire = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResetExpire', [$resetExpire]);

        return parent::setResetExpire($resetExpire);
    }

    /**
     * {@inheritDoc}
     */
    public function getResetExpire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResetExpire', []);

        return parent::getResetExpire();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreateDate($createDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreateDate', [$createDate]);

        return parent::setCreateDate($createDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreateDate', []);

        return parent::getCreateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateDate($updateDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateDate', [$updateDate]);

        return parent::setUpdateDate($updateDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateDate', []);

        return parent::getUpdateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function addCustomerFavoriteProduct(\Eccube\Entity\CustomerFavoriteProduct $customerFavoriteProduct)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCustomerFavoriteProduct', [$customerFavoriteProduct]);

        return parent::addCustomerFavoriteProduct($customerFavoriteProduct);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCustomerFavoriteProduct(\Eccube\Entity\CustomerFavoriteProduct $customerFavoriteProduct)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCustomerFavoriteProduct', [$customerFavoriteProduct]);

        return parent::removeCustomerFavoriteProduct($customerFavoriteProduct);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomerFavoriteProducts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomerFavoriteProducts', []);

        return parent::getCustomerFavoriteProducts();
    }

    /**
     * {@inheritDoc}
     */
    public function addCustomerAddress(\Eccube\Entity\CustomerAddress $customerAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCustomerAddress', [$customerAddress]);

        return parent::addCustomerAddress($customerAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCustomerAddress(\Eccube\Entity\CustomerAddress $customerAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCustomerAddress', [$customerAddress]);

        return parent::removeCustomerAddress($customerAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomerAddresses()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomerAddresses', []);

        return parent::getCustomerAddresses();
    }

    /**
     * {@inheritDoc}
     */
    public function addOrder(\Eccube\Entity\Order $order)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOrder', [$order]);

        return parent::addOrder($order);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOrder(\Eccube\Entity\Order $order)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOrder', [$order]);

        return parent::removeOrder($order);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrders()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrders', []);

        return parent::getOrders();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(\Eccube\Entity\Master\CustomerStatus $status = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setSex(\Eccube\Entity\Master\Sex $sex = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSex', [$sex]);

        return parent::setSex($sex);
    }

    /**
     * {@inheritDoc}
     */
    public function getSex()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSex', []);

        return parent::getSex();
    }

    /**
     * {@inheritDoc}
     */
    public function setJob(\Eccube\Entity\Master\Job $job = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJob', [$job]);

        return parent::setJob($job);
    }

    /**
     * {@inheritDoc}
     */
    public function getJob()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJob', []);

        return parent::getJob();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry(\Eccube\Entity\Master\Country $country = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', [$country]);

        return parent::setCountry($country);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', []);

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setPref(\Eccube\Entity\Master\Pref $pref = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPref', [$pref]);

        return parent::setPref($pref);
    }

    /**
     * {@inheritDoc}
     */
    public function getPref()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPref', []);

        return parent::getPref();
    }

    /**
     * {@inheritDoc}
     */
    public function setPoint($point)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPoint', [$point]);

        return parent::setPoint($point);
    }

    /**
     * {@inheritDoc}
     */
    public function getPoint()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPoint', []);

        return parent::getPoint();
    }

    /**
     * {@inheritDoc}
     */
    public function offsetExists($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetExists', [$offset]);

        return parent::offsetExists($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetSet($offset, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetSet', [$offset, $value]);

        return parent::offsetSet($offset, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetGet($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetGet', [$offset]);

        return parent::offsetGet($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetUnset($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetUnset', [$offset]);

        return parent::offsetUnset($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function setPropertiesFromArray(array $arrProps, array $excludeAttribute = array (
), \ReflectionClass $parentClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPropertiesFromArray', [$arrProps, $excludeAttribute, $parentClass]);

        return parent::setPropertiesFromArray($arrProps, $excludeAttribute, $parentClass);
    }

    /**
     * {@inheritDoc}
     */
    public function toArray(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
  3 => 'AnnotationReader',
), \ReflectionClass $parentClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', [$excludeAttribute, $parentClass]);

        return parent::toArray($excludeAttribute, $parentClass);
    }

    /**
     * {@inheritDoc}
     */
    public function toNormalizedArray(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
  3 => 'AnnotationReader',
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toNormalizedArray', [$excludeAttribute]);

        return parent::toNormalizedArray($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function toJSON(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
  3 => 'AnnotationReader',
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toJSON', [$excludeAttribute]);

        return parent::toJSON($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function toXML(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
  3 => 'AnnotationReader',
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toXML', [$excludeAttribute]);

        return parent::toXML($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function copyProperties($srcObject, array $excludeAttribute = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'copyProperties', [$srcObject, $excludeAttribute]);

        return parent::copyProperties($srcObject, $excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function setAnnotationReader(\Doctrine\Common\Annotations\Reader $Reader)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnnotationReader', [$Reader]);

        return parent::setAnnotationReader($Reader);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnnotationReader()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnnotationReader', []);

        return parent::getAnnotationReader();
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityIdentifierAsArray(\Eccube\Entity\AbstractEntity $Entity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityIdentifierAsArray', [$Entity]);

        return parent::getEntityIdentifierAsArray($Entity);
    }

}
