<?php

namespace App\Actions;

use Symfony\Component\Finder\Finder;

class GetNewsletterIssuesAction
{
    protected Finder $finder;

    public function __construct(Finder $finder)
    {
        $this->finder = $finder;
    }

    /**
     * @return array<string>
     */
    public function execute(): array
    {
        $path = resource_path('views/' . getLang() . '/newsletter/issues');
        $issues = [];

        foreach (array_reverse($this->allFiles($path)) as $issue) {
            $dirName = basename($issue->getPath());
            $fileName = str_replace('.blade.php', '', $issue->getFilename());

            [
                $issues[$dirName][$fileName]['number'],
                $issues[$dirName][$fileName]['issue'],
                $issues[$dirName][$fileName]['title'],
            ] = explode('---', $fileName);
        }

        return $issues;
    }

    private function allFiles($directory)
    {
        return iterator_to_array(
            $this->finder->create()->files()->ignoreDotFiles(true)->in($directory)->sortByName(true),
            false
        );
    }
}
