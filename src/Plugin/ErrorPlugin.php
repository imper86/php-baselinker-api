<?php

namespace Imper86\PhpBaselinkerApi\Plugin;

use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use Imper86\PhpBaselinkerApi\Enum\Status;
use Imper86\PhpBaselinkerApi\Exception\BaselinkerException;
use Imper86\PhpBaselinkerApi\Model\EmptyResponse;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class ErrorPlugin implements Plugin
{
    public function handleRequest(
        RequestInterface $request,
        callable $next,
        callable $first
    ): Promise {
        $promise = $next($request);

        return $promise->then(function (ResponseInterface $response) use ($request) {
            if ($response->getStatusCode() >= 400) {
                throw new BaselinkerException($request, new EmptyResponse($response));
            }

            $body = json_decode($response->getBody()->__toString(), true);

            if ($body['status'] === Status::ERROR) {
                throw new BaselinkerException($request, new EmptyResponse($response));
            }

            return $response;
        });
    }
}
