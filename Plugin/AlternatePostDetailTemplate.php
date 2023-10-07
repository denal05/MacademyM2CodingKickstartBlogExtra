<?php declare(strict_types=1);

namespace Denal05\MacademyM2CodingKickstartBlogExtra\Plugin;

use Denal05\MacademyM2CodingKickstartBlog\Controller\Post\Detail;
use Magento\Framework\App\RequestInterface;

class AlternatePostDetailTemplate
{
    public function __construct(
        private RequestInterface $request,
    ) {}

    public function afterExecute(
        Detail $subject,
        $result
    )
    {
        if ($this->request->getParam('alternate')) {
            $result->getLayout()
                ->getBlock('blog.post.detail')
                ->setTemplate('Denal05\MacademyM2CodingKickstartBlogExtra::post/detail.phtml');
        }
        return $result;
    }
}
