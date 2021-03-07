<?php

namespace Imper86\PhpBaselinkerApi\Model;

use Imper86\PhpBaselinkerApi\Enum\Status;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

/**
 * Class AbstractResponse
 * @package Imper86\PhpBaselinkerApi\Model
 */
abstract class AbstractResponse implements ResponseInterface
{
    /**
     * @var HttpResponseInterface
     */
    protected HttpResponseInterface $httpResponse;
    /**
     * @var mixed[]
     */
    protected array $body;
    /**
     * @var Status
     */
    protected Status $status;
    /**
     * @var string|null
     */
    protected ?string $errorCode;
    /**
     * @var string|null
     */
    protected ?string $errorMessage;

    /**
     * AbstractResponse constructor.
     * @param HttpResponseInterface $httpResponse
     */
    public function __construct(HttpResponseInterface $httpResponse)
    {
        $this->httpResponse = $httpResponse;
        $this->body = json_decode($httpResponse->getBody()->__toString(), true);

        if (empty($this->body['status'])) {
            throw new \RuntimeException(
                sprintf('Invalid response body: %s', $httpResponse->getBody()->__toString()),
            );
        }

        $this->status = new Status($this->body['status']);
        $this->errorCode = $this->body['error_code'] ?? null;
        $this->errorMessage = $this->body['error_message'] ?? null;
    }

    /**
     * @return HttpResponseInterface
     */
    public function getHttpResponse(): HttpResponseInterface
    {
        return $this->httpResponse;
    }

    public function getBody(): array
    {
        return $this->body;
    }

    /**
     * @return Status
     */
    public function getStatus(): Status
    {
        return $this->status;
    }

    /**
     * @return bool
     */
    public function isError(): bool
    {
        return $this->status->equals(Status::ERROR());
    }

    /**
     * @return string|null
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }

    /**
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }
}
