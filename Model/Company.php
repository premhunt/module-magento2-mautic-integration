<?php
/**
 * Copyright © landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lof\Mautic\Model;

use Lof\Mautic\Api\Data\CompanyInterface;

class Company extends \Magento\Framework\Model\AbstractModel implements CompanyInterface
{

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\Lof\Mautic\Model\ResourceModel\Company::class);
    }

    /**
     * Get company_id
     * @return string|null
     */
    public function getCompanyId()
    {
        return $this->_get(self::COMPANY_ID);
    }

    /**
     * Set company_id
     * @param string $companyId
     * @return \Lof\Mautic\Api\Data\CompanyInterface
     */
    public function setCompanyId($companyId)
    {
        return $this->setData(self::COMPANY_ID, $companyId);
    }

    /**
     * Get companyname
     * @return string|null
     */
    public function getCompanyname()
    {
        return $this->_get(self::COMPANYNAME);
    }

    /**
     * Set companyname
     * @param string $companyname
     * @return \Lof\Mautic\Api\Data\CompanyInterface
     */
    public function setCompanyname($companyname)
    {
        return $this->setData(self::COMPANYNAME, $companyname);
    }

    /**
     * Get mautic_company_id
     * @return string|null
     */
    public function getMauticCompanyId()
    {
        return $this->_get(self::MAUTIC_COMPANY_ID);
    }

    /**
     * Set mautic_company_id
     * @param string $mauticCompanyId
     * @return \Lof\Mautic\Api\Data\CompanyInterface
     */
    public function setMauticCompanyId($mauticCompanyId)
    {
        return $this->setData(self::MAUTIC_COMPANY_ID, $mauticCompanyId);
    }

    /**
     * Get companyaddress1
     * @return string|null
     */
    public function getCompanyaddress1()
    {
        return $this->_get(self::COMPANYADDRESS1);
    }

    /**
     * Set companyaddress1
     * @param string $companyaddress1
     * @return \Lof\Mautic\Api\Data\CompanyInterface
     */
    public function setCompanyaddress1($companyaddress1)
    {
        return $this->setData(self::COMPANYADDRESS1, $companyaddress1);
    }

    /**
     * Get companyaddress2
     * @return string|null
     */
    public function getCompanyaddress2()
    {
        return $this->_get(self::COMPANYADDRESS2);
    }

    /**
     * Set companyaddress2
     * @param string $companyaddress2
     * @return \Lof\Mautic\Api\Data\CompanyInterface
     */
    public function setCompanyaddress2($companyaddress2)
    {
        return $this->setData(self::COMPANYADDRESS2, $companyaddress2);
    }

    /**
     * Get companycity
     * @return string|null
     */
    public function getCompanycity()
    {
        return $this->_get(self::COMPANYCITY);
    }

    /**
     * Set companycity
     * @param string $companycity
     * @return \Lof\Mautic\Api\Data\CompanyInterface
     */
    public function setCompanycity($companycity)
    {
        return $this->setData(self::COMPANYCITY, $companycity);
    }

    /**
     * Get companystate
     * @return string|null
     */
    public function getCompanystate()
    {
        return $this->_get(self::COMPANYSTATE);
    }

    /**
     * Set companystate
     * @param string $companystate
     * @return \Lof\Mautic\Api\Data\CompanyInterface
     */
    public function setCompanystate($companystate)
    {
        return $this->setData(self::COMPANYSTATE, $companystate);
    }

    /**
     * Get companycountry
     * @return string|null
     */
    public function getCompanycountry()
    {
        return $this->_get(self::COMPANYCOUNTRY);
    }

    /**
     * Set companycountry
     * @param string $companycountry
     * @return \Lof\Mautic\Api\Data\CompanyInterface
     */
    public function setCompanycountry($companycountry)
    {
        return $this->setData(self::COMPANYCOUNTRY, $companycountry);
    }

    /**
     * Get companyzipcode
     * @return string|null
     */
    public function getCompanyzipcode()
    {
        return $this->_get(self::COMPANYZIPCODE);
    }

    /**
     * Set companyzipcode
     * @param string $companyzipcode
     * @return \Lof\Mautic\Api\Data\CompanyInterface
     */
    public function setCompanyzipcode($companyzipcode)
    {
        return $this->setData(self::COMPANYZIPCODE, $companyzipcode);
    }

    /**
     * Get companyemail
     * @return string|null
     */
    public function getCompanyemail()
    {
        return $this->_get(self::COMPANYEMAIL);
    }

    /**
     * Set companyemail
     * @param string $companyemail
     * @return \Lof\Mautic\Api\Data\CompanyInterface
     */
    public function setCompanyemail($companyemail)
    {
        return $this->setData(self::COMPANYEMAIL, $companyemail);
    }

    /**
     * Get companyindustry
     * @return string|null
     */
    public function getCompanyindustry()
    {
        return $this->_get(self::COMPANYINDUSTRY);
    }

    /**
     * Set companyindustry
     * @param string $companyindustry
     * @return \Lof\Mautic\Api\Data\CompanyInterface
     */
    public function setCompanyindustry($companyindustry)
    {
        return $this->setData(self::COMPANYINDUSTRY, $companyindustry);
    }

    /**
     * Get companynumber_of_employees
     * @return string|null
     */
    public function getCompanynumberOfEmployees()
    {
        return $this->_get(self::COMPANYNUMBER_OF_EMPLOYEES);
    }

    /**
     * Set companynumber_of_employees
     * @param string $companynumberOfEmployees
     * @return \Lof\Mautic\Api\Data\CompanyInterface
     */
    public function setCompanynumberOfEmployees($companynumberOfEmployees)
    {
        return $this->setData(self::COMPANYNUMBER_OF_EMPLOYEES, $companynumberOfEmployees);
    }

    /**
     * Get companyphone
     * @return string|null
     */
    public function getCompanyphone()
    {
        return $this->_get(self::COMPANYPHONE);
    }

    /**
     * Set companyphone
     * @param string $companyphone
     * @return \Lof\Mautic\Api\Data\CompanyInterface
     */
    public function setCompanyphone($companyphone)
    {
        return $this->setData(self::COMPANYPHONE, $companyphone);
    }

    /**
     * Get companywebsite
     * @return string|null
     */
    public function getCompanywebsite()
    {
        return $this->_get(self::COMPANYWEBSITE);
    }

    /**
     * Set companywebsite
     * @param string $companywebsite
     * @return \Lof\Mautic\Api\Data\CompanyInterface
     */
    public function setCompanywebsite($companywebsite)
    {
        return $this->setData(self::COMPANYWEBSITE, $companywebsite);
    }

    /**
     * Get companyannual_revenue
     * @return string|null
     */
    public function getCompanyannualRevenue()
    {
        return $this->_get(self::COMPANYANNUAL_REVENUE);
    }

    /**
     * Set companyannual_revenue
     * @param string $companyannualRevenue
     * @return \Lof\Mautic\Api\Data\CompanyInterface
     */
    public function setCompanyannualRevenue($companyannualRevenue)
    {
        return $this->setData(self::COMPANYANNUAL_REVENUE, $companyannualRevenue);
    }

    /**
     * Get companydescription
     * @return string|null
     */
    public function getCompanydescription()
    {
        return $this->_get(self::COMPANYDESCRIPTION);
    }

    /**
     * Set companydescription
     * @param string $companydescription
     * @return \Lof\Mautic\Api\Data\CompanyInterface
     */
    public function setCompanydescription($companydescription)
    {
        return $this->setData(self::COMPANYDESCRIPTION, $companydescription);
    }
}

