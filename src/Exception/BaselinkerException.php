<?php


namespace Imper86\PhpBaselinkerApi\Exception;


use Imper86\PhpBaselinkerApi\Model\ResponseInterface;
use Psr\Http\Message\RequestInterface;
use Throwable;

class BaselinkerException extends \Exception
{
    /**
     * @var RequestInterface
     */
    private RequestInterface $request;
    /**
     * @var ResponseInterface
     */
    private ResponseInterface $response;

    public function __construct(RequestInterface $request, ResponseInterface $response, ?Throwable $previous = null)
    {
        parent::__construct($response->getErrorMessage() ?: '', 0, $previous);
        $this->response = $response;
        $this->request = $request;
    }

    /**
     * @return RequestInterface
     */
    public function getRequest(): RequestInterface
    {
        return $this->request;
    }

    /**
     * @return ResponseInterface
     */
    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }
}
