<?php

namespace App\Actions;

use Illuminate\Filesystem\Filesystem;

class GetNewsletterIssueViewAction
{
    protected Filesystem $file;

    public function __construct(Filesystem $file)
    {
        $this->file = $file;
    }

    public function execute(string $year, string $issue): ?string
    {
        $path = resource_path('views/' . getLang() . '/newsletter/issues/' . $year . '/');

        [$search] = $this->file->glob($path . $issue . '*');

        if (!$search) {
            return null;
        }

        $view = getLang() . '.newsletter.issues.' . $year . '.';
        $view .= str_replace('.blade.php', '', pathinfo($search, PATHINFO_BASENAME));

        return $view;
    }
}
