<?php

/**
 * Stripe Delete Customer Request.
 */
namespace Omnipay\Stripe\Message;

/**
 * Stripe Fetch Customer Request.
 *
 *
 * @link https://stripe.com/docs/api#retrieve_customer
 */
class SearchCustomerRequest extends AbstractRequest
{
    /**
     * Get the search query
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->getParameter('query');
    }

    /**
     * Sets the search query
     *
     * @param string $value
     */
    public function setQuery($value)
    {
        return $this->setParameter('query', $value);
    }

    public function getData()
    {
        $data['query'] = $this->getQuery();

        return $data;
    }

    public function getHttpMethod()
    {
        return 'GET';
    }

    public function getEndpoint()
    {
        return $this->endpoint . '/customers/search';
    }
}
