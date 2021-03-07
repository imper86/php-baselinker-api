<?php


namespace Imper86\PhpBaselinkerApi\Model;


use Imper86\PhpBaselinkerApi\Enum\Status;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

/**
 * Interface ResponseInterface
 * @package Imper86\PhpBaselinkerApi\Model
 */
interface ResponseInterface
{
    /**
     * @return HttpResponseInterface
     */
    public function getHttpResponse(): HttpResponseInterface;

    /**
     * @return mixed[]
     */
    public function getBody(): array;

    /**
     * @return Status
     */
    public function getStatus(): Status;

    /**
     * @return bool
     */
    public function isError(): bool;

    /**
     * @return string|null
     */
    public function getErrorCode(): ?string;

    /**
     * @return string|null
     */
    public function getErrorMessage(): ?string;
}
