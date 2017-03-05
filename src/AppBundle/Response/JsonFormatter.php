<?php

namespace AppBundle\Response;

use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class JsonFormatter
{
	/**
	 * @var SerializerInterface
	 */
	private $serializer;
	/**
	 * @var LoggerInterface
	 */
	private $logger;

	/**
	 * ResponseFormatter constructor.
	 *
	 * @param SerializerInterface $serializer
	 * @param LoggerInterface     $logger
	 */
	public function __construct(
		SerializerInterface $serializer,
		LoggerInterface $logger
	) {
		$this->serializer = $serializer;
		$this->logger = $logger;
	}

	/**
	 * @param $data
	 * @param $statusCode
	 *
	 * @return JsonResponse
	 *
	 * @throws \Exception
	 */
	public function createView($data, $statusCode = Response::HTTP_OK)
	{
		$response = new JsonResponse();

		$context = new SerializationContext();
		$context->setSerializeNull(true);

		if ($data !== null) {
			$data = $this->serializer->serialize(['data' => $data], 'json', $context);
			$response->setJson($data);
		}

		$response->setStatusCode($statusCode);

		return $response;
	}

	/**
	 * @param \Exception $e
	 *
	 * @return JsonResponse
	 *
	 * @throws \InvalidArgumentException
	 */
	public function createViewFromException($e)
	{
		$response = new JsonResponse();
		$response->setData([
			'code' => get_class($e),
			'message' => 'An error occurred',
			'errors' => [
				'id' => null,
				'type' => $e->getCode(),
				'message' => $e->getMessage(),
			],
		]);
		$response->setStatusCode(Response::HTTP_BAD_REQUEST);
		$this->logger->error($e->getMessage());

		return $response;
	}
}
