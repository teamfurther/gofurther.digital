<?php

namespace App\Actions;

use Illuminate\Filesystem\Filesystem;

class GetNewsletterIssuesAction
{
    protected Filesystem $file;

    public function __construct(Filesystem $file)
    {
        $this->file = $file;
    }

    /**
     * @return array<string>
     */
    public function execute(): array
    {
        $path = resource_path('views/' . getLang() . '/newsletter/issues');
        $issues = [];

        foreach (array_reverse($this->file->allFiles($path)) as $issue) {
            $dirName = basename($issue->getPath());
            $fileName = str_replace('.blade.php', '', $issue->getFilename());

            [
                $issues[$dirName][$fileName]['number'],
                $issues[$dirName][$fileName]['issue'],
                $issues[$dirName][$fileName]['title']
            ] = explode('---', $fileName);
        }

        return $issues;
    }
}
