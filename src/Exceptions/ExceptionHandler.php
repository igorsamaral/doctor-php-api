<?php

namespace App\Exceptions;

use Pecee\Http\Request;
use Pecee\SimpleRouter\Handlers\IExceptionHandler;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;

class ExceptionHandler implements IExceptionHandler
{
	public function handleError(Request $request, \Exception $error): void
	{
		if ($request->getUrl()->contains('/api')) {

			response()->json([
				'error' => $error->getMessage(),
				'code'  => $error->getCode(),
			]);

		}

		/* The router will throw the NotFoundHttpException on 404 */
		if($error instanceof NotFoundHttpException) {
			// Render custom 404-page
			$request->setRewriteCallback('Demo\Controllers\PageController@notFound');
			return;
		}

		throw $error;
	}
}