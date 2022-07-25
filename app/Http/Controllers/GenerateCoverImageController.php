<?php

namespace App\Http\Controllers;

use App\Actions\GenerateCoverImageAction;
use App\Http\Requests\GenerateCoverImageRequest;

class GenerateCoverImageController
{
    private GenerateCoverImageAction $generateCoverImageAction;

    public function __construct(GenerateCoverImageAction $generateCoverImageAction)
    {
        $this->generateCoverImageAction = $generateCoverImageAction;
    }

    public function generate(GenerateCoverImageRequest $request): string
    {
        $image = $this->generateCoverImageAction->execute($request->get('title'));

        return '<img src="data:image/png;base64,' . $image . '" />';
    }
}
