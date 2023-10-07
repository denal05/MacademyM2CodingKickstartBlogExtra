<?php declare(strict_types=1);

namespace Denal05\MacademyM2CodingKickstartBlogExtra\Plugin;

use Denal05\MacademyM2CodingKickstartBlog\Observer\LogPostDetailView;

class PreventPostDetailLogger
{
    public function aroundExecute(
        LogPostDetailView $subject,
        callable $proceed,
    )
    {
        // Code before proceed()

        // Don't do anything in order to prevent the logger from executing.
        // $proceed();

        // Code after proceed()

    }
}
