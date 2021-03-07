<?php

namespace Imper86\PhpBaselinkerApi\Model;

use Imper86\PhpBaselinkerApi\BaselinkerApiInterface;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;

/**
 * Class AbstractResource
 * @package Imper86\PhpBaselinkerApi\Model
 */
abstract class AbstractResource implements ResourceInterface
{
    public const API_URL = 'https://api.baselinker.com/connector.php';

    /**
     * @var BaselinkerApiInterface
     */
    private BaselinkerApiInterface $client;
    /**
     * @var \ReflectionClass<static>
     */
    private \ReflectionClass $reflection;
    /**
     * @var UriFactoryInterface
     */
    private UriFactoryInterface $uriFactory;
    /**
     * @var StreamFactoryInterface
     */
    private StreamFactoryInterface $streamFactory;
    /**
     * @var RequestFactoryInterface
     */
    private RequestFactoryInterface $requestFactory;
    /**
     * @var ClientInterface|\Http\Client\HttpClient
     */
    private ClientInterface $httpClient;

    /**
     * AbstractResource constructor.
     * @param BaselinkerApiInterface $client
     */
    public function __construct(BaselinkerApiInterface $client)
    {
        $this->client = $client;
        $this->reflection = new \ReflectionClass($this);
        $this->uriFactory = $client->getBuilder()->getUriFactory();
        $this->streamFactory = $client->getBuilder()->getStreamFactory();
        $this->requestFactory = $client->getBuilder()->getRequestFactory();
        $this->httpClient = $client->getBuilder()->getHttpClient();
    }

    /**
     * @param string $name
     * @param mixed[] $arguments
     * @return ResourceInterface
     */
    public function __call(string $name, array $arguments): ResourceInterface
    {
        $className = $this->reflection->getName() . '\\' . ucfirst($name);

        if (class_exists($className) && is_a($className, ResourceInterface::class, true)) {
            return new $className($this->client);
        }

        throw new \InvalidArgumentException(sprintf('%s resource not found', $name));
    }

    /**
     * @param string $method
     * @param mixed[]|null $body
     * @return ResponseInterface
     * @throws ClientExceptionInterface
     */
    protected function sendRequest(string $method, ?array $body = null): ResponseInterface
    {
        $uri = $this->uriFactory->createUri(static::API_URL);
        $request = $this->requestFactory->createRequest('POST', $uri);
        $requestBody = ['token' => $this->client->getApiToken(), 'method' => $method];

        if ($body) {
            $requestBody['parameters'] = json_encode($body);
        }

        $request = $request
            ->withBody($this->streamFactory->createStream(http_build_query($requestBody)))
            ->withHeader('Content-Type', 'application/x-www-form-urlencoded')
            ->withHeader('Accept', 'application/json');

        return $this->httpClient->sendRequest($request);
    }
}
