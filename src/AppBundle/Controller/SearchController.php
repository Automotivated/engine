<?php

namespace AppBundle\Controller;

use AppBundle\Response\JsonFormatter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SearchController extends Controller
{
	/**
	 * @var JsonFormatter
	 */
	private $response;

	/**
	 * SearchController constructor.
	 *
	 * @param JsonFormatter $response
	 */
	public function __construct(
		JsonFormatter $response
	) {
		$this->response = $response;
	}

	/**
	 * @return JsonResponse
	 *
	 * @throws \InvalidArgumentException
	 */
	public function getSearchAction() {
		$response = ['aap' => 'noot'];

		return $this->response->createView($response, Response::HTTP_OK);
	}
}
